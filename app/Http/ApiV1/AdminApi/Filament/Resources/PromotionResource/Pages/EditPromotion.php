<?php

namespace App\Http\ApiV1\AdminApi\Filament\Resources\PromotionResource\Pages;

use App\Http\ApiV1\AdminApi\Filament\Resources\PromotionResource;
use Filament\Actions;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Pages\EditRecord;

class EditPromotion extends EditRecord
{
    protected static string $resource = PromotionResource::class;

    public function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name')->label('Название')->unique()->required()->columnSpan(2),
            Textarea::make('description')->label('Описание')->required()->columnSpan(2),
            FileUpload::make('background')->label('Фон')->image()->disk('promotions'),
            FileUpload::make('image')->label('Фотография')->image()->disk('promotions'),
        ]);
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
