<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\Category;
use App\Section;
use Image;
use NunoMaduro\Collision\Adapters\Phpunit\Style;

// use function GuzzleHttp\json_encode;

class CategoryController extends Controller
{
    public function categories() {
        Session::put('page','categories');
        $categories = Category::with(['section','parentcategory'])->get();
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
            // add categoria funcionalidae
            $title= "Add Categoria";
            $category = new Category;
            $categorydata = array();
            $getCategories = array();
        } else {
            // editar categoria funcionalidae
            $title= "Editar Categoria";
            $categorydata = Category::where('id',$id)->first();
            $categorydata = json_decode(json_encode($categorydata),true);
            $getCategories = Category::with('subcategories')->where(['parent_id'=>0,'section_id'=>$categorydata['section_id']])->get();
            $getCategories = json_decode(json_encode($getCategories),true);
            // echo"<pre>"; print_r($getCategories); die;
        }
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;


            //Validação das categorias... 
            $rules = [
                'category_name' => 'required|regex:/^[\pL\s\-]+$/u',
                'section_id' => 'required',
                'url' => 'required',
                'category_image' => 'image',
            ];
            $customMessages = [
                'category_name.required' => 'Coloque nome da categoria',
                'category_name.regex' => 'Coloque um nome valido',
                'section_id.required' => 'Session e Obrigatorio',
                'url.required' => 'Coloque uma URL',
                'category_image.image' => 'Categoria Imagem e importante',
            ];
            $this->validate($request, $rules, $customMessages);

             //Upload category imagem
             if($request->hasFile('category_image')) {
                $image_tmp = $request->file('category_image');
                if($image_tmp->isValid()){
                    // get image
                    $extension = $image_tmp->getClientOriginalExtension();
                    // gerando novos nomdes de imgs
                    $imageName = rand(111,999999).'.'.$extension;
                    $imagePath = 'images/category_images/'.$imageName;
                    // Upload da image
                    // Image::make($image_tmp)->resize(300,400)->save($imagePath);
                    Image::make($image_tmp)->save($imagePath);
                    // salvando a img...
                    $category->category_image = $imageName;
                }
            }
            // if (empty($data['category_discount'])) {
            //     $data['category_discount']="";
            // }

            // if (empty($data['description'])) {
            //     $data['description']="";
            // }
            if (empty($data['meta_title'])) {
                $data['meta_title']="";
            }

            if (empty($data['meta_description'])) {
                $data['meta_description']="";
            }

            if (empty($data['meta_keywords'])) {
                $data['meta_keywords']="";
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


            session::flash('success_message','Adicionada com sucesso!');
            return redirect('admin/categories');
        }
        // Pegando todas as sessoes...
        $getSections = Section::get();
        return view('admin.categories.add_edit_category')->with(compact('title','getSections','categorydata','getCategories'));
    }


    public function appendCategoryLevel(Request $request){
        if($request->ajax()){
            $data = $request->all();
            // echo"<pre>"; print_r($data); die;
            $getCategories = Category::with('subcategories')->where(['section_id'=>$data['section_id'],'parent_id'=>0,'status'=>1])->get();
            $getCategories = json_decode(json_encode($getCategories),true);
            // echo"<pre>"; print_r($getCategories); die;
            return view('admin.categories.append_categories_level')->with(compact('getCategories'));
        }
    }
}
