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
        $users = DB::table('user')->select('userName','userPwd as password')->where('id','=',$id)->get();
        // $ins = DB::insert('insert into user (userName,userPwd) values(?,?)',['chenzhp','123456']);
        return view('User/userinfo', ['userName' => $users[0]->userName]);
        //return "Dear shanshan!";exit;
    }

}