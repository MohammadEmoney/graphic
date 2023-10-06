<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AttributeValueResource\Pages;
use App\Filament\Resources\AttributeValueResource\RelationManagers;
use App\Models\Attribute;
use App\Models\AttributeValue;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AttributeValueResource extends Resource
{
    protected static ?string $model = AttributeValue::class;

    protected static ?string $navigationGroup = 'Product';

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([
                    TextInput::make('name')->required(),
                    TextInput::make('slug')->required(),
                    Select::make('attribute_id')->label('Attribute')->options(Attribute::pluck('name', 'id')->toArray())->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->sortable()->searchable(),
                TextColumn::make('slug')->sortable()->searchable(),
                TextColumn::make('attribute.name')->sortable()->searchable(),
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
            'index' => Pages\ListAttributeValues::route('/'),
            'create' => Pages\CreateAttributeValue::route('/create'),
            'edit' => Pages\EditAttributeValue::route('/{record}/edit'),
        ];
    }
}
