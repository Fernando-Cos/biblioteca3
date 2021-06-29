<?php

namespace App\Http\Controllers\Ebook;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EbookController extends Controller
{
    public function descricao() {
        return view('front.ebook.descricao');
    }
}
