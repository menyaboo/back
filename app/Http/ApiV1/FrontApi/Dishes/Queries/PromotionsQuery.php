<?php

namespace App\Http\ApiV1\FrontApi\Dishes\Queries;

use App\Domain\Promotions\Promotion;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class PromotionsQuery extends QueryBuilder
{
    public function __construct()
    {
        parent::__construct(Promotion::query());

        $this->allowedIncludes([
            'cities',
        ]);

        $this->allowedFilters([
            AllowedFilter::exact('city', 'cities.name'),
        ]);
    }
}
