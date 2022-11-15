<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Curo
 *
 * @property $id
 * @property $grado_id
 * @property $nombre
 * @property $maximo
 * @property $created_at
 * @property $updated_at
 *
 * @property Grado $grado
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Curo extends Model
{


  public $guarded = [];

  /**
   * @return \Illuminate\Database\Eloquent\Relations\HasOne
   */
  public function grado()
  {
    return $this->hasOne('App\Models\Grado', 'id', 'grado_id');
  }
}
