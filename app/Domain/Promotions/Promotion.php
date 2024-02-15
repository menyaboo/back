<?php

namespace App\Domain\Promotions;

use App\Domain\Cities\Models\City;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class Promotion
 *
 * @property int $id - Уникальный идентификатор
 * @property string $name - Название
 * @property string $description - Описание
 * @property string|null $background - Фон
 * @property string|null $image - Изображение
 *
 * @property City[] $cities
 */
class Promotion extends Model
{
    protected $fillable = [
        'name',
        'description',
        'background',
        'image'
    ];

    public function cities(): belongsToMany {
        return $this->belongsToMany(City::class);
    }
}
