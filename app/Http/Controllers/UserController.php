<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function show($users)
    {
        return ['name'=>"ayushi", 'age'=>26];
    }
}
