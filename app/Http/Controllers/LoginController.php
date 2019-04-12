<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

    public function doLogin()
    {
        $input = Request::all();
        $username = $input['Username'];
        $password = $input['Password'];
        $users = DB::table('user')->where([['username','=',$username],['password','=',$password]])->first();
        if($users->id){
            session(['isLogin' => '1']);
        }else{
            session(['isLogin' => '-1']);
        }
        return redirect('user/index');
    }

    public function testUrl(){

    }
}