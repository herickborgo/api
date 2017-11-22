<?php

namespace Carona;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
  protected $fillable = [
      'modelo', 'ano', 'cor', 'placa','idMotorista',
  ];


  protected $table = 'veiculos';

  public function motorista(){
    return $this->belongsTo(Motorista::class, 'idMotorista');
  }
}
