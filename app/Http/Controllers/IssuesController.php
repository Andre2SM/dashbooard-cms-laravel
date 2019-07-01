<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Issues;

class IssuesController extends Controller
{
    public function store(Request $request){
        $issue            = new Issues;
        $issue->detail    = $request->detail;
        $issue->severity    = $request->severity;
        $issue->evidence    = $request->evidence;
        $issue->status    = $request->status;
        $issue->website_id   = $request->website_id;

        $issue->save();
    }

    public function update(Request $request, $id){
        $issue            = Issues::find( $id );
        $issue->detail    = $request->detail;
        $issue->severity    = $request->severity;
        $issue->evidence    = $request->evidence;
        $issue->status    = $request->status;
        $issue->website_id   = $request->website_id;

        $issue->save();
    }

    public function delete( $id ){
        $issue  = Issues::find($id);
        $issue->delete();
    }

    public function index(){
        $issue = Issues::all();
        return $issue;
    }

    public function getIssuebyId( $id ){
        $issue = Issues::find( $id );
        return $issue;
    }
}
