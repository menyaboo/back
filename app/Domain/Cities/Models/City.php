<?php

namespace App\Domain\Cities\Models;

use App\Domain\Promotions\Promotion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Class City - Модель города
 *
 * @property int $id - Индетефикатор единицы измерения
 * @property string $name - Название города
 */
class City extends Model
{
    protected $fillable = [
        'id',
        'name',
    ];

    public function promotions(): BelongsToMany
    {
        return $this->belongsToMany(Promotion::class);
    }
}
