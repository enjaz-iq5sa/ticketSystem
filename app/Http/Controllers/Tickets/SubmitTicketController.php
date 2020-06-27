<?php

namespace App\Http\Controllers\Tickets;


use App\Http\Controllers\Controller;
use App\Priority;
use App\Tickets;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class SubmitTicketController extends Controller
{
    //

    public function index(){
        $priority = Priority::all();
        $users = User::all();

        return view("Tickets.add",["title"=>"Submit ticket","priority"=>$priority,"users"=>$users]);
    }


    public function store(array $data){

        $tickets = new Tickets();
        $tickets->subject = $data["subject"];
        $tickets->user_id = $data["user_id"];
        $tickets->assignee = $data["assignee"];
        $tickets->priority_id = $data["priority_id"];
        $tickets->description = $data["description"];
        $tickets->save();
    }


    public function ticketValidate(array $data)
    {

        return Validator::make($data,[
            "subject"=>["required","string","max:255"],
            "assignee"=>["required","integer",Rule::in(User::all()->pluck("id")->toArray())],
            "priority_id"=>["required","integer",Rule::in(Priority::all()->pluck("priority_id")->toArray())],
            "description"=>["required","string"]
        ]);
    }


    public function submit(Request $request){

        $validate = $this->ticketValidate($request->all());
        if ($validate->fails()){
            return redirect()->back()->withErrors($validate)->withInput();
        }


        $insert = $this->store($request->all());

        return redirect()->back()->with("status","The ticket has been submitted");

    }
}
