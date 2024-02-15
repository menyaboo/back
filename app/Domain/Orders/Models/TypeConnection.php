<?php

namespace App\Domain\Orders\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class TypeConnection - Модель типа связи
 *
 * @property int $id
 * @property string $name
 */
class TypeConnection extends Model
{
    protected $fillable = [
        'id',
        'name'
    ];

    public function orderParameters(): HasMany
    {
        return $this->hasMany(OrderParameter::class);
    }
}
