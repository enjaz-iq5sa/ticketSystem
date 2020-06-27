<?php

namespace App\Http\Controllers;


use App\User;

class AuthUsersController extends Controller
{
    //

    public function index(){

        $users = User::all();
        return view("auth.users",["title"=>"All users","users"=>$users]);
    }
}
