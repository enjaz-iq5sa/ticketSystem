<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class prioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


         DB::table("priorities")->insert([
             "priority_id"=>1,
             "title"=>"Normal"

         ]);

        DB::table("priorities")->insert([
            "priority_id"=>2,
            "title"=>"Urgent"

        ]);

        DB::table("priorities")->insert([
            "priority_id"=>3,
            "title"=>"High"

        ]);

        DB::table("priorities")->insert([
            "priority_id"=>4,
            "title"=>"Low"

        ]);
    }
}
