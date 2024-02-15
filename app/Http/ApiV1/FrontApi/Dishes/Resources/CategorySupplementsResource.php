<?php

namespace App\Http\ApiV1\FrontApi\Dishes\Resources;

use App\Domain\Cities\Models\City;
use App\Domain\Dishes\Models\CategorySupplement;
use App\Domain\Dishes\Models\Supplement;
use App\Http\ApiV1\FrontApi\Support\Resources\BaseJsonResource;
use Illuminate\Http\Request;

/** @mixin CategorySupplement */
class CategorySupplementsResource extends BaseJsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'supplements' => SupplementsResource::collection($this->whenLoaded('supplements')),
        ];
    }
}
