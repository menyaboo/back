<?php

namespace App\Http\ApiV1\AdminApi\Filament\Resources;

use App\Domain\Dishes\Models\Dish;
use App\Domain\Dishes\Models\DishSupplement;
use App\Domain\Dishes\Models\Supplement;
use App\Http\ApiV1\AdminApi\Enums\NavigationGroup;
use App\Http\ApiV1\AdminApi\Filament\Resources\DishSupplementResource\Pages;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;

class DishSupplementResource extends Resource
{
    protected static ?string $model = DishSupplement::class;
    protected static ?string $label = 'Добавки для блюда';
    protected static ?string $pluralLabel = 'Добавки для блюд';
    protected static ?string $navigationGroup = NavigationGroup::DISHES->value;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('dish.name')->label('Блюдо'),
                Tables\Columns\TextColumn::make('supplement.name')->label('Добавка'),
                Tables\Columns\TextColumn::make('supplement.category_supplement.name')->label('Категория'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('dish_id')
                    ->label('Блюдо')
                    ->options(Dish::query()->pluck('name', 'id'))
                    ->native(false)
                    ->searchable(),
                Tables\Filters\SelectFilter::make('supplement_id')
                    ->label('Добавка')
                    ->options(Supplement::query()->pluck('name', 'id'))
                    ->native(false)
                    ->searchable(),
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
            'index' => Pages\ListDishSupplements::route('/'),
            'create' => Pages\CreateDishSupplement::route('/create'),
            'edit' => Pages\EditDishSupplement::route('/{record}/edit'),
        ];
    }
}
