<?php

namespace Carona\Http\Controllers;

use Illuminate\Http\Request;
use Carona\Usuario;
use Validator;

class UsuarioController extends Controller
{
    public function cadastro(Request $request){
      $validator = Validator::make($request->all(),[
        'nome' => 'required',
        'email' => 'required|unique:usuarios',
        'senha' => 'required|min:6',
      ]);

      if($validator->fails()){
        return response()->json(['status' => false,'errors'=> $validator->errors()->all()]);
      }else{
        if(Usuario::create($request->all())){
          return $token = bcrypt('logado');
        }
      }
    }

    public function login(Request $request){
      $validator = Validator::make($request->all(),[
        'email' => 'required',
        'senha' => 'required|min:6',
      ]);

      if($validator->fails()){
        return response()->json(['status' => false,'errors'=> $validator->errors()->all()]);
      }else{
        if(count(Usuario::where('email',$request->email)->get()) == 1){
          $user = Usuario::where('email',$request->email)->get();
          foreach($user as $usuario){
            if(base64_encode($request->senha) == $usuario->senha){
              return $token = bcrypt('logado');
            }else{
              return response()->json(['status' => false,'errors'=>['Senha incorreta!']]);
            }
          }
        }else{
          return response()->json(['status' => false,'errors'=>['Nome de usuario ou Senha incorretos!']]);
        }
      }
    }

}
