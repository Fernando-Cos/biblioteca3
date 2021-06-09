<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Category;
use App\Section;
// use function GuzzleHttp\json_encode;

class CategoryController extends Controller
{
    public function categories() {
        Session::put('page','categories');
        $categories = Category::get();
        // $categories = json_decode(json_encode($categories));
        // echo "<pre>"; print_r($categories); die;
        return view('admin.categories.categories')->with(compact('categories'));
    }


    public function updateCategoryStatus(Request $request) {
        if($request->ajax()){
            $data = $request->all();
            // echo"<pre>"; print_r($data); die;
            if($data['status']=="Ativo"){
                $status = 0;
            } else {
                $status = 1;
            }
            Category::where('id',$data['category_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'category_id'=>$data['category_id']]);
        }
    }


    public function addEditCategory(Request $request, $id=null) {
        // echo "Teste "; die;
        if($id=="") {
            $title= "Add Categoria";
            // add categoria funcionalidae
            $category = new Category;
        } else {
            $title= "Edit Categoria";
        }
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;


             //Upload cateory imagem
             if($request->hasFile('category_image')) {
                $image_tmp = $request->file('category_image');
                if($image_tmp->isValid()){
                    // get image
                    $extension = $image_tmp->getClientOriginalExtension();
                    // gerando novas images name
                    $imageName = rand(111,999999).'.'.$extension;
                    $imagePath = 'images/category_images/'.$imageName;
                    // Upload da image
                    Image::make($image_tmp)->resize(300,400)->save($imagePath);
                    // salvando a img...
                    $category->category_image = $imageName;
                }
            }



            $category->parent_id = $data['parent_id'];
            $category->section_id = $data['section_id'];
            $category->category_name = $data['category_name'];
            $category->category_discount = $data['category_discount'];
            $category->description = $data['description'];
            $category->url = $data['url'];
            $category->meta_title = $data['meta_title'];
            $category->meta_description = $data['meta_description'];
            $category->meta_keywords = $data['meta_keywords'];
            $category->status = 1;
            $category->save();
        }
        // Pegando todas as sessoes...
        $getSections = Section::get();
        return view('admin.categories.add_edit_category')->with(compact('title','getSections'));
    }
}
