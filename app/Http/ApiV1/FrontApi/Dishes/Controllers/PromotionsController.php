<?php

namespace App\Http\ApiV1\FrontApi\Dishes\Controllers;

use App\Http\ApiV1\FrontApi\Dishes\Queries\PromotionsQuery;
use App\Http\ApiV1\FrontApi\Dishes\Resources\PromotionsResource;
use App\Http\ApiV1\FrontApi\Support\Pagination\PageBuilderFactory;
use Illuminate\Contracts\Support\Responsable;

class PromotionsController
{
    public function search(PageBuilderFactory $pageBuilderFactory, PromotionsQuery $query): Responsable
    {
        return PromotionsResource::collectPage(
            $pageBuilderFactory->fromQuery($query)->build()
        );
    }

    public function get(int $id, PromotionsQuery $query): Responsable
    {
        return new PromotionsResource($query->findOrFail($id));
    }
}
