<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pagespeedmobile;

class PagespeedmobileController extends Controller
{
    public function store(Request $request){
        $pagespeedmobile            = new Pagespeedmobile;
        $pagespeedmobile->score    = $request->score;
        $pagespeedmobile->first_content_paint    = $request->first_content_paint;
        $pagespeedmobile->speed_meaningful_paint    = $request->speed_meaningful_paint;
        $pagespeedmobile->speed_index    = $request->speed_index;
        $pagespeedmobile->first_cpu_idle    = $request->first_cpu_idle;
        $pagespeedmobile->time_to_interactive    = $request->time_to_interactive;
        $pagespeedmobile->max_potential_First_input_delay    = $request->max_potential_First_input_delay;
        $pagespeedmobile->screenshot    = $request->screenshot;

        $pagespeedmobile->save();
    }

    public function update(Request $request, $id){
        $pagespeeddesktop            = Pagespeedmobile::find( $id );
        $pagespeedmobile->score    = $request->score;
        $pagespeedmobile->first_content_paint    = $request->first_content_paint;
        $pagespeedmobile->speed_meaningful_paint    = $request->speed_meaningful_paint;
        $pagespeedmobile->speed_index    = $request->speed_index;
        $pagespeedmobile->first_cpu_idle    = $request->first_cpu_idle;
        $pagespeedmobile->time_to_interactive    = $request->time_to_interactive;
        $pagespeedmobile->max_potential_First_input_delay    = $request->max_potential_First_input_delay;
        $pagespeedmobile->screenshot    = $request->screenshot;

        $pagespeedmobile->save();
    }

    public function delete( $id ){
        $pagespeedmobile  = Pagespeedmobile::find($id);
        $pagespeedmobile->delete();
    }

    public function index(){
        $pagespeedmobile = Pagespeedmobile::all();
        return $pagespeedmobile;
    }

    public function getPagespeedmobilebyId( $id ){
        $pagespeedmobile = Pagespeedmobile::find( $id );
        return $pagespeedmobile;
    }
}
