<?php

namespace Carona;

use Illuminate\Database\Eloquent\Model;

class Motorista extends Model
{
  protected $fillable = [
      'idUsuario', 'cnh', 'cpf', 'quantidadeDeCarona','avaliacao',
  ];

  protected $table = 'motoristas';

  public function usuario(){
    return $this->hasOne(Usuario::class, 'idUsuario');
  }
  public function veiculo(){
    return $this->hasMany(Veiculo::class, 'idMotorista');
  }
  public function carona(){
    return $this->hasMany(Carona::class, 'idMotorista');
  }
}
