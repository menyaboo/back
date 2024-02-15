<?php

namespace App\Http\ApiV1\FrontApi\Dishes\Resources;

use App\Domain\Cities\Models\City;
use App\Http\ApiV1\FrontApi\Support\Resources\BaseJsonResource;
use Illuminate\Http\Request;

/** @mixin City */
class CitiesResource extends BaseJsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
        ];
    }
}
