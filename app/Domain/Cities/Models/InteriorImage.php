<?php

namespace App\Domain\Cities\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class InteriorImage
 *
 * @property int $id - Уникальный идентификатор
 * @property string $image - Изображение
 * @property string $name - Название
 * @property int $point_id - Идентификатор точки
 */
class InteriorImage extends Model
{
    protected $fillable = [
        'id',
        'image',
        'name',
        'point_id'
    ];

    public function point(): BelongsTo
    {
        return $this->belongsTo(Point::class);
    }
}
