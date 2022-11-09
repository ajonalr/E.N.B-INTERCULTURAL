<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Secretarium
 *
 * @property $id
 * @property $nombre
 * @property $telefono
 * @property $direccion
 * @property $email
 * @property $password
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Secretarium extends Model
{
    
    public $guarded = [];
    protected $table = 'secretaria';

}
