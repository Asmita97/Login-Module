<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        User::create([
            'firstname'=>'Asmita',
            'lastname'=>'Natekar',
            'phone'=>'25450924',
            'email'=> 'asmita.n@gmail.com',
            'password'=>bcrypt('asmita')
            
        ]);        User::create([
            'firstname'=>'Asmita',
            'lastname'=>'Natekar',
            'phone'=>'25450924',
            'email'=> 'asmita.n@somaiya.com',
            'password'=>bcrypt('asmita')
            
        ]);
        
    }
}
