<?php

namespace App\Http\ApiV1\AdminApi\Filament\Resources\DishSupplementResource\Pages;

use App\Domain\Dishes\Models\CategorySupplement;
use App\Domain\Dishes\Models\Dish;
use App\Domain\Dishes\Models\DishSupplement;
use App\Http\ApiV1\AdminApi\Filament\Resources\DishSupplementResource;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditDishSupplement extends EditRecord
{
    protected static string $resource = DishSupplementResource::class;

    public function form(Form $form): Form
    {
        $categories = CategorySupplement::with('supplements')->get();

        $schema = [
            Select::make('dish_id')
                ->label('Блюдо')
                ->options(Dish::pluck('name', 'id'))
                ->columnSpan(2)
                ->searchable()
                ->required()
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

    public function mount($record): void
    {
        parent::mount($record);

        $existingDishSupplements = DishSupplement::where('dish_id', $this->record->dish_id)
            ->pluck('supplement_id')->toArray();

        $this->form->fill([
            'dish_id' => $this->record->dish_id,
            'supplement_ids' => $existingDishSupplements,
        ]);
    }

    public function save(bool $shouldRedirect = true): void
    {
        $data = $this->form->getState();
        $dishId = $data['dish_id'];
        $supplementIds = $data['supplement_ids'];

        DishSupplement::where('dish_id', $dishId)->delete();

        foreach ($supplementIds as $supplementId) {
            DishSupplement::create([
                'dish_id' => $dishId,
                'supplement_id' => $supplementId,
            ]);
        }

        Notification::make()
            ->title('Updated successfully')
            ->success()
            ->send();

        $this->redirect($this->getResource()::getUrl('index'));
    }
}
