@extends('layouts.app')
@section('title', 'Repositorio Institucional')
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
                <th id="thCabecalho1" style="" class="ordenacao1" onclick="">REPOSITORIO INSTITUCIONAL
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
                <td class="colunaID coluna0">
                    <p style="text-align: justify;">Este Repositório Institucional tem como propósito reunir, armazenar, organizar, recuperar, preservar e disseminar a produção científica e intelectual da comunidade Ses - AM(docentes, pesquisadores, técnicos e alunos de pós-graduação stricto sensu, lato sensu e graduação, servidores), bem como os documentos que são produzidos no âmbito da Ses - AM(Secretaria Estadual de saúde).</p>
                    <p style="text-align: justify;">O RI - SES tem como objetivo reunir num único local virtual o conjunto da produção científica e acadêmica da Ses - AM, contribuindo para ampliar a visibilidade da Instituição e dos seus pesquisadores, bem como o impacto da investigação, além da preservação da memória intelectual, seja na área das artes, das ciências ou humanidades.
                        Para depositar sua produção no RI-SES/AM, cadastra-se e envie um e-mail para bibliotecases.am@gmail.com informando qual o vínculo com a Ses(Secretaria estadual de saúde).</p>
                </tbody>
        </table>
       
        <a href="" target="_blank">
            <div class="form-group row" id="repositorie">
                <img src="{{ asset('images/front_images/repositorie.png') }}" alt="" style="margin-block: -23%;">
                <div class="content-header-options-1 row-fluid">
                <input type="button" value="Acessar" class="btn ToRight" style="background: #17a6db;"></a>
            </div>
        </div>
    </div>
</div>

<style>
    #repositorie {
        max-width: 50%;
    }
</style>
@endsection
