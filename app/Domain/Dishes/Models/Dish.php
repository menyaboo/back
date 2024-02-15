<?php

namespace App\Domain\Dishes\Models;

use App\Domain\Cities\Models\City;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Dish - Модель блюда
 *
 * @property int $id - Уникальный идентификатор блюда
 * @property string $name - Название блюда
 * @property string|null $image - Фотография блюда
 * @property string $unit - Единица измерения
 * @property string|null $description - Описание блюда
 * @property string|null $composition - Состав блюда
 * @property int|null $energy_value - Энергетическая ценность
 * @property float|null $proteins - Белки
 * @property float|null $fats - Жиры
 * @property float|null $carbohydrates - Углеводы
 * @property int|null $category_supplement_id - Идентификатор категории дополнения
 * @property int|null $category_dish_id - Идентификатор категории блюда
 *
 * @property CategorySupplement|null $categorySupplement - Категория дополнения
 * @property CategoryDish|null $category - Категория блюда
 * @property Volume|null $typeVolume - Тип объема
 * @property City[] $cities - Города
 * @property Supplement[] $supplements - Добавки
 */
class Dish extends Model
{
    protected $fillable = [
        'id',
        'name',
        'image',
        'unit',
        'description',
        'composition',
        'energy_value',
        'proteins',
        'fats',
        'carbohydrates',
        'category_supplement_id',
        'category_dish_id',
    ];

    public function categorySupplement(): BelongsTo
    {
        return $this->belongsTo(CategorySupplement::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(CategoryDish::class, 'category_dish_id');
    }

    public function volumes(): HasMany
    {
        return $this->hasMany(Volume::class, 'dish_id');
    }

    public function cities(): BelongsToMany
    {
        return $this->belongsToMany(City::class, 'dish_city');
    }

    public function supplements(): BelongsToMany
    {
        return $this->belongsToMany(Supplement::class);
    }
}
