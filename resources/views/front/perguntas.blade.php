@extends('layouts.app')
@section('title', 'Perguntas Frequentes')
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
                            <th id="thCabecalho1" style="" class="ordenacao1" onclick="">Perguntas Frequentes
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
                <p style="text-align: justify">1. Qual é a política de pesquisa da SES - AM?:</p>
                <p style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Duis vitae mi non metus ultricies auctor non sed justo. 
                    Sed consectetur sapien eu luctus semper. Maecenas porttitor leo ipsum, 
                    sit amet vehicula leo blandit sit amet. Aliquam pretium odio sem, 
                    eget eleifend arcu sagittis at. Cras ut molestie lorem:</p>

                <p style="text-align: justify">2. Qual é o arcabouço legal da pesquisa na instituição?
                <p style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Duis vitae mi non metus ultricies auctor non sed justo. 
                    Sed consectetur sapien eu luctus semper. Maecenas porttitor leo ipsum, 
                    sit amet vehicula leo blandit sit amet. Aliquam pretium odio sem, 
                    eget eleifend arcu sagittis at. Cras ut molestie lorem:</p>
                    
                <p style="text-align: justify">3. Qual é o arcabouço legal da pesquisa na instituição?
                <p style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                    Duis vitae mi non metus ultricies auctor non sed justo. </p>
                </tbody>
                </table>
            <div class="content-header-options-1 row-fluid">
                <img src="{{ asset('images/front_images/faq-9.svg')}}" style="max-width: 30%" alt="">
                <div class="col-md-6" style="margin-left: 37%; margin-top: -27%;">
                    <h4>As perguntas serão encaminhadas para os responsaveis. <strong></strong></h4>
                    <p>Espaço criado para uma melhor proporcionar aprendizagem e conhecimento favoravais a todos.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
