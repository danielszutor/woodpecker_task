<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Users;

class UsersController extends Controller
{
    function addData(Request $req){
        $user = new Users;
        $user->name=$req->username;
        $user->password=$req->password;
        $user->save();
        return redirect("users");
    }

    public function getdata(){
        $users = DB::table('users')
        ->orderBy('name', 'asc')      
        ->get();
        return view('users',['users'=>$users]);
    }
}
