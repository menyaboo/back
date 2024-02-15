<?php

namespace App\Domain\Dishes\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Volume - Модель объема
 *
 * @property int $id - Индетефикатор объема
 * @property float $meaning - Значение объема
 * @property float $cost - Стоимость
 * @property int $dish_id - Идентификатор блюда
 *
 * @property Dish $dish
 */
class Volume extends Model
{
    protected $fillable = [
        'id',
        'meaning',
        'cost',
        'dish_id',
    ];

    public function dish(): BelongsTo
    {
        return $this->belongsTo(Dish::class);
    }
}
