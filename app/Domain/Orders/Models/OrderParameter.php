<?php

namespace App\Domain\Orders\Models;

use App\Domain\Dishes\Models\Dish;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class OrderParameter - Модель параметров заказа
 *
 * @property int $id
 * @property int $amount
 * @property int $sweetness - Сладость
 * @property int|null $temperature - Температура
 * @property int $dish_id
 * @property int $order_id
 * @property int $type_connection_id
 */
class OrderParameter extends Model
{
    protected $fillable = [
        'id',
        'amount',
        'sweetness',
        'temperature',
        'dish_id',
        'order_id',
        'type_connection_id',
    ];

    public function dish(): BelongsTo
    {
        return $this->belongsTo(Dish::class);
    }

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }

    public function typeConnection(): BelongsTo
    {
        return $this->belongsTo(TypeConnection::class);
    }
}
