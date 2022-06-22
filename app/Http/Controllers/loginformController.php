<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginformController extends Controller
{
    //
    function getData(Request $request)
    {
         $request->validate([
            'name'=>'required | max:10',
            'username'=>'required | max:10',
            'password'=>'required | min:5'
         ]);
         return $request->input();
        // $name = $request->input('name');
        // echo 'name : '.$name;
        // $username = $request->input('username');
        // echo '<br>username : '.$username;
        // $password = $request->input('password');
        // echo '<br>password : '.$password;
    }
}
