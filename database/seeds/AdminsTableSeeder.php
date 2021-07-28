<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();
        $adminRecords = [
            ['id'=>1, 'name'=>'admin','type'=>'admin','mobile'=>'98000000','email'=>'admin@gmail.com','password'=>'$2y$10$m88BOu4fGfeUXS76pVVRCeZRqy/eMRDAYldze4/5rKcN0waFLLOQ6',
            'image'=>'','status'=>1
        ],

            ['id'=>2, 'name'=>'Fernando','type'=>'subadmin','mobile'=>'98000000','email'=>'fernando@admin.com','password'=>'$2y$10$m88BOu4fGfeUXS76pVVRCeZRqy/eMRDAYldze4/5rKcN0waFLLOQ6',
            'image'=>'','status'=>1
        ],
            ['id'=>3, 'name'=>'Silva','type'=>'admin','mobile'=>'98000000','email'=>'silva@admin.com','password'=>'$2y$10$m88BOu4fGfeUXS76pVVRCeZRqy/eMRDAYldze4/5rKcN0waFLLOQ6',
            'image'=>'','status'=>1
        ],
            ['id'=>4, 'name'=>'Costa','type'=>'subadmin','mobile'=>'98000000','email'=>'cost@admin.com','password'=>'$2y$10$m88BOu4fGfeUXS76pVVRCeZRqy/eMRDAYldze4/5rKcN0waFLLOQ6',
            'image'=>'','status'=>1
        ],
    
    ];

        DB::table('admins')->insert($adminRecords);
        // foreach ($adminRecords as $key => $record) {
        //     \App\Admin::create($record);
        // }
    }
    
}
