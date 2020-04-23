<?php


Route::group(['namespace' => 'packs\ticket\http\controller','middleware' => ['web']], function()
{

    //admin page and role
    Route::get( config("ticket_config.view.admin.ticket_list")??"admin/ticket_panel/{col?}/{order?}/{priority?}/{category?}", 'TicketControllerAdmin@ticket_list')->name("ticket_config.view.name.ticket_list");
    Route::get( config("ticket_config.view.admin.single_ticket")??"admin/single_ticket/{ticket}", 'TicketControllerAdmin@single_ticket')->name("ticket_config.view.name.single_ticket");
    Route::get( config("ticket_config.view.admin.ticket_setting")??"admin/ticketSetting", 'TicketControllerAdmin@ticket_setting')->name(config("ticket_config.view.name.ticket_setting"));
    Route::post( config("ticket_config.view.admin.ticket_setting")??"admin/ticketSetting"."/Category/store", 'CategoryController@store')->name("store_category");
    Route::delete( config("ticket_config.view.admin.ticket_setting")??"admin/ticketSetting"."/Category/delete", 'CategoryController@delete')->name("delete_category");

    //user page and role
    Route::get( config("ticket_config.view.user.single_ticket")??"ticket/{ticket}", 'TicketControllerUser@single_ticket')->name(config("ticket_config.view.name.single_ticket_user"));
    Route::get( config("ticket_config.view.user.list_ticket")??"tickets/{col?}/{order?}/{category?}/{type?}", 'TicketControllerUser@ticket_list')->name(config("ticket_config.view.name.list_ticket"));
    Route::get( config("ticket_config.view.user.ticket_add")??"tickets_add", 'TicketControllerUser@ticket_add')->name(config("ticket_config.view.name.ticket_add"));
    Route::post( config("ticket_config.view.user.ticket_add")??"tickets_add", 'TicketControllerUser@ticket_store');//->name(config("ticket_config.view.name.ticket_add"));


});
