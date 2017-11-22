<?php

namespace Carona;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
  protected $fillable = [
      'nome', 'sigla',
  ];


  protected $table = 'estados';

  public function usuario(){
    return $this->hasMany(Cidade::class, 'idEstado');
  }
}
