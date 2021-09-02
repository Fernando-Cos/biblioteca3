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
            ['id'=>1,'name'=>'Thiago','email'=>'ConsultoriaEmste@gmail.com','password' => '123456'],
            ['id'=>2,'name'=>'Felipe','email'=>'Silva741@gmail.com','password' => '22222'],
            ['id'=>3,'name'=>'Costa maluco','email'=>'Ferando741@gmail.com','password' => '1221123456'],
            ['id'=>4,'name'=>'Urma','email'=>'Tesste12741@gmail.com','password' => '12345216'],
            ['id'=>5,'name'=>'Silva','email'=>'Teste12741@gmail.com','password' => '2231313'],
            ['id'=>6,'name'=>'Caio','email'=>'Tesstse12741@gmail.com','password' => '12342424456'],
            ['id'=>7,'name'=>'Pereira','email'=>'Teste127441@gmail.com','password' => '12344456'],
        ];
        User::insert($usersRecords);
    }
}
