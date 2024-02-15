<?php

namespace App\Http\ApiV1\AdminApi\Filament\Resources\DishSupplementResource\Pages;

use App\Http\ApiV1\AdminApi\Filament\Resources\DishSupplementResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDishSupplements extends ListRecords
{
    protected static string $resource = DishSupplementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
