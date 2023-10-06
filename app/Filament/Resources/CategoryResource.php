<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryResource\Pages;
use App\Filament\Resources\CategoryResource\RelationManagers;
use App\Models\Category;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CategoryResource extends Resource
{
    protected static ?string $model = Category::class;

    protected static ?string $navigationGroup = 'Product';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required()->maxLength(255),
                TextInput::make('slug')->required()->maxLength(255),
                Select::make('category_id')->label('Parent')->options(Category::pluck('name', 'id')->toArray()),
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
            ]);
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
            ->filters([
                //
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
            'index' => Pages\ListCategories::route('/'),
            'create' => Pages\CreateCategory::route('/create'),
            'edit' => Pages\EditCategory::route('/{record}/edit'),
        ];
    }
}
