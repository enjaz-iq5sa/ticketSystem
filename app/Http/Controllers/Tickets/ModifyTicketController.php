<?php

namespace App\Http\Controllers\Tickets;

use App\Http\Controllers\Controller;
use App\Priority;
use App\Tickets;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ModifyTicketController extends Controller

{
    //


    public function index($ticket_id){


        $priority = Priority::all();
        $users = User::all();
        $ticket_details = Tickets::find($ticket_id);
        $status = ["Close","Open"];

        if ($ticket_details->user_id !=Auth::id())
            return redirect()->back();
        else

        return view("Tickets.modify",[
            "title"=>"Edit ticket",
            "ticket"=>$ticket_details,
            "priority"=>$priority,"users"=>$users,
            "status"=>$status
        ]);
    }

    public function ticketValidate(array $data)
    {

        return Validator::make($data,[
            "subject"=>["required","string","max:255"],
            "assignee"=>["required","integer",Rule::in(User::all()->pluck("id")->toArray())],
            "priority_id"=>["required","integer",Rule::in(Priority::all()->pluck("priority_id")->toArray())],
            "description"=>["required","string"],
            "status"=>["required","integer",Rule::in([0,1])]
        ]);
    }


    public function modify(Request $request,$ticket_id){

        $validate = $this->ticketValidate($request->all());
        if ($validate->fails()){
            return redirect()->back()->withErrors($validate)->withInput();
        }

        $tickets = Tickets::find($ticket_id);
        $tickets->subject = $request->input("subject");
        $tickets->assignee = $request->input("assignee");
        $tickets->priority_id = $request->input("priority_id");
        $tickets->description = $request->input("description");
        $tickets->status = $request->input("status");
        $tickets->save();

        return redirect()->back()->with("status","The ticket has been modified");




    }
}
