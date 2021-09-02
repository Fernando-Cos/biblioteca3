<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $usersRecords = [
            ['id'=>1,'name'=>'Fernando','email'=>'ConsultoriaEmste@gmail.com','password' => '123456'],
            ['id'=>2,'name'=>'Fernando','email'=>'Silva741@gmail.com','password' => '123456'],
            ['id'=>3,'name'=>'Fernando','email'=>'Ferando741@gmail.com','password' => '123456'],
            ['id'=>4,'name'=>'Fernando','email'=>'Teste12741@gmail.com','password' => '123456'],
        ];
        User::insert($usersRecords);
    }
}
