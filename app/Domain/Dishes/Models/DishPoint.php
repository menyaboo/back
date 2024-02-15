<?php

namespace App\Domain\Dishes\Models;

use App\Domain\Cities\Models\Point;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class DishPoint - Модель связи блюда и точки
 *
 * @property int $id - Уникальный идентификатор
 * @property int $dish_id - Идентификатор блюда
 * @property int $point_id - Идентификатор города
 * @property boolean $hold_status - Cтатус удержания
 *
 * @property Point $point
 * @property Dish $dish
 */
class DishPoint extends Model
{
    protected $table = 'dish_point';

    protected $fillable = [
        'id',
        'dish_id',
        'point_id',
        'hold_status',
    ];

    public function dish(): BelongsTo
    {
        return $this->belongsTo(Dish::class);
    }

    public function point(): BelongsTo
    {
        return $this->belongsTo(Point::class);
    }
}
