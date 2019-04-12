<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;


class UserController extends Controller

{

    public function __construct()
    {

        $this->middleware(function ($request, $next) {
            $isLogin = \Session::get('isLogin');
            if(!$isLogin){
                echo "<script>alert('ÇëÏÈµÇÂ¼!');location.href='" . url('user/login') . "';</script>";
            }
            return $next($request);
        });

    }

    public function login(){
        echo  view('Login/login');
    }

    public function show(){

        return view('User/userinfo');
    }

}