<?php

namespace App\Http\ApiV1\AdminApi\Filament\Resources;

use App\Domain\Dishes\Models\DishPoint;
use App\Http\ApiV1\AdminApi\Enums\NavigationGroup;
use App\Http\ApiV1\AdminApi\Filament\Resources\DishPointResource\Pages;
use App\Http\ApiV1\AdminApi\Filament\Resources\DishPointResource\RelationManagers;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class DishPointResource extends Resource
{
    protected static ?string $model = DishPoint::class;
    protected static ?string $label = 'Точку блюда';
    protected static ?string $pluralLabel = 'Точки блюд';
    protected static ?string $navigationGroup = NavigationGroup::DISHES->value;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('point.name')->label('Точка'),
                Tables\Columns\TextColumn::make('dish.name')->label('Блюдо'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListDishPoints::route('/'),
            'create' => Pages\CreateDishPoint::route('/create'),
            'edit' => Pages\EditDishPoint::route('/{record}/edit'),
        ];
    }
}
