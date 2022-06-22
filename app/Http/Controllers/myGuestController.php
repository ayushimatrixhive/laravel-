<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use App\Models\myGuest;

class myGuestController extends Controller
{
    //
    // function list()
    // {
    //     return DB::table('users')->get( );
    // }

    function listdata()
    {
        return DB::connection('mysql2')->table('MyGuests')->get( );
    }
    

    // function datalist()
    // {
    //     //return DB::connection('mysql2')->table('MyGuests')->get( );
    //     return myGuest::all();
    // }
}
