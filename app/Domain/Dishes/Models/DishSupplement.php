<?php

namespace App\Domain\Dishes\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class CategorySupplement
 *
 * @property int $id - Уникальный идентификатор категории
 * @property int $dish_id - Идентификатор блюда
 * @property int $supplement_id - Идентификатор категории добавки
 *
 * @property Dish $dish - Блюдо
 * @property Supplement $supplement - Категория
 */
class DishSupplement extends Model
{
    protected $table = 'dish_supplement';

    protected $fillable = [
        'id',
        'dish_id',
        'supplement_id',
    ];

    public function dish(): BelongsTo
    {
        return $this->belongsTo(Dish::class);
    }

    public function supplement(): BelongsTo
    {
        return $this->belongsTo(Supplement::class);
    }
}
