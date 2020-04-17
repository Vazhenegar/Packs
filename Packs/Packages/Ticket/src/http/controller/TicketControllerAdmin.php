<?php


namespace packs\ticket\http\controller;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use packs\ticket\model\ticket;

class TicketControllerAdmin extends BaseController
{

    public function ticket_list()
    {
        $t=new ticket();
        $t->save();

        //todo: admin_ticket_list
        dd( "admin_ticket_list");

    }

    public function single_ticket()
    {
        //todo: admin_single_ticket
        dd("admin_single_ticket");
    }

    public function ticket_setting()
    {
        //todo : admin_ticket_setting
        dd("admin_ticket_setting");

    }

}
