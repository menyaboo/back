<?php

namespace App\Http\ApiV1\FrontApi\Dishes\Controllers;

use App\Http\ApiV1\FrontApi\Dishes\Queries\DishesQuery;
use App\Http\ApiV1\FrontApi\Dishes\Resources\DishesResource;
use App\Http\ApiV1\FrontApi\Support\Pagination\PageBuilderFactory;
use Illuminate\Contracts\Support\Responsable;

class DishesController
{
    public function search(PageBuilderFactory $pageBuilderFactory, DishesQuery $query): Responsable
    {
        return DishesResource::collectPage(
            $pageBuilderFactory->fromQuery($query)->build()
        );
    }

    public function get(int $id, DishesQuery $query): Responsable
    {
        return new DishesResource($query->findOrFail($id));
    }
}
