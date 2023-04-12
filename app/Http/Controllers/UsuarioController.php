<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;

class UsuarioController extends Controller{

    function index(){

        usuario::create([
            'nome'=>'Jackson',
            'telefone'=>'99 9999-9999',
            'email'=>'email@email.com']);
        $usuario = usuario::all();
        //dd($usuario);

        return view("UsuarioList")->with(["usuario"=>$usuarios]);
    }
}

?>
