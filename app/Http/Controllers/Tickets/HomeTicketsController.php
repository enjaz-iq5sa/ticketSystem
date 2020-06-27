<?php

namespace App\Http\Controllers\Tickets;

use App\Tickets;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class HomeTicketsController extends Controller
{
    //


    public function index(){


        $tickets = Tickets::all()->sortByDesc("id");
        return view("Tickets.index",["title"=>"All tickets","tickets"=>$tickets]);
    }

    public function ticketsByPriority($priority_id){

        $tickets = Tickets::all()->where("priority_id","=",$priority_id)
            ->where("user_id","=",Auth::id())->sortByDesc("id");
        return view("Tickets.index",["title"=>"All tickets","tickets"=>$tickets]);
    }
}
