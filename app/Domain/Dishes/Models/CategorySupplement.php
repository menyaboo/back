<?php

namespace App\Domain\Dishes\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class CategorySupplement
 *
 * @property int $id - Уникальный идентификатор категории
 * @property string $name - Название категории
 *
 * @property Supplement[] $supplements - Добавки
 */
class CategorySupplement extends Model
{
    protected $fillable = [
        'id',
        'name'
    ];

    public function supplements(): HasMany
    {
        return $this->hasMany(Supplement::class);
    }
}
