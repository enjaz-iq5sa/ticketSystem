<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class usersRoles_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table("users_roles")->insert([
            "title"=>"Administrator",
            "role_id"=>1
        ]);

        DB::table("users_roles")->insert([
            "title"=>"End user",
            "role_id"=>2
        ]);
        DB::table("users_roles")->insert([
            "title"=>"Agent",
            "role_id"=>3
        ]);
    }
}
