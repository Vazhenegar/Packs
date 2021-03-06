<?php


namespace packs\ticket\http\controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use packs\ticket\model\ticket;
use packs\ticket\model\TicketCategory;
use packs\ticket\model\TicketChat;

class TicketControllerAdmin extends BaseController
{



    public function ticket_list($col="created_at",$order="desc",$priority=null,TicketChat $category=null)
    {

        //validate input data
        if (!in_array($col,ticket::$ValidCols))
        {return "مقدار col وارد شده صحیح نیست";}
        if (!in_array($order,ticket::$ValidOrders)){
            return "مقدار order صحیح نیست";
        }
        if (!in_array($priority,ticket::$ValidPriority))

        $tickets    =null;
        $where      =[];

        //add filter
        $category!=null? $where[]=["TicketCategory_id","=",$category->id]:null;
        $priority!=null? $where[]=["priority","=",$priority]:null;
        $where[]=["status","!=","removed"];




        if ($where!=null)
        { $tickets=ticket::where($where);}
        $tickets=$tickets->orderBy($col,$order);
        if ($tickets!=null)
        {$tickets=$tickets->paginate(3);}

        dd($tickets[0]->getUserAttribute()->get());

        return view("ticket::admin.ticketList",compact("col","order","priority","category","tickets"));
    }



    public function single_ticket()
    {
        //todo: admin_single_ticket
        dd("admin_single_ticket");
    }

    public function ticket_setting()
    {


        $category=TicketCategory::where("status","!=","removed")->orderBy("created_at","desc")->get();
        return view("ticket::admin/ticketSetting",compact("category"));
        
    }


}
