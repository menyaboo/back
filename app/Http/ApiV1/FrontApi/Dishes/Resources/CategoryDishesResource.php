<?php

namespace App\Http\ApiV1\FrontApi\Dishes\Resources;

use App\Domain\Dishes\Models\CategoryDish;
use App\Http\ApiV1\FrontApi\Support\Resources\BaseJsonResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/** @mixin CategoryDish */
class CategoryDishesResource extends BaseJsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'image' => $this->image
                ? Storage::disk('category_dishes')->url($this->image)
                : null,
            'dishes' => DishesResource::collection($this->whenLoaded('dishes')),
        ];
    }
}
