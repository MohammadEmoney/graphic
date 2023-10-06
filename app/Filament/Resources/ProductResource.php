<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Category;
use App\Models\Product;
use App\Models\UnitPrice;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\SpatieTagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Spatie\Tags\Tag;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationGroup = 'Product';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required(),
                TextInput::make('slug')->required(),
                TextInput::make('sku')->required(),
                TextInput::make('price')->required(),
                Select::make('unit_price')->options(UnitPrice::pluck('name', 'id')->toArray())->required(),
                TextInput::make('discount_price'),
                Toggle::make('is_active')->required(),
                Toggle::make('is_featured')->required(),
                Textarea::make('short_description')->columnSpan(2),
                RichEditor::make('description')->columnSpan(2),

                Section::make('Media')
                    ->description('Uploading Product Media')
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('FeaturedImage')
                            ->responsiveImages()
                            ->collection('FeaturedImage'),
                        SpatieMediaLibraryFileUpload::make('Gallery')
                            ->responsiveImages()
                            ->collection('Gallery'),
                    ]),

                Section::make('Category and Tags')
                    ->description('Categories and Tags')
                    ->schema([
                        Select::make('category_id')->options(Category::pluck('name', 'id')->toArray())->required(),
                        // Select::make('tags')->options(Tag::pluck('name', 'id')->toArray())->required(),
                    ]),
                Card::make()
                    ->schema([
                        SpatieTagsInput::make('tags')
                            ->label(__('Tags'))
                            ->type('product')
                            ->suggestions(function () {
                                $vars = Tag::whereIn('type', [
                                    'product',
                                ])
                                    ->get('name')
                                    ->toArray();

                                return Arr::flatten($vars);
                            }),
                    ])
                    ->columns([
                        'sm' => 1,
                    ])
                    ->columnSpan(1)
            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->label(__('Name'))->sortable()->searchable(),
                TextColumn::make('slug')->label(__('Slug'))->sortable()->searchable(),
                TextColumn::make('sku')->label(__('Sku'))->sortable()->searchable(),
                TextColumn::make('price')->label(__('Price'))->money('IRR')->sortable()->searchable(),
                TextColumn::make('discount_price')->label(__('Discount Price'))->sortable()->searchable(),
                IconColumn::make('is_active')->sortable()->boolean(),
                IconColumn::make('is_featured')->sortable()->boolean(),
                TextColumn::make('created_at')->dateTime(),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                Filter::make('is_active')
                    ->query(fn (Builder $query) => $query->where('is_active', true)),
                Filter::make('is_featured')
                    ->query(fn (Builder $query) => $query->where('is_featured', true)),
                // SelectFilter::make('status')
                //     ->options([
                //         'draft' => 'Draft',
                //         'reviewing' => 'Reviewing',
                //         'published' => 'Published',
                //     ]),
                SelectFilter::make('user_id')->label(__('Users'))
                    ->multiple()
                    ->options(User::select(DB::raw("IFNULL(NULLIF(name, ''), email) AS display_value"), 'id')
                        ->pluck('display_value', 'id'))
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
