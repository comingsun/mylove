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
        $isLogin = \Session::get('isLogin');
        if($isLogin==1){
            $this->show();
        }else{
            $this->login();exit;
        }
    }

    public function login(){
        echo  view('Login/login');
    }


    public function show(){
        return view('User/userinfo');
    }

}