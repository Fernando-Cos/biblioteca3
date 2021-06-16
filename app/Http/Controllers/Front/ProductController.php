<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function treinamento() {

        return view('front.product.treinamento');
    }


    public function boletimInformativo() {

        return view('front.product.boletim');
    }
}
