<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrmCadReservaController extends Controller
{
  public function cadastrar()
    {
    	return view('FrmCadReserva');
    }
}
