<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{

    public function doLogin()
    {
        $input = Request::all();
        $username = $input['Username'];
        $password = $input['Password'];
        $users = DB::table('user')->where([['username','=',$username],['password','=',$password]])->first();
        if($users){
            $id = $users->id;
        }else{
            $id = NULL;
        }
        if($id){
            session(['isLogin' => '1']);
        }else{
            session(['isLogin' => '-1']);
            echo "<script>alert('用户名密码错误，请重新登录！');location.href='" . url('user/login') . "';</script>";
        }
        return redirect('user/index');
    }

    public function testUrl(){
        $isLogin = \Session::get('isLogin');
        var_dump($isLogin);
    }
}