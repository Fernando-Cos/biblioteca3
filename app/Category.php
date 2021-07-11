<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        // 'parent_id', 'section_id', 'category_name', 'category_image','category_discount','description', 'url',
        // 'status','created_at','updated_at',
    ];

    
    public function subcategories(){
        return $this->hasMany('App\Category','parent_id')->where('status',1);
    }
    
}
