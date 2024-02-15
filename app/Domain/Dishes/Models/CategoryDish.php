<?php

namespace App\Domain\Dishes\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Category - Модель категории
 *
 * @property int $id - Индентификатор категории
 * @property string $name - Название категории
 * @property string $image - Изображение
 *
 * @property Dish[] $dishes - Блюда
 */
class CategoryDish extends Model
{
    protected $fillable = [
        'id',
        'name',
        'image',
    ];

    public function dishes(): HasMany
    {
        return $this->hasMany(Dish::class);
    }
}
