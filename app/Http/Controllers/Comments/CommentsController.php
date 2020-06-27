<?php

namespace App\Http\Controllers\Comments;

use App\Comments;
use App\Http\Controllers\Controller;
use App\Tickets;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class CommentsController extends Controller
{
    //


    public function commentValidate(array $data)
    {

        return Validator::make($data,[
            "content"=>["required","string"],
            "user_id"=>["required","integer",Rule::in(User::all()->pluck("id")->toArray())],
            "ticket_id"=>["required","integer",Rule::in(Tickets::all()->pluck("id")->toArray())],
        ]);
    }

    public function store(array $data){

        $tickets = new Comments();
        $tickets->content = $data["content"];
        $tickets->user_id = $data["user_id"];
        $tickets->ticket_id = $data["ticket_id"];
        $tickets->save();
    }


    public function submit(Request $request,$user_id,$ticket_id){

        $data = [
            "content"=>$request->input("content"),
            "user_id"=>$user_id,
            "ticket_id"=>$ticket_id,
        ];
        $validate = $this->commentValidate($data);
        if ($validate->fails()){
            return redirect()->back()->withErrors($validate)->withInput();
        }


        $insert = $this->store($data);

        return redirect()->back()->with("status","The ticket has been submitted");

    }






}
