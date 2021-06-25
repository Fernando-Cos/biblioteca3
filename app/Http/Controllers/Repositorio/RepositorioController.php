<?php

namespace App\Http\Controllers\Repositorio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RepositorioController extends Controller
{
    public function indexRepositorio() {
        
        return view('front.repositorioInstitucional.repositorio-institucional');
    }
}
