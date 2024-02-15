<?php

namespace App\Http\ApiV1\AdminApi\Filament\Resources\VolumeResource\Pages;

use App\Domain\Dishes\Models\Dish;
use App\Http\ApiV1\AdminApi\Filament\Resources\VolumeResource;
use Filament\Actions;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\EditRecord;

class EditVolume extends EditRecord
{
    protected static string $resource = VolumeResource::class;

    public function form(Form $form): Form
    {
        return $form->schema([
            Select::make('dish_id')
                ->label('Блюдо')
                ->searchable()
                ->options(Dish::query()->pluck('name', 'id'))
                ->native(false)
                ->columnSpan(2)
                ->required(),

            TextInput::make('meaning')->label('Объем')
                ->numeric()->rules('numeric|max:999.99')->required(),
            TextInput::make('cost')->label('Стоимость')
                ->numeric()->rules('numeric|max:9999.99')->required(),
        ]);
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
