<?php

namespace App\Http\ApiV1\AdminApi\Filament\Resources\DishSupplementResource\Pages;

use App\Domain\Dishes\Models\CategorySupplement;
use App\Domain\Dishes\Models\Dish;
use App\Domain\Dishes\Models\DishSupplement;
use App\Http\ApiV1\AdminApi\Filament\Resources\DishSupplementResource;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Redirect;

class CreateDishSupplement extends CreateRecord
{
    protected static string $resource = DishSupplementResource::class;

    public function form(Form $form): Form
    {
        $dishes = Dish::all();
        $categories = CategorySupplement::with('supplements')->get();

        $schema = [
            Select::make('dish_id')
                ->label('Блюдо')
                ->options($dishes->pluck('name', 'id'))
                ->columnSpan(2)
                ->searchable()
                ->required(),
        ];

        foreach ($categories as $category) {
            $schema[] = CheckboxList::make('supplement_ids')
                ->label($category->name)
                ->options($category->supplements->pluck('name', 'id')->toArray())
                ->columns(2)
                ->reactive();
        }

        return $form->schema($schema);
    }


    public function create(bool $another = false): void
    {
        $data = $this->form->getState();
        $dishId = $data['dish_id'];
        $supplementIds = $data['supplement_ids'];

        foreach ($supplementIds as $supplementId) {
            DishSupplement::firstOrCreate([
                'dish_id' => $dishId,
                'supplement_id' => $supplementId,
            ]);
        }

        Notification::make()
            ->title('Saved successfully')
            ->success()
            ->send();

        $this->redirect($this->getResource()::getUrl('index'));
    }
}
