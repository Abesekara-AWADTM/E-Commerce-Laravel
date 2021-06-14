<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
//
class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')-> insert([[
         'UserName'=>'Thilini Abesekara',
         'Email'=>'thiliniabesekara1998@gmail.com',
         'password'=>Hash::make('1234')
        ],
        [

        'UserName'=>'Kamal Jayalal',
         'Email'=>'Kamal@gmail.com',
         'password'=>Hash::make('12345')
        ],
        [
            'UserName'=>'Sujeewa Priynthi',
            'Email'=>'sujeewa123@gmail.com',
            'password'=>Hash::make('12345')


        ],
        
        [

        'UserName'=>'Pubudu Abesekara',
         'Email'=>'pubuduabesekara1997@gmail.com',
         'password'=>Hash::make('1234')
        ],
    
        ]);
    }
}
