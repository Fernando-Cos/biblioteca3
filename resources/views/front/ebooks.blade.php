@extends('layouts.app')
@section('title', 'E - Books')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header"></div>
    <div class="card-body">
        
            <div class="form-group row">
                <div class="content-header-options-1 row-fluid" style="padding: 15px;">
                    <section id="obraCompleta" class="obraCompleta"> 
                        <div class="imgObraCompleta" style="height: 255px;width: 889px;" id="f">
                            <img id="imgobraCompleta" src="{{asset('images/front_images/ebooks.jpg')}}" alt=""> 
                        </div> 
                        <div class="container1" id="conteudo">	 
                      <div class="underlineTitulo"></div>
                <div class="moduletableobras" style="box-shadow: 7px 5px 12px 1px #afb9cc;">
            <div class="row obras">	
                {{-- <h1>E - BOOKS</h1> --}}
                        <div class="col-md-3">
                            <div class="obra romance">
                                <div class="ribbon">
                                </div>
                        <a href=""><span class="catTitle">Romance</span>
                        </a>
                        <div class="fundo-livro">
                            </div>
                        </div>
                    </div>
                <div class="col-md-3">
                    <div class="obra conto">
                        <div class="ribbon">
                            </div>
                            <a href="">
                                <span class="catTitle">Conto</span>
                            </a>
                        <div class="fundo-livro">
                    </div>
                </div>
            </div>
        <div class="col-md-3">
    <div class="obra poesia">
        <div class="ribbon">
            </div>
            <a href="">
                <span class="catTitle">Poesia</span>
            </a>
            <div class="fundo-livro">
                </div>
            </div>
        </div>
    <div class="col-md-3">
         <div class="obra cronica">
            <div class="ribbon">
                </div>
                <a href="">
                     <span class="catTitle">Crônica</span>
                    </a>
                    <div class="fundo-livro">
                        </div>
                    </div>
                </div>
            <div class="col-md-3">
        <div class="obra teatro">
    <div class="ribbon">
        </div>
        <a href="">
            <span class="catTitle">Teatro</span>
        </a>
    <div class="fundo-livro">
        </div>
    </div>
</div>
<div class="col-md-3">
    <div class="obra critica">
        <div class="ribbon">
            </div>
            <a href="">
                <span class="catTitle">Crítica</span>
            </a>
            <div class="fundo-livro">
                </div>
            </div>
        </div>
    <div class="col-md-3">
<div class="obra traducao">
    <div class="ribbon">
        </div>
        <a href=""><span class="catTitle">Tradução</span>
        </a>
        <div class="fundo-livro">
            </div></div></div><div class="col-md-3"><div class="obra miscelanea"><div class="ribbon"></div><a href="/obra-completa-lista/itemlist/category/30-miscelanea"><span class="catTitle">Miscelânea</span></a><div class="fundo-livro"></div></div></div>		
                    </div>
                </div>
            </div>
        </section>







            </div>
        </div>
    </div>
</div>





@endsection
