@extends('layouts.app')
@section('title', 'Ses - AM Saúde Lietaria')
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header"></div>
    <div class="card-body">
        <h1>SAÚDE</h1>
        <table class="tabelaConsultas">
                    <thead>
                        <tr>
                            <th style="width: 20px; min-width: 20px;">
                            </th>
                            <th id="thCabecalho1" style="" class="ordenacao1" onclick="">APRESENTAÇÃO
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
                    <p style="text-align: justify">Há você!: Comece bem sua semana - Quer começar sua semana motivado(a)? Ouça agora mesmo os áudios literários gravados especialmente para você!</p>
            </tbody>
        </table>
            <div class="form-group row">
                <div class="content-header-options-1 row-fluid">
                    
            </div>
        </div>
    </div>
</div> 
@endsection