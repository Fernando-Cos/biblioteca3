@extends('layouts.app')
@section('title', 'Dados em Aberto')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header"></div>
    <div class="card-body">
            <div class="form-group row">
                <table class="tabelaConsultas">
                    <thead>
                        <tr>
                            <th style="width: 20px; min-width: 20px;">
                            </th>
                            <th id="thCabecalho1" style="" class="ordenacao1" onclick="">Dados abertos
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
                    <p style="text-align: justify">FLIAA: Área em que o portal deve disponibilizar informações sobre os trabalhos realizados pelo órgão.</p>
            </tbody>
        </table>
        <table class="tabelaConsultas">
            <thead>
                <tr>
                    <th style="width: 20px; min-width: 20px;">
                    </th>
                    <th id="thCabecalho1" style="" class="ordenacao1" onclick="">Exemplo de dados
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
            <p style="text-align: justify">FLIAA: Cada órgão deverá manter em seu portal um link para o site Página Dados Abertos (link externo),
                que reúne informações de todas as principais áreas do governo federal..</p>
            </tbody>
        </table>
    <div class="content-header-options-1 row-fluid">
        <img src="{{ asset('images/front_images/data.png')}}" style="max-width: 30%" alt="">

</div>
    </div>
        </div>
             </div>
@endsection
