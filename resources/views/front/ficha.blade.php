@extends('layouts.app')
@section('title', 'Ficha Catalografica')
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
                    <th id="thCabecalho1" style="" class="ordenacao1" onclick="">FICHA CATALOGRAFICA

                        <div class="setasOrdenacao"></div>
                    </th>
                </tr>
            </thead>
    <tbody>
        <tr onclick="">
            <td onclick="event.stopPropagation();">
                <a id="" title="Visualizar em nova guia" class="link abrirDocNovaAbaConsulta" href="">
                    <span class="icon novaAbaEscuro"></span>
                </a>
            </td>
        <td style="" class="colunaID coluna0"><p style="text-align: justify">FLIEEN 02-04: Ficha catalográfica é um documento que reúne os dados que descrevem uma publicação, de forma padronizada - esse padrão é internacional.</p>
            <p style="text-align: justify">FLIAAA 02-04: Ela aparece no verso da página de rosto das publicações, oficializando seus dados descritivos. 
                Além de padronizar a catalogação da obra, a ficha catalográfica facilita a busca de informações sobre o material.
                Para solicitar click na imagem abaixo.</p>
    </tbody>
</table><br>
    <p>Para solicitar click na imagem abaixo.</p>
    <div class="form-group row">
        <div class="content-header-options-1 row-fluid">
            <a href="https://forms.gle/zNMFznNKx6A1RDig6" target="_blanck">
            <img style="max-width: 60%; border-radius: 10px;box-shadow: 5px 0px 7px 2px #888888;" src="{{ asset('images/front_images/ficha.png') }}" alt=""></a>
    </div>
</div>
    </div>
</div>
@endsection
