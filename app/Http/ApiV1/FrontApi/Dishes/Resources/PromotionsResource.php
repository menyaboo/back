<?php

namespace App\Http\ApiV1\FrontApi\Dishes\Resources;

use App\Domain\Promotions\Promotion;
use App\Http\ApiV1\FrontApi\Support\Resources\BaseJsonResource;
use Illuminate\Http\Request;

/** @mixin Promotion */
class PromotionsResource extends BaseJsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'background' => $this->background,
            'image' => $this->image,
            'cities' => CitiesResource::collection($this->whenLoaded('cities')),
        ];
    }
}
