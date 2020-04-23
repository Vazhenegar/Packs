<?php

namespace packs\ticket\http\controller;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use packs\ticket\model\ticket;
use packs\ticket\model\TicketCategory;
use packs\ticket\model\TicketChat;

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

    public function ticket_add()
    {
        $category=TicketCategory::where("status","!=","removed")->orderBy("created_at","desc")->get();
        $priority=ticket::$ValidPriority;
        return view("ticket::user.ticketAdd",compact('category','priority'));
    }
    public function ticket_store( Request $request){




        $request->validate([
            //ticket
            "title"=>"required|max:150",
            "category"=>"required",
            "priority"=>"required",

            //ticketChat
            //todo : add max upload and file type in config file
            "message"=>"required|max:1000",
            "file_attach"=>'nullable||file|mimes:jpeg,bmp,png,pdf,zip,rar|max:10240'
        ]);


        //todo: add google check
        //todo :: add user id
        $user_id=1;

        $ticket=new ticket();
        $ticket->user_id=$user_id;
        $ticket->TicketCategory_id=$request->category;
        $ticket->title=$request->title;
        $ticket->status="dont_show";
        $ticket->priority=$request->priority;
        $ticket->save();




        $ticket_chat=new TicketChat();
        $ticket_chat->user_id=$user_id;
        $ticket_chat->ticket_id=$ticket->id;
        $ticket_chat->message=$request->message;
        $ticket_chat->status="active";


        if ($file=$request->file("file_attach"))
        {

            $ticket_chat->file_attach=$file->storeAs("ticketFiles","ticketFiles_".$file->getClientOriginalName());
        }
        $ticket_chat->save();
       return redirect()->route(config("ticket_config.view.name.single_ticket_user"), ["ticket"=>$ticket->id]);




    }

}
