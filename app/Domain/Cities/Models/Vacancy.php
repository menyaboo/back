<?php

namespace App\Domain\Cities\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Vacancy
 *
 * @property int $id - Уникальный идентификатор вакансии
 * @property string $name - Название вакансии
 * @property string $description - Описание вакансии
 * @property string $image - Изображение вакансии
 * @property int $city_id - Идентификатор города
 */
class Vacancy extends Model
{
    protected $fillable = [
        'id',
        'name',
        'description',
        'image',
        'city_id'
    ];

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }
}
