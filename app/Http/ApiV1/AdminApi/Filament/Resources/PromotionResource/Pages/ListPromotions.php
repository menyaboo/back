<?php

namespace App\Http\ApiV1\AdminApi\Filament\Resources\PromotionResource\Pages;

use App\Http\ApiV1\AdminApi\Filament\Resources\PromotionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPromotions extends ListRecords
{
    protected static string $resource = PromotionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
