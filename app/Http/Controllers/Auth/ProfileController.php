<?php

namespace App\Http\Controllers\Auth;

use App\Comments;
use App\Http\Controllers\Controller;
use App\Tickets;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    //


    public function index(){
        $data = DB::table("users")
            ->join("users_roles","users.role_id","=","users_roles.id")
            ->select(["name","email","title","users.id"])
            ->where("users.id","=",Auth::id())
            ->get()->first();

        $comments = Comments::all()->where("user_id","=",Auth::id());
        $tickets = Tickets::all()->where("user_id","=",Auth::id());



        return view("auth.profile",["title"=>"profile","data"=>$data,"comments"=>$comments->count(),"tickets"=>$tickets->count()]);

    }
}
