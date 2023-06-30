<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogadoController extends Controller
{
    public function index(){
        if (auth()->check()){
            $usuario = auth()->user()->name;
            return view('logado', compact('usuario'));
        }else{
            return redirect()->route('login.index');
        }
    }
}
