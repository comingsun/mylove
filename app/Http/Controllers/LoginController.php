<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;

class LoginController extends Controller
{

    public function doLogin()
    {
        echo Request::handle();exit;
        $input = Request::all();
        return $input;
    }
}