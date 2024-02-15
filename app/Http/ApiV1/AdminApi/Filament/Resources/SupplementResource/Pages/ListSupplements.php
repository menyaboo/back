<?php

namespace App\Http\ApiV1\AdminApi\Filament\Resources\SupplementResource\Pages;

use App\Http\ApiV1\AdminApi\Filament\Resources\SupplementResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSupplements extends ListRecords
{
    protected static string $resource = SupplementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
