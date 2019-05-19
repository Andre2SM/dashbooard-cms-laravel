<?php

namespace App\Http\Controllers;

use App\Empresas;
use Illuminate\Http\Request;

class EmpresasController extends Controller
{
    public function getAll()
    {
        $empresas = Empresas::all();
        return $empresas;
    }

}
