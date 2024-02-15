<?php

namespace App\Http\ApiV1\AdminApi\Filament\Resources;

use App\Domain\Promotions\Promotion;
use App\Http\ApiV1\AdminApi\Enums\NavigationGroup;
use App\Http\ApiV1\AdminApi\Filament\Resources\PromotionResource\Pages;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PromotionResource extends Resource
{
    protected static ?string $model = Promotion::class;
    protected static ?string $label = 'Акции';
    protected static ?string $pluralLabel = 'Акции';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = NavigationGroup::PROMOTIONS->value;

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Название'),
                Tables\Columns\TextColumn::make('description')->label('Описание'),
                Tables\Columns\TextColumn::make('background')->label('Изображение фона')->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('image')->label('Изображение')->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([

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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPromotions::route('/'),
            'create' => Pages\CreatePromotion::route('/create'),
            'edit' => Pages\EditPromotion::route('/{record}/edit'),
        ];
    }
}
