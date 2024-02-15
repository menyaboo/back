<?php

namespace App\Http\ApiV1\AdminApi\Filament\Resources\DishPointResource\Pages;

use App\Http\ApiV1\AdminApi\Filament\Resources\DishPointResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDishPoints extends ListRecords
{
    protected static string $resource = DishPointResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
