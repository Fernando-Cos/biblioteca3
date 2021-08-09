@extends('layouts.app')
@section('title', 'Atos Normativos da Secretaria Ses - AM')
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
    <div class="card">
        <div class="card-header"></div>
        <div class="card-body">
            <table class="tabelaConsultas">
                <thead>
                    <tr>
                        <th style="width: 20px; min-width: 20px;">
                        </th>
                        <th id="thCabecalho1" style="" class="ordenacao1" onclick="">ATOS NORMATIVOS
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
                <p style="text-align: justify">Criado em 27/08/1979 na SESAU com o nome de Núcleo de Biblioteca, vinculado ao Núcleo de Desenvolvimento de Recursos Humanos da Coordenadoria de Planejamento de Saúde.</p>
        </tbody>
    </table>
<table class="tabelaConsultas">
    <thead>
        <tr>
            <th style="width: 20px; min-width: 20px;">
            </th>
            <th id="thCabecalho1" style="" class="ordenacao1" onclick="">RESOLUÇÕES
                <div class="setasOrdenacao"></div>
            </th>
        </tr>
    </thead>
        <tbody>
            <tr onclick="">
                <td onclick="">
                    <a id="" title="Visualizar em nova guia" class="link abrirDocNovaAbaConsulta" href="">
                        <span class="icon novaAbaEscuro"></span>
                    </a>
                </td>
            <td class="colunaID coluna0"><p style="text-align: justify">Criado em 27/08/1979 na SESAU com o nome de Núcleo de Biblioteca, vinculado ao Núcleo de Desenvolvimento de Recursos Humanos da Coordenadoria de Planejamento de Saúde.</p>
        </tbody>
    </table>
    
<div class="test">
   @include('front.includes.infor-dados')
</div>
<img src="{{ asset('images/front_images/atos-normativos.svg')}}" class="home-section" alt="Imagem vetorizada de computator e materiais" style="max-width: 35%;
    padding-block: 10%;">    
</div>

    <div class="col-md-6" style="margin-left: 53%; margin-top: -27%;">
    <button type="button" class="btn btn-success">Success</button>

    </div>
</div>
    </div>
        </div>   
        </div>
</div>

@endsection