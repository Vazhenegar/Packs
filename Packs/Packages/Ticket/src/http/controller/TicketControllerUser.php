<?php

namespace packs\ticket\http\controller;

use Illuminate\Routing\Controller as BaseController;
use packs\ticket\model\ticket;

class TicketControllerUser extends BaseController
{

    public function ticket_list()
    {


        //todo: user_ticket_list
        dd("user_ticket_list");

    }

    public function single_ticket()
    {
        return view("ticket::user.ticketSingle");
        dd("admin_single_ticket");

    }

    public function ticket_add()
    {

        return view("ticket::user.ticketAdd");
        //todo : ticket add
        dd("ticket add");

    }

}
