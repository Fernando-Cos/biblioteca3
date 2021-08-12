@extends('layouts.app')
@section('title', 'E - Books')
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header"></div>
    <div class="card-body">
            <div class="form-group row1">
                <div class="content-header-options-1 row-fluid">
            <table class="tabelaConsultas">
                <thead>
                    <tr>
                        <th style="width: 20px; min-width: 20px;">
                        </th>
                        <th id="thCabecalho1" style="" class="ordenacao1" onclick="">E - BOOKS
                            <div class="setasOrdenacao"></div>
                        </th>
                    </tr>
                </thead>
        <tbody>
            <tr onclick="">
                <td>
                    <a id="" title="Visualizar em nova guia" class="link abrirDocNovaAbaConsulta" href="">
                        <span class="icon novaAbaEscuro"></span>
                    </a>
                </td>
            <td style="" class="colunaID coluna0">
            <p style="text-align: justify">(DESCRIÇÃO ALTERNATIVA AQUI) com o nome de Núcleo de Biblioteca, vinculado ao Núcleo de Desenvolvimento de Recursos Humanos da Coordenadoria de Planejamento de Saúde.</p>
        <br></tbody>
    </table><br>
<div class="form-group row1">
    <div class="content-header-options-1 row-fluid">
        <div class="form-group row">
           <div class="content-header-options-1 row-fluid" >
            <section id="obraCompleta" class="obraCompleta" style="margin-left: 0%; margin-right: 0%;"> 
                <div class="imgObraCompleta" style="height:200px;" id="f">
                    <img id="imgobraCompleta" src="{{asset('images/front_images/ebooks.jpg')}}" alt=""> 
                </div> 
                <div class="container1" id="conteudo">	 
                <div class="underlineTitulo"></div>
        <div class="moduletableobras" >
    <div class="row obras">	
            <div class="col-md-3">
                <div class="obra romance" style="background-image: url(images/front_images/img_ebooks.png);">
                    <div class="ribbon">
                    </div>
                    <a href="{{ url('ebooks/descricao') }}">
                        <span class="catTitle">leia mais</span>
                    </a>

                    <div class="fundo-livro">
                        </div>
                    </div>
                </div>
            <div class="col-md-3">
                <div class="obra conto">
                    <div class="ribbon">
                        </div>
                        <a href="{{ url('')}}">
                            <span class="catTitle">leia mais</span>
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
                <span class="catTitle">leia mais</span>
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
                     <span class="catTitle">leia mais</span>
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
            <span class="catTitle">leia mais</span>
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
                <span class="catTitle">leia mais</span>
            </a>
            <div class="fundo-livro">
                </div>
            </div>
        </div>
    <div class="col-md-3">
<div class="obra traducao">
    <div class="ribbon">
        </div>
        <a href=""><span class="catTitle">leia mais</span>
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

<style>
    .row1 {
        margin-right: -5%;
    }
</style>
@endsection
