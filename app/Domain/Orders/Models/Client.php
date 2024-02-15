<?php

namespace App\Domain\Orders\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Client
 *
 * @property int $id - Уникальный идентификатор
 * @property string $telephone - Номер телефона
 * @property string $name - Имя
 */
class Client extends Model
{
    protected $fillable = [
        'id',
        'telephone',
        'name'
    ];
}
