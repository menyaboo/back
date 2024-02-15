<?php

namespace App\Domain\Promotions;

use App\Domain\Cities\Models\City;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class CityPromotion
 *
 * @property int $id - Уникальный идентификатор
 * @property int $city_id - Идентификатор города
 * @property int $promotion_id - Идентификатор акции
 */
class CityPromotion extends Model
{
    protected $fillable = [
        'id',
        'city_id',
        'promotion_id',
    ];

    public function city(): belongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function promotion(): belongsTo
    {
        return $this->belongsTo(Promotion::class);
    }
}
