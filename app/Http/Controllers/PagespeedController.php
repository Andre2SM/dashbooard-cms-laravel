<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pagespeed;

class PagespeedController extends Controller
{
    public function store(Request $request){
        $pagespeed            = new Pagespeed;
        $pagespeed->pagespeedMobile_id    = $request->pagespeedMobile_id;
        $pagespeed->pagespeedDesktop_id    = $request->pagespeedDesktop_id;
        $pagespeed->url_report    = $request->url_report;

        $pagespeed->save();
    }

    public function update(Request $request, $id){
        $pagespeed            = Pagespeed::find( $id );
        $pagespeed->pagespeedMobile_id    = $request->pagespeedMobile_id;
        $pagespeed->pagespeedDesktop_id    = $request->pagespeedDesktop_id;
        $pagespeed->url_report    = $request->url_report;

        $pagespeed->save();
    }

    public function delete( $id ){
        $pagespeed  = Pagespeed::find($id);
        $pagespeed->delete();
    }

    public function index(){
        $pagespeed = Pagespeed::all();
        return $pagespeed;
    }

    public function getPagespeedbyId( $id ){
        $pagespeed = Pagespeed::find( $id );
        return $pagespeed;
    }
}
