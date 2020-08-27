<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Cadastro;
use DB;

class CadastroController extends Controller{

  public function index(){
    $consulta = DB::table('users')->get();

    return view('cadastro.index');
  }

   
}