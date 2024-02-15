<?php

namespace App\Http\ApiV1\AdminApi\Filament\Resources\VolumeResource\Pages;

use App\Domain\Dishes\Models\Dish;
use App\Domain\Dishes\Models\Volume;
use App\Http\ApiV1\AdminApi\Filament\Resources\VolumeResource;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;

class CreateVolume extends CreateRecord
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

            Repeater::make('volumes')->schema([
                TextInput::make('meaning')->label('Объем')
                    ->numeric()->rules('numeric|max:999.99')->required(),
                TextInput::make('cost')->label('Стоимость')
                    ->numeric()->rules('numeric|max:9999.99')->required(),
            ])->columnSpan(2)
        ]);
    }

    protected function handleRecordCreation(array $data): \Illuminate\Database\Eloquent\Model
    {
        $dishId = $data['dish_id'];
        $volumes = $data['volumes'];

        foreach ($volumes as $volumeData) {
            Volume::create([
                'dish_id' => $dishId,
                'meaning' => $volumeData['meaning'],
                'cost' => $volumeData['cost'],
            ]);
        }

        return Dish::find($dishId);
    }
}
