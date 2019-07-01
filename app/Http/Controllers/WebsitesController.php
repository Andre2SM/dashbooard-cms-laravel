<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Websites;

class WebsitesController extends Controller
{
    public function store(Request $request){
        $website            = new Websites;
        $website->domain    = $request->domain;
        $website->user_id   = $request->user_id;

        $website->save();
    }

    public function update(Request $request, $id){
        $website            = Websites::find( $id );
        $website->domain    = $request->domain;
        $website->user_id   = $request->user_id;

        $website->save();
    }

    public function delete( $id ){
        $website  = Websites::find($id);
        $website->delete();
    }

    public function index(){
        $websites = Websites::all();
        return $websites;
    }

    public function getWebsitebyId( $id ){
        $website = Websites::find( $id );
        return $website;
    }

    public function getDomainbyId( $id ){
        $website = Websites::find( $id );
        return $website->domain;
    }
}
