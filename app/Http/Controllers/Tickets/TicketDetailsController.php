<?php

namespace App\Http\Controllers\Tickets;

use App\Http\Controllers\Controller;
use App\Priority;
use App\Tickets;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketDetailsController extends Controller
{
    //


    public function index($ticket_id){
        $comments = DB::table("comments")->where("ticket_id","=",$ticket_id)
            ->join("users","comments.user_id","=","users.id")
            ->select(["content","name","email","role_id","comments.created_at"])
            ->get();

        $ticket_details = Tickets::find($ticket_id);

        $priority = Priority::all()->where("priority_id","=",$ticket_details->priority_id)->first();
        $users = User::all()->where("id","=",$ticket_details->user_id)->first();
        $status = ["Close","Open"];



        return view("Tickets.details",[
            "title"=>"Ticket details",
            "ticket"=>$ticket_details,
            "priority"=>$priority,
            "user"=>$users,
            "status"=>$status[$ticket_details->status],
            "comments"=>$comments
        ]);


    }
}
