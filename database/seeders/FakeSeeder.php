<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class FakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('fake_data')->insert([

            'name'=>str::random(10),
            'age'=>str::random(2),
            'gender' => str::random(4),
            'city' => str::random(5)

        ]);
    }
}
