<?php

use Illuminate\Database\Seeder;

class tickets_main_menu_table_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $MainMenu = [
//مدیر
            [
                'role_id' => 1,
                'MainMenu' => 'منوی 1',
                'Icon'=>'fa fa-file-text',
            ],
            //2
            [
                'role_id' => 1,
                'MainMenu' => 'منوی 2',
                'Icon'=>'fa fa-users',
            ],
            //3
            [
                'role_id' => 1,
                'MainMenu' => 'منوی 3',
                'Icon'=>'fa fa-comments',
            ],
            //4
            [
                'role_id' => 1,
                'MainMenu' => 'امور مالی و حسابداری',
                'Icon'=>'fa fa-dollar',
            ],
            //5
            [
                'role_id' => 1,
                'MainMenu' => 'تنظیمات',
                'Icon'=>'fa fa-cogs',
            ],
            //6
            [
                'role_id' => 1,
                'MainMenu' => 'راهنما',
                'Icon'=>'fa fa-question-circle',
            ],

            //مترجم
            //7
            [
                'role_id' => 5,
                'MainMenu' => 'سفارشات',
                'Icon'=>'fa fa-file-text',
            ],
            //8
            [
                'role_id' => 5,
                'MainMenu' => 'پیام ها',
                'Icon'=>'fa fa-comments',
            ],
            //9
            [
                'role_id' => 5,
                'MainMenu' => 'امور مالی و حسابداری',
                'Icon'=>'fa fa-dollar',
            ],
            //10
            [
                'role_id' => 5,
                'MainMenu' => 'تنظیمات',
                'Icon'=>'fa fa-cogs',
            ],
            //11
            [
                'role_id' => 5,
                'MainMenu' => 'راهنما',
                'Icon'=>'fa fa-question-circle',
            ],



            //مشتری
            //12
            [
                'role_id' => 11,
                'MainMenu' => 'سفارشات',
                'Icon'=>'fa fa-file-text',
            ],
            //13
            [
                'role_id' => 11,
                'MainMenu' => 'پیام ها',
                'Icon'=>'fa fa-comments',
            ],
            //14
            [
                'role_id' => 11,
                'MainMenu' => 'امور مالی و حسابداری',
                'Icon'=>'fa fa-dollar',
            ],
            //15
            [
                'role_id' => 11,
                'MainMenu' => 'تنظیمات',
                'Icon'=>'fa fa-cogs',
            ],
            //16
            [
                'role_id' => 11,
                'MainMenu' => 'راهنما',
                'Icon'=>'fa fa-question-circle',
            ],

        ];

        foreach ($MainMenu as $menu) {
            DB::table('user_main_menus')->insert([
                'role_id' => $menu['role_id'],
                'MainMenu' => $menu['MainMenu'],
                'Icon'=>$menu['Icon'],
            ]);
        }
    }
}
