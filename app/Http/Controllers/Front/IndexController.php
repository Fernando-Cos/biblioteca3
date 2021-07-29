<?php

namespace App\Http\Controllers\Front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        // echo"teste"; die; 
        // $page_name = 'index';
        // return view('front.index')->with(compact('page_name'));
        return view('front.index');
    }

    public function memorial() {
        return view('front.memorial');
    }

    public function publicacao() {
        return view('front.publications');
    }

    public function ebooks() {
        return view('front.ebooks');
    }

    public function repositorioInstitucional() {
        return view('front.repositorio');
    }

    public function contatos() {
        return view('front.contatos');
    }

    public function historia() {
        return view('front.historia');
    }

    public function fichaCatalogacao() {
        return view('front.ficha');
    }

    public function isbn() {
        return view('front.isbn');
    }

    public function emprestimoObras() {
        return view('front.emprestimo');
    }

    public function agendamentoSala() {
        return view('front.agendamento');
    }

    public function fonteInformacao() {
        return view('front.fonte-informacao');
    }

    public function apoioPesquisa() {
        return view('front.apoio-pesquisa');
    }

    public function salaEstudo() {
        return view('front.sala-estudo');
    }

    public function saudeLiteraria() {
        return view('front.saude-literaria.saude-literaria');
    }
    public function bvs() {
        return view('front.bvs');
    }

    public function minhaSaude() {
        return view('front.minha-saude.minha-saude');
    }

    public function eventos() {
        return view('front.eventos.eventos');
    }

    public function perguntas() {
        return view('front.perguntas');
    }

    public function dadosAbertos() {
        return view('front.dados-abertos');
    }
    
}
