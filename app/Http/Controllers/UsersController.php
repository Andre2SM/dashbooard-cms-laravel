<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class UsersController extends Controller
{
    public function store(Request $request){
        $user            = new Users;
        $user->name    = $request->name;
        $user->email    = $request->email;
        $user->password    = $request->password;
        $user->address    = $request->address;
        $user->contract_type    = $request->contract_type;

        $user->save();
    }

    public function update(Request $request, $id){
        $user            = Users::find( $id );
        $user->name    = $request->name;
        $user->email    = $request->email;
        $user->password    = $request->password;
        $user->address    = $request->address;
        $user->contract_type    = $request->contract_type;

        $user->save();
    }

    public function delete( $id ){
        $user  = Users::find($id);
        $user->delete();
    }

    public function index(){
        $user = Users::all();
        return $user;
    }

    public function getUserbyId( $id ){
        $user = Users::find( $id );
        return $user;
    }

    /*public function LoginUser($id){
        $user = Users::find( $id );
        $user->email    = $request->email;
        $user->password    = $request->password;

        $user->save();
    }*/
}
