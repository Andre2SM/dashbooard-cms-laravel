<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Issues;

class IssuesController extends Controller
{
    public function getAll(){
        $issues = Issues::all();
        return $issues;
    }
}
