<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UserController extends Controller

{

    public function show($id){

        //$users = DB::table('user')->get();
        //$users = DB::table('user')->where('id','>=','2')->get();
       // $users = DB::table('user')->where('id','>=','2')->value('userPwd');
        //$users = DB::table('user')->pluck('userPwd','id');
        // DB::table('user')->orderBy('id','desc')->chunk('1',function($users){
        //     var_dump($users);
        // });
       // $users = DB::table('user')->count();
        //$users = DB::table('user')->max('id');
        //$users = DB::table('user')->select('userName')->where('id',   '>=','2')->get();
        $users = DB::table('user')->select('userName','userPwd as password')->where('id','>=','2')->get();
        var_dump($users);exit;
        // $ins = DB::insert('insert into user (userName,userPwd) values(?,?)',['chenzhp','123456']);
        // var_dump($ins);exit;    
        //return view('User/userinfo', ['user' => $users]);
        //return "Dear shanshan!";exit;
    }

}