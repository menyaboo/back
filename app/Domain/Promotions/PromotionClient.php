<?php

namespace App\Domain\Promotions;

use App\Domain\Orders\Models\Client;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class PromotionClient
 *
 * @property int $id Уникальный идентификатор
 * @property int $promotion_id Идентификатор акции
 * @property int $clients_id Идентификатор клиента
 */
class PromotionClient extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'promotion_id',
        'clients_id',
    ];

    public function promotion(): belongsTo
    {
        return $this->belongsTo(Promotion::class);
    }

    public function client(): belongsTo
    {
        return $this->belongsTo(Client::class, 'clients_id');
    }
}
