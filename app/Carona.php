<?php

namespace Carona;

use Illuminate\Database\Eloquent\Model;

class Carona extends Model
{
  protected $fillable = [
      'idMotorista', 'cidadePartida', 'cidadeChegada', 'data', 'hora'
  ];


  protected $table = 'caronas';

  public function usuario(){
    return $this->belongsTo(Motorista::class, 'idMotorista');
  }
}
