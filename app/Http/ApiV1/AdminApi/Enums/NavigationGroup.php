<?php

namespace App\Http\ApiV1\AdminApi\Enums;

enum NavigationGroup: string
{
    case DISHES = 'Блюда';
    case CITIES = 'Города';
    case ORDERS = 'Заказы';
    case PROMOTIONS = 'Акции';
}
