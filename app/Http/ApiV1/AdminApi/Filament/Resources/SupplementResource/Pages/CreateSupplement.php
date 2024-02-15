<?php

namespace App\Http\ApiV1\AdminApi\Filament\Resources\SupplementResource\Pages;

use App\Domain\Dishes\Models\CategorySupplement;
use App\Http\ApiV1\AdminApi\Filament\Resources\SupplementResource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\CreateRecord;

class CreateSupplement extends CreateRecord
{
    protected static string $resource = SupplementResource::class;

    public function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name')->label('Название')->unique()->required(),
            TextInput::make('cost')->label('Стоимость')->numeric()->rules('numeric|max:9999.99'),

            Select::make('category_supplement_id')
                ->label('Категория')
                ->options(CategorySupplement::query()->pluck('name', 'id'))
                ->native(false)
                ->columnSpan(2)
                ->required(),
        ]);
    }
}
