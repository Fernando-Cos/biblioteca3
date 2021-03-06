@extends('layouts.app')
@section('title', 'Contatos')
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
                            <th id="thCabecalho1" style="" class="ordenacao1" onclick="">CONTATOS
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
                    <p style="text-align: justify">BIBLIOTECÁRIAS:</p>
                    <p style="text-align: justify">Hulda Graça Amorim - </p>
                    <p style="text-align: justify">Katty Anne de Souza Nunes - </p>
                    <p style="text-align: justify"> Maria do Carmo Lima de Oliveira -</p>
                    <p style="text-align: justify;">Telefone: (92) 3643-6341 Ramal - 6341</p>
                    <p style="text-align: justify;">E-mail:<a href="#"> bibliotecases.am@gmail.com </a></p><br>
            </tbody>
        </table>
        <div class="a" style="position: relative;float: right;margin-block: -33%;">
            {{-- <img src="{{ asset('images/front_images/a.svg')}}" alt="" style="width: 100%;"> --}}
        </div>
    <table class="tabelaConsultas">
        <thead>
            <tr>
                <th style="width: 20px; min-width: 20px;">
                </th>
                <th id="thCabecalho1" style="" class="ordenacao1" onclick="">ESTAGIÁRIOS(A)
                    <div class="setasOrdenacao"></div>
                </th>
            </tr>
        </thead>
            <tbody>
                <tr onclick="">
                    <td onclick="">
                        <a id="" title="" class="link abrirDocNovaAbaConsulta" href="">
                            <span class="icon novaAbaEscuro"></span>
                        </a>
                    </td>
                <td class="colunaID coluna0">
                    <p style="text-align: justify"> Ícaro Machado - </p>
                    <p style="text-align: justify"> Anne Caroline Costa da Silva - </p>
            </tbody>
        </table>
        </div>
        </div>
    </div>
        </div>
    </div>
@endsection