<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pagespeeddesktop;

class PagespeeddesktopController extends Controller
{
    public function store(Request $request){
        $pagespeeddesktop = new Pagespeeddesktop;
        $pagespeeddesktop->score    = $request->score;
        $pagespeeddesktop->first_content_paint    = $request->first_content_paint;
        $pagespeeddesktop->speed_meaningful_paint    = $request->speed_meaningful_paint;
        $pagespeeddesktop->speed_index    = $request->speed_index;
        $pagespeeddesktop->first_cpu_idle    = $request->first_cpu_idle;
        $pagespeeddesktop->time_to_interactive    = $request->time_to_interactive;
        $pagespeeddesktop->max_potential_First_input_delay    = $request->max_potential_First_input_delay;
        $pagespeeddesktop->screenshot    = $request->screenshot;

        $pagespeeddesktop->save();
    }

    public function update(Request $request, $id){
        $pagespeeddesktop            = Pagespeeddesktop::find( $id );
        $pagespeeddesktop->score    = $request->score;
        $pagespeeddesktop->first_content_paint    = $request->first_content_paint;
        $pagespeeddesktop->speed_meaningful_paint    = $request->speed_meaningful_paint;
        $pagespeeddesktop->speed_index    = $request->speed_index;
        $pagespeeddesktop->first_cpu_idle    = $request->first_cpu_idle;
        $pagespeeddesktop->time_to_interactive    = $request->time_to_interactive;
        $pagespeeddesktop->max_potential_First_input_delay    = $request->max_potential_First_input_delay;
        $pagespeeddesktop->screenshot    = $request->screenshot;

        $pagespeeddesktop->save();
    }

    public function delete( $id ){
        $pagespeeddesktop  = Pagespeeddesktop::find($id);
        $pagespeeddesktop->delete();
    }

    public function index(){
        $pagespeeddesktop = Pagespeeddesktop::all();
        return $pagespeeddesktop;
    }

    public function getPagespeeddesktopbyId( $id ){
        $pagespeeddesktop = Pagespeeddesktop::find( $id );
        return $pagespeeddesktop;
    }
}
