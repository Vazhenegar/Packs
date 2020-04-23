<?php

namespace packs\ticket\model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{


    public static $ValidCols            =["user_id","TicketCategory_id","title","status","priority","created_at","update_at"];
    public static $ValidStatus          =["dont_show","removed"];
    public static $ValidOrders          =["asc","desc"];
    public static $ValidPriority        =["normal"];

    public function getStatusAttribute($value)
    {
        $returnValue=[$value];
        switch ($value){

            case "dont_show":
                $returnValue[]="دیده نشده";
                return $returnValue;
            break;

            case "removed":
                $returnValue[]="حذف شده";
                return $returnValue;
                break;

        }

    }


    public function getUserAttribute()
    {
        return $this->hasOne(User::class,"id","user_id");
    }
    public function getTicketChatAttribute()
    {
        return $this->hasMany(TicketChat::class,"ticket_id","id");
    }
    public function getTicketCategoryAttribute()
    {
        return $this->hasOne(TicketCategory::class,"id","TicketCategory_id");
    }

}
