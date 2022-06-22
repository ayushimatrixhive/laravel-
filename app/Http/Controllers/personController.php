<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class personController extends Controller
{
    //
    public function create(Request $request)
    {
        $name = $request->input('name');
        echo 'name : '.$name;

        $username = $request->input('username');
        echo '<br>username : '.$username;

        $password = $request->input('password');
        echo '<br>password : '.$password;
    }
   
}
