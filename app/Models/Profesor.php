<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Profesor
 *
 * @property $id
 * @property $nombre
 * @property $apellido
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
class Profesor extends Model
{
  public $guarded = [];
  protected $table = 'profesor';

}
