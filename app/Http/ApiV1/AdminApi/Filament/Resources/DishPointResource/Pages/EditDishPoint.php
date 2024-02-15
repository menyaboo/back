<?php

namespace App\Http\ApiV1\AdminApi\Filament\Resources\DishPointResource\Pages;

use App\Http\ApiV1\AdminApi\Filament\Resources\DishPointResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDishPoint extends EditRecord
{
    protected static string $resource = DishPointResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
