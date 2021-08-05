<?php

use Illuminate\Database\Seeder;
use App\Section;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sectionsRecords = [
            ['id'=>1,'name'=>'Notícias','status'=>1],
            ['id'=>2,'name'=>'Mas Importantes','status'=>1],
            ['id'=>3,'name'=>'Menos Importantes','status'=>1],
            ['id'=>4,'name'=>'Atualidade','status'=>1],
            ['id'=>5,'name'=>'Em destaques','status'=>1],
        ];
        Section::insert($sectionsRecords);
    }
}
