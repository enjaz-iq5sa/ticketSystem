<?php

namespace App\Http\Controllers;

use App\invitations;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class InvitationController extends Controller
{
    //



    public function index($id){

        $invitation = invitations::all()->where("id","=",$id);


        if ($invitation->count() ==0)
            return response()->view("auth.404",["title"=>"Not Found"]);

            $find_user = User::all()->where("email","=",$invitation->last()->sentTo);

        if ($find_user->count() >=1)
            return response()->view("auth.404",["title"=>"Not Found"]);
        return view("invitation.index",["title"=>"Accept invitation","invitation"=>$invitation->last()]);
    }


    public function register($id,Request $request){

        $request->validate([

            "password"=>"required"
        ]);

        $invitation = invitations::all()->where("id","=",$id)->last();

        $find_user = User::all()->where("email","=",$invitation->sentTo);

        if ($find_user->count() ==0){
            $user = new User();
            $user->name = $invitation->name;
            $user->email = $invitation->sentTo;
            $user->password = Hash::make($request->input("password"));
            $user->role_id = $invitation->role_id;
            $user->save();
            return redirect()->route("login");
        }else{
            return response()->view("auth.404");
        }



    }


}
