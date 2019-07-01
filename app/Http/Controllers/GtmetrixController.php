<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gtmetrix;

class GtmetrixController extends Controller
{
    public function store(Request $request){
        $gtmetrix            = new Gtmetrix;
        $gtmetrix->page_speed_score    = $request->page_speed_score;
        $gtmetrix->yslow_score    = $request->yslow_score;
        $gtmetrix->fully_load_time    = $request->fully_load_time;
        $gtmetrix->total_page_size    = $request->total_page_size;
        $gtmetrix->requests    = $request->requests;
        $gtmetrix->screenshot    = $request->screenshot;
        $gtmetrix->url_report    = $request->url_report;

        $gtmetrix->save();
    }

    public function update(Request $request, $id){
        $gtmetrix            = Gtmetrix::find( $id );
        $gtmetrix->page_speed_score    = $request->page_speed_score;
        $gtmetrix->yslow_score    = $request->yslow_score;
        $gtmetrix->fully_load_time    = $request->fully_load_time;
        $gtmetrix->total_page_size    = $request->total_page_size;
        $gtmetrix->requests    = $request->requests;
        $gtmetrix->screenshot    = $request->screenshot;
        $gtmetrix->url_report    = $request->url_report;

        $gtmetrix->save();
    }

    public function delete( $id ){
        $gtmetrix  = Gtmetrix::find($id);
        $gtmetrix->delete();
    }

    public function index(){
        $gtmetrix = Gtmetrix::all();
        return $gtmetrix;
    }

    public function getGtmetrixbyId( $id ){
        $gtmetrix = Gtmetrix::find( $id );
        return $gtmetrix;
    }
}
