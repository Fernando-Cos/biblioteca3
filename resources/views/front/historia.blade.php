@extends('layouts.app')
@section('title', 'Historia')

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
                        <th id="thCabecalho1" style="" class="ordenacao1" onclick="">HISTÓRIA
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
            <td style="" class="colunaID coluna0"><p style="text-align: justify">Criado em 27/08/1979 na SESAU com o nome de Núcleo de Biblioteca, vinculado ao Núcleo de Desenvolvimento de Recursos Humanos da Coordenadoria de Planejamento de Saúde.</p>
                <p style="text-align: justify">Depois, passou a ser o Núcleo de Documentação Técnico Científica. Em 2005 tornou-se Gerência de Documentação Técnico Científica, ligada ao Departamento de Tecnologia da Informação.</p>
                <p style="text-align: justify">Sempre foi mais conhecida como Biblioteca. E em setembro de 2020 “deixa de ser” Gerência de Documentação Técnica – GEDOC, pertencente ao Departamento de Tecnologia da Informação – DETIN, passando a ser incorporado à Gerência de Desenvolvimento de Pessoas e Educação na Saúde – GDPES.</p>
        </tbody>
    </table>
<table class="tabelaConsultas">
    <thead>
        <tr>
            <th style="width: 20px; min-width: 20px;">
            </th>
            <th id="thCabecalho1" style="" class="ordenacao1" onclick="">POR QUÊ ESTAMOS AQUI?
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
            <td class="colunaID coluna0"><p style="text-align: justify">Para desenvolver no âmbito do Sistema Estadual de Saúde do Amazonas uma cultura voltada para o aprendizado, promovendo o acesso à informação, incentivando o uso desta na geração do novo conhecimento e contribuindo para a melhoria da qualidade de vida. </p>
        </tbody>
    </table>
    <img src="{{ asset('images/front_images/drawing.svg')}}" class="home-section" alt="Imagem vetorizada de computator e materiais" style="max-width: 40%;
    padding-block: 5%;"></div>
    <div class="col-md-6" style="margin-left: 53%; margin-top: -27%;">
        <h4>O que é <strong>Biblioteca - Ses?</strong></h4>
        <p>Espaço criado para uma melhor proporcionar aprendizagem e conhecimento favoravais a todos.</p>
    </div>
</div>
    </div>
        </div>
    </div>
</div>

<style>

</style>
@endsection