<?php

namespace App\Domain\Cities\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Schedule - Модель графика работы
 *
 * @property int $id - Уникальный идентификатор
 * @property int $day_of_week - День недели
 * @property string $time_limit - Лимит времени
 * @property string $start_time - Время начала
 * @property string $end_time - Время окончания
 * @property int $point_id - Идентификатор точки
 */
class Schedule extends Model
{
    protected $fillable = [
        'id',
        'day_of_week',
        'time_limit',
        'start_time',
        'end_time',
        'point_id',
    ];

    public function point(): BelongsTo
    {
        return $this->belongsTo(Point::class);
    }
}
