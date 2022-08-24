<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstacionamentoController extends Controller
{
    //index - listar
    public function index(){
        return view('estacionamento.list');
    }
}
