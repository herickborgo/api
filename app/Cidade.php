<?php

namespace Carona;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
  protected $fillable = [
      'nome', 'idEstado',
  ];


  protected $table = 'cidades';

  public function usuario(){
    return $this->belongsTo(Estado::class, 'idEstado');
  }
}
