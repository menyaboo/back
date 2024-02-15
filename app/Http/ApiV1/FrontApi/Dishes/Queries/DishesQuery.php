<?php

namespace App\Http\ApiV1\FrontApi\Dishes\Queries;

use App\Domain\Dishes\Models\Dish;
use Spatie\QueryBuilder\QueryBuilder;

class DishesQuery extends QueryBuilder
{
    public function __construct()
    {
        parent::__construct(Dish::query());

        $this->allowedIncludes([
            'volumes',
            'supplements',
            'category_supplements',
        ]);
    }
}
