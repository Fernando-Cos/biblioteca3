<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{

    // public static function sections() {
    //     $getSections = Section::with('categories')->get();
    //     $getSections = json_decode(json_encode($getSections),true);
    //     echo "<pre>"; print_r($getSections); die;
    // }

    // public function categories() {
    //     return $this->hasMany('App\Category', 'section_id')->where(['parent_id'=>'ROOT', 'status'
    //     =>1])->with('subcategories');
    // }
}
