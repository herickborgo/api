<?php

namespace Carona\Http\Controllers;

use Illuminate\Http\Request;
use Crona\Motorista;

class MotoristaController extends Controller
{
  public function cadastro(Request $request){
    $validator = Validator::make($request->all(),[
      'cnh' => 'required|unique:motoristas',
      'cpf' => 'required|unique:motoristas',
    ]);

    if($validator->fails()){
      return response()->json(['status' => false,'errors'=> $validator->errors()->all()]);
    }else{
      $user = new Usuario;
      $user->name = $request->input('name');
      $user->username = $request->input('username');
      $user->password = base64_encode($request->input('password'));
      $user->save();
      return $token = bcrypt('logado');
    }
  }
}
