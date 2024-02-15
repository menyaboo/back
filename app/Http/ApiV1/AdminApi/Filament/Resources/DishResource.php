<?php

namespace App\Http\ApiV1\AdminApi\Filament\Resources;

use App\Domain\Dishes\Models\Dish;
use App\Http\ApiV1\AdminApi\Enums\NavigationGroup;
use App\Http\ApiV1\AdminApi\Filament\Resources\DishResource\Pages;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;

class DishResource extends Resource
{
    protected static ?string $model = Dish::class;
    protected static ?string $label = 'Блюдо';
    protected static ?string $pluralLabel = 'Блюда';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = NavigationGroup::DISHES->value;

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Название'),
                Tables\Columns\TextColumn::make('image')->label('Фотография'),
                Tables\Columns\TextColumn::make('composition')->label('Состав'),
                Tables\Columns\TextColumn::make('category.name')->label('Категория'),
                Tables\Columns\TextColumn::make('description')->label('Описание')->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('energy_value')->label('КБЖУ')->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('proteins')->label('Белки')->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('fats')->label('Жиры')->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('carbohydrates')->label('Углеводы')->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Дата создания')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Дата обновления')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category_id')
                    ->label('Категория блюда')
                    ->relationship('category', 'name')
                    ->native(false),
            ], FiltersLayout::AboveContent)
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDishes::route('/'),
            'create' => Pages\CreateDish::route('/create'),
            'edit' => Pages\EditDish::route('/{record}/edit'),
        ];
    }
}
