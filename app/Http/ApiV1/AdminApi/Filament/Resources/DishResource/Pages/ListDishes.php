<?php

namespace App\Http\ApiV1\AdminApi\Filament\Resources\DishResource\Pages;

use App\Http\ApiV1\AdminApi\Filament\Resources\DishResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDishes extends ListRecords
{
    protected static string $resource = DishResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
