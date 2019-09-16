<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrmCadController extends Controller
{
    public function cadastrar()
    {
    	return view('FrmCad');
    }
}
