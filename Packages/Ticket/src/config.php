<?php
return [


    'view' => [
        "admin"=>[
            'ticket_list' =>"admin/ticket_panel/{col?}/{order?}/{priority?}/{category?}",
            'single_ticket' => "admin/single_ticket/{ticket}",
            'ticket_setting'=>"admin/ticketSetting",

        ],
        "user"=>[
            "single_ticket"=>"ticket/{ticket}",
            "list_ticket"=>"tickets/{col?}/{order?}/{category?}/{type?}",
            "ticket_add"=>"tickets_add"
        ],
        "name"=>[
            'ticket_list' =>"admin_ticket_list",
            'single_ticket_admin' => "single_ticket",
            'ticket_setting'=>"ticket_setting",
            "single_ticket_user"=>"user_single_ticket",
            "list_ticket"=>"list_ticket",
            "ticket_add"=>"ticket_add"
        ]
    ],
    'controller'=>[
        //todo:add controller to config
    ],
    "reCAPTCHA"=>[
        ['SITE_KEY'=>"6LfWN-oUAAAAALaVQV0Yv1-YCaLo54J-6AmZF5Kz"],
        ['SECRET_KEY'=>"6LfWN-oUAAAAAGpV9iJ6rZuOvjU9NH2MkWquPST2"]
    ]







];
