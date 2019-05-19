<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Defectos;

class DefectosController extends Controller
{
    public function getAll()
    {
        $defectos = Defectos::all();
        return $defectos;
    }
}
