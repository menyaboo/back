<?php

namespace App\Http\ApiV1\FrontApi\Dishes\Controllers;

use App\Http\ApiV1\FrontApi\Dishes\Queries\CategoryDishesQuery;
use App\Http\ApiV1\FrontApi\Dishes\Resources\CategoryDishesResource;
use App\Http\ApiV1\FrontApi\Support\Pagination\PageBuilderFactory;
use Illuminate\Contracts\Support\Responsable;

class CategoryDishesController
{
    public function search(PageBuilderFactory $pageBuilderFactory, CategoryDishesQuery $query): Responsable
    {
        return CategoryDishesResource::collectPage(
            $pageBuilderFactory->fromQuery($query)->build()
        );
    }

    public function get(int $id, CategoryDishesQuery $query): Responsable
    {
        return new CategoryDishesResource($query->findOrFail($id));
    }
}
