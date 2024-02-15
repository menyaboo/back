<?php

namespace App\Http\ApiV1\FrontApi\Dishes\Queries;

use App\Domain\Dishes\Models\CategoryDish;
use Spatie\QueryBuilder\QueryBuilder;

class CategoryDishesQuery extends QueryBuilder
{
    public function __construct()
    {
        parent::__construct(CategoryDish::query());

        $this->allowedIncludes([
            'dishes',
            'dishes.volumes',
        ]);
    }
}
