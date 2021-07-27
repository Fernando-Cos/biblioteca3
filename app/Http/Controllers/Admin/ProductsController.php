<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use Session;

class ProductsController extends Controller
{
    public function products() {
        Session::put('page','products');
        $products = Product::with(['category'=>function($query){
            $query->select('id','category_name');
        },'section'=>function($query){
            $query->select('id','name');
        }])->get();
        // $products = json_decode(json_encode($products));
        // echo "<pre>"; print_r($products); die;
        return view('admin.products.products')->with(compact('products'));
    }

    public function updateProductStatus(Request $request) {
        if($request->ajax()){
            $data = $request->all();
            // echo"<pre>"; print_r($data); die;
            if($data['status']=="Ativo"){
                $status = 0;
            } else {
                $status = 1;
            }
            Product::where('id',$data['product_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'product_id'=>$data['product_id']]);
        }
    }

    public function deleteProduct($id) {
        Product::where('id',$id)->delete();
        $message = 'Produto foi deletado com sucesso!';
        session::flash('success_message',$message);
        return redirect()->back();
    }
}