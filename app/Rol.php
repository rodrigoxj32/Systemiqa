<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    //
    protected $table = 'rols';

    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
    ];

    public function users(){
      return $this->hasMany('App\User');
    }

}
