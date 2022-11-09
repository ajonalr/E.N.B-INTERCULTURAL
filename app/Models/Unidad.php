<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Unidad
 *
 * @property $id
 * @property $codigo
 * @property $nombre
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Unidad extends Model
{
  protected $table = 'unidad';
  public $guarded = [];
}
