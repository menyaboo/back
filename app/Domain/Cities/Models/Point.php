<?php

namespace App\Domain\Cities\Models;

use App\Domain\Orders\Models\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Point - Модель точки
 *
 * @property int $id - Уникальный идентификатор
 * @property string $street - Улица
 * @property string $house - Дом
 * @property string $token - Токен
 * @property string|null $image_map - Изображение
 * @property int $city_id - Идентификатор города
 * @property int $client_id - Идентификатор клиента
 */
class Point extends Model
{
    protected $fillable = [
        'id',
        'street',
        'house',
        'token',
        'image_map',
        'city_id',
        'client_id',
    ];

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
}
