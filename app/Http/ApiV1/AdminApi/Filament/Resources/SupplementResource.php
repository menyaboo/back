<?php

namespace App\Http\ApiV1\AdminApi\Filament\Resources;

use App\Domain\Dishes\Models\CategorySupplement;
use App\Domain\Dishes\Models\Dish;
use App\Domain\Dishes\Models\Supplement;
use App\Http\ApiV1\AdminApi\Enums\NavigationGroup;
use App\Http\ApiV1\AdminApi\Filament\Resources\SupplementResource\Pages;
use App\Http\ApiV1\AdminApi\Filament\Resources\SupplementResource\RelationManagers;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class SupplementResource extends Resource
{
    protected static ?string $model = Supplement::class;
    protected static ?string $label = 'Добавку';
    protected static ?string $pluralLabel = 'Добавки';
    protected static ?string $navigationGroup = NavigationGroup::DISHES->value;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Название'),
                Tables\Columns\TextColumn::make('cost')->label('Стоимость')->money('RUB'),
                Tables\Columns\TextColumn::make('category_supplement.name')->label('Категория'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category_supplement_id')
                    ->label('Категория')
                    ->searchable()
                    ->options(CategorySupplement::all()->pluck('name', 'id'))
            ],Tables\Enums\FiltersLayout::AboveContent)
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
            'index' => Pages\ListSupplements::route('/'),
            'create' => Pages\CreateSupplement::route('/create'),
            'edit' => Pages\EditSupplement::route('/{record}/edit'),
        ];
    }
}
