<?php

namespace App\Domain\Orders\Models;

use App\Domain\Cities\Models\Point;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Order
 *
 * @property int $id - Уникальный идентификатор
 * @property boolean $ready_time - Время готовности
 * @property float $total_cost - Общая стоимость
 * @property int $client_id - Идентификатор клиента
 * @property int $point_id - Идентификатор точки
 */
class Order extends Model
{
    protected $fillable = [
        'id',
        'ready_time',
        'total_cost',
        'client_id',
        'point_id'
    ];

    public function client(): belongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function point(): belongsTo
    {
        return $this->belongsTo(Point::class);
    }
}
