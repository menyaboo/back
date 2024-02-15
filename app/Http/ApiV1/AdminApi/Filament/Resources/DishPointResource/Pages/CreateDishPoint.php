<?php

namespace App\Http\ApiV1\AdminApi\Filament\Resources\DishPointResource\Pages;

use App\Http\ApiV1\AdminApi\Filament\Resources\DishPointResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDishPoint extends CreateRecord
{
    protected static string $resource = DishPointResource::class;
}
