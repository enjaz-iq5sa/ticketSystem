<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table("users")->insert([
            'name'=>"sajjad",
            "email"=>"admin@gmail.com",
            "password"=>Hash::make('password'),
            'role_id'=>1
        ]);
    }
}
