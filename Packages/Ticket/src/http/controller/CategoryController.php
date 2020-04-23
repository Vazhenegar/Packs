<?php


namespace packs\ticket\http\controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use packs\ticket\model\ticket;
use packs\ticket\model\TicketCategory;
use packs\ticket\model\TicketChat;

class CategoryController extends BaseController
{

    public function store(Request $request)
    {
        $request->validate([
            "title"=>"required|max:200"
        ]);

     $cat=new TicketCategory($request->all());
     $cat->status="active";
     $cat->save();
        return redirect()->back();
    }

    public function delete(Request $request){
        $request->validate([
            "category_id"=>"required"
        ]);
        $cat=TicketCategory::findOrFail($request->category_id);
       $cat->status="removed";
       $cat->save();
       return redirect()->back();
    }
}
