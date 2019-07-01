<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tests;

class TestsController extends Controller
{
    public function store(Request $request){
        $test            = new Tests;
        $test->website_id    = $request->website_id;
        $test->pagespeed_id    = $request->pagespeed_id;
        $test->gtmetrix_id    = $request->gtmetrix_id;
        $test->time_generated    = $request->time_generated;

        $test->save();
    }

    public function update(Request $request, $id){
        $test            = Tests::find( $id );
        $test->website_id    = $request->website_id;
        $test->pagespeed_id    = $request->pagespeed_id;
        $test->gtmetrix_id    = $request->gtmetrix_id;
        $test->time_generated    = $request->time_generated;

        $test->save();
    }

    public function delete( $id ){
        $test  = Tests::find($id);
        $test->delete();
    }

    public function index(){
        $test = Tests::all();
        return $test;
    }

    public function getTestbyId( $id ){
        $test = Tests::find( $id );
        return $test;
    }
}
