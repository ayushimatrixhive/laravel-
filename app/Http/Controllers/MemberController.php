<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class MemberController extends Controller
{
    //
    function show()
    {
        $data = users::where('id', '>', 3)->paginate($perPage = 8, $columns = ['*'], $pageName = 'users');
        return view('list1',['users'=>$data]);
    }
}
