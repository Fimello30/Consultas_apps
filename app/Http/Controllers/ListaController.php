<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class ListaController extends Controller
{
    public function index(Request $req)
    {   
        return redirect()->route('consulta');
    }
}
