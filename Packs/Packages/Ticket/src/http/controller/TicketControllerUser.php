<?php

namespace packs\ticket\http\controller;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use packs\ticket\model\ticket;

class TicketControllerUser extends BaseController
{

    public function ticket_list()
    {


        //todo: user_ticket_list
        return view("ticket::user.ticketList");
        dd("user_ticket_list");

    }

    public function single_ticket()
    {
        return view("ticket::user.ticketSingle");
        dd("admin_single_ticket");

    }

    public function ticket_add( Request $request)
    {
        $request->validate([

        ]);


        return view("ticket::user.ticketAdd");
        //todo : ticket add
        dd("ticket add");

    }

}
