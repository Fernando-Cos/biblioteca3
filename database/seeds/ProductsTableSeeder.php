<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $productRecords = [
            ['id'=>1,'category_id'=>4,'section_id'=>1,'product_name'=>'Blue T-Shirts','product_code'=>'BT1234','main_image'=>'','description'=>'teste description 1','status'=>1],
            ['id'=>2,'category_id'=>4,'section_id'=>1,'product_name'=>'Red T-Shirts','product_code'=>'BT4321','main_image'=>'','description'=>'teste description 2','status'=>1],
            ['id'=>3,'category_id'=>4,'section_id'=>1,'product_name'=>'Green T-Shirts','product_code'=>'BT1111','main_image'=>'','description'=>'teste description 3','status'=>1],
        ];

        Product::insert($productRecords);
    }
}
