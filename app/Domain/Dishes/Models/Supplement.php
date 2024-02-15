<?php

namespace App\Domain\Dishes\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class SupplementSeeder - Модель добавки
 *
 * @property int $id - Индентификатор добавки
 * @property string $name - Название добавки
 * @property float $cost - Стоимость добавки
 * @property int $category_supplement_id - Идентификатор категории
 *
 * @property DishSupplement[] $dishes - Блюда
 * @property CategorySupplement $category_supplement
 */
class Supplement extends Model
{
    protected $fillable = [
        'id',
        'name',
        'cost',
        'category_supplement_id',
    ];

    /**
     * Get the dishes that belong to the supplement.
     */
    public function dishes(): BelongsToMany
    {
        return $this->belongsToMany(Dish::class);
    }

    public function category_supplement(): BelongsTo
    {
        return $this->belongsTo(CategorySupplement::class, 'category_supplement_id');
    }
}
