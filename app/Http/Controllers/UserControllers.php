<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserControllers extends Controller
{
    //
    public function index( )
    {
        $users = DB::table('users')->get();
        return $users;

        // $users = DB::table('users')->where('name', 'ayushi')->first();
        // return $users->email;

        // $email = DB::table('users')->where('name', 'krisha')->value('email');
        // return $email;

        // $users = DB::table('users')->find(4);
        // return $users;

        //name  get ->
        // $titles = DB::table('users')->pluck('name');
        // foreach ($titles as $title) {
        //     echo '<br>';
        //     echo  $title;
        // }

        //email get ->
        // $titles = DB::table('users')->pluck('email', 'name');   
        //     foreach ($titles as $name => $title) {
        //         echo '<br>';
        //         echo $title;
        //     }


        //working like pagination ( chunk method )
        // DB::table('users')->orderBy('name')->chunk(3, function ($users) {
        //     foreach ($users as $user) {
        //         //
        //         //return false;
        //     }
        // });

        //chunkbyid method
        // DB::table('users')->where('active', false)
        //     ->chunkById(3, function ($users) {
        //         foreach ($users as $user) {
        //             DB::table('users')
        //                 ->where('id', $user->id);
        //         }
        //     });


        // DB::table('users')->orderBy('name')->lazy()->each(function ($user) {
        //     //
        // });

        // $users = DB::table('users')->count();
        // return $users;

        // $price = DB::table('users')->min('id');
        // return $price;

        // $price1 = DB::table('users')->max('id');
        // return $price1;


        // $price = DB::table('users')
        //         ->where('name', 'ayushi')
        //         ->avg('id');
        // return $price;

        //select method
        // $users = DB::table('users')
        //     ->select('name', 'email as email')
        //     ->get();
        //     return $users;

        //distinct method-> all data 
        // $user = DB::table('users')->distinct()->get();  
        // return $user;

        ///row expression
        // $users = DB::table('users')
        // ->select(DB::raw('count(*) as user_count, status'))
        // ->where('status', '<>', 1)
        // ->groupBy('status')
        // ->get();
        // return $users;

        // $users = DB::table('users')->where('id', 4)->get();
        // return $users;

        //orwhere condition 
        // $users = DB::table('users')
        //             ->where('id', '>', 4)
        //             ->orWhere('name', 'ayushi')
        //             ->get();
        //     return $users;
            
           // select * from users where id > 4 or (name = 'ayushi' and id > 3)

           //whereBetween->whereNotBetween condition  
        //    $users = DB::table('users')
        //    ->whereNotBetween('id', [1, 3])
        //    ->get();
        //    return $users;

        //wherein method
        // $users = DB::table('users')
        // ->whereIn('id', [1, 2,])
        // ->get();
        // return $users;

         //whereinNot method
        // $user = DB::table('users')
        //             ->whereNotIn('id', [1, 2, 3])
        //             ->get();
        //             return $user;


        //whereNull ->[] column , whereNotNull ->show output
        // $users = DB::table('users')
        // ->whereNotNull('email')
        // ->get();
        // return $users;

        //orderby name 
        // $users = DB::table('users')
        // ->orderBy('name', 'desc')
        // ->orderBy('email', 'asc')
        // ->get();
        // return $users;

        // $users = DB::table('users')->skip(2)->take(1)->get();
        // return $users;

        //insert data into datatable
        // $data = DB::table('users')->insert([
        //     ['name' => 'ayushi'],
        //     ['name' => 'krisha']
        // ]);
        // return $data;

    //    $user = DB::table('users')->where('id', '>', 3)->dd();
    //    return  $user;

    // $deleted = DB::delete('delete name from users');
    // return $deleted;



    }

}