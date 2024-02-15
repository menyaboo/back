<?php

namespace App\Http\ApiV1\FrontApi\Dishes\Resources;

use App\Domain\Dishes\Models\Dish;
use App\Http\ApiV1\FrontApi\Support\Resources\BaseJsonResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/** @mixin Dish */
class DishesResource extends BaseJsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'image' => $this->image
                ? Storage::disk('dishes')->url($this->image)
                : null,
            //'cost' => $this->volumes->first()->cost ?? null,
            'composition' => $this->composition,
            'energy_value' => $this->energy_value,
            'proteins' => $this->proteins,
            'fats' => $this->fats,
            'carbohydrates' => $this->carbohydrates,
            'category_dish' => $this->category->name,
            'unit' => $this->unit,
            'volumes' => VolumesResource::collection($this->whenLoaded('volumes')),
            //'category_supplements' => SupplementsResource::collection($this->whenLoaded('category_supplements')),
            'supplements' => SupplementsResource::collection($this->whenLoaded('supplements')),
        ];
    }
}
