<?php

namespace App\Http\ApiV1\AdminApi\Filament\Resources\DishResource\Pages;

use App\Domain\Dishes\Models\Dish;
use App\Http\ApiV1\AdminApi\Filament\Resources\DishResource;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\EditRecord;

class EditDish extends EditRecord
{
    protected static string $resource = DishResource::class;

    public function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name')->label('Название')->unique(ignoreRecord: true)->required(),
            TextInput::make('composition')->label('Состав'),
            TextInput::make('energy_value')->label('КБЖУ')->numeric(),
            TextInput::make('proteins')->label('Белки')->numeric(),
            TextInput::make('fats')->label('Жиры')->numeric(),
            TextInput::make('carbohydrates')->label('Углеводы')->numeric(),
            Textarea::make('description')->label('Описание')->columnSpan(2),
            FileUpload::make('image')->label('Фотография')->image()->disk('dishes'),
            Select::make('category_id')->label('Категория блюда')
                ->relationship('category', 'name')->native(false),

            Select::make('unit')
                ->options([
                    'мл' => 'мл',
                    'г' => 'г',
                    'шт' => 'шт',
                ])
                ->label('Единица измерения')
                ->native(false)
                ->required()
                ->columnSpan(2),
            Repeater::make('volumes')->label('Создать объем')
                ->schema([
                    TextInput::make('meaning')
                        ->label('Значение')
                        ->numeric()
                        ->rules('numeric|max:999.99|min:0|required')
                        ->required(),
                    TextInput::make('cost')
                        ->label('Стоимость')
                        ->numeric()
                        ->rules('numeric|max:9999.99|min:0|required')
                        ->required(),
                    Select::make('unit')
                        ->options([
                            'мл' => 'мл',
                            'г' => 'г',
                            'шт' => 'шт',
                        ])
                        ->label('Единица измерения')
                        ->native(false)
                        ->required(),
                ])
                ->createItemButtonLabel('Добавить объем')
                ->columnSpan(2),
        ]);
    }
}
