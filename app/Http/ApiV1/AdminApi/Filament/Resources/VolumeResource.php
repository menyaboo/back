<?php

namespace App\Http\ApiV1\AdminApi\Filament\Resources;

use App\Domain\Dishes\Models\Dish;
use App\Domain\Dishes\Models\Volume;
use App\Http\ApiV1\AdminApi\Enums\NavigationGroup;
use App\Http\ApiV1\AdminApi\Filament\Resources\VolumeResource\Pages;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Table;

class VolumeResource extends Resource
{
    protected static ?string $model = Volume::class;
    protected static ?string $label = 'Объем';
    protected static ?string $pluralLabel = 'Объемы';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = NavigationGroup::DISHES->value;

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('dish.name')->label('Блюдо'),
                Tables\Columns\TextColumn::make('meaning')->label('Объем'),
                Tables\Columns\TextColumn::make('dish.unit')->label('Единица измерения'),
                Tables\Columns\TextColumn::make('cost')->label('Стоимость')->money('RUB'),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('dish_id')
                    ->label('Блюда')
                    ->searchable()
                    ->options(Dish::all()->pluck('name', 'id'))
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
            'index' => Pages\ListVolumes::route('/'),
            'create' => Pages\CreateVolume::route('/create'),
            'edit' => Pages\EditVolume::route('/{record}/edit'),
        ];
    }
}
