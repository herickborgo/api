<?php

namespace Carona;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
  protected $fillable = [
      'nomeUsuario', 'sexo', 'email', 'senha','motorista',
  ];


  protected $table = 'usuarios';

  public function motorista(){
    return $this->hasOne(Motorista::class, 'idUsuario');
  }
}
