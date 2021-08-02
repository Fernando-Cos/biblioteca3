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
        </table><br>

<article class="vdb-card paper horizontal rounded" style="margin-right: 5%;">
    <div class="tag">
        <span class="visible-xs visible-sm">Em Test</span>
        <span class="hidden-xs hidden-sm">Em Test</span>
    </div>
    <a href="">
        <div class="wrapper" style="background-color: #c0d4d6;">
            <div class="brand">
                <img src="{{('images/front_images/saude-literaria.jfif')}}" alt="">
            </div>
        </div>
    </a>
<div class="content">
    <h5>Click no texto em baixo</h5>
    <h5 class="hidden-xs"><a href=""></a></h5>
    <h4 class="hidden-xs hidden-sm">Essa música retrata o que verdadeiramente é ser Homem, dono de si mesmo. Corajoso, digno de suas conquistas e responsável por suas falhas.</a></h4>
    <div class="pill icon email">
        <a href="http://www.dominiopublico.gov.br/download/som/on000012.mp3">
            <input type="submit" class="rpp has-ripple" value="Ouvir" style=""></a>
        </div>
    </div>
</article>
<div class="form-group row">
    <div class="content-header-options-1 row-fluid"> 
    </div>
</div>
</div>
</div> 

<style type="text/css">
.vdb-showcase.col-1 .vdb-card {
    width: 100%;
    margin-bottom: 30px;
}

.vdb-card.paper.horizontal {
    position: relative;
    padding-bottom: 0;
}

.vdb-card.paper.rounded {
    overflow: hidden;
    border-radius: 5px;
}
.vdb-card.paper {
    background-color: #fff;
    padding-bottom: 20px;
    box-shadow: 0 0 20px rgb(62 70 79 / 15%);
}

.vdb-card.paper.horizontal .tag {
    right: 0;
    color: #fff;
    padding: 10px;
    font-weight: 700;
    position: absolute;
    text-transform: uppercase;
    background-color: #546477;
}
.visible-lg, .visible-lg-block, .visible-lg-inline, .visible-lg-inline-block, .visible-md, .visible-md-block, .visible-md-inline, .visible-md-inline-block, .visible-sm, .visible-sm-block, .visible-sm-inline, .visible-sm-inline-block, .visible-xs, .visible-xs-block, .visible-xs-inline, .visible-xs-inline-block {
    display: none!important;
}
.vdb-card.paper.horizontal .wrapper {
    width: 30%;
    display: table;
    height: 200px;
}
.vdb-card.paper.horizontal .wrapper .brand {
    display: table-cell;
    vertical-align: middle;
}
.vdb-card.paper.horizontal .wrapper .brand img {
    display: block;
    max-width: 80%;
    margin: auto!important;
}
.vdb-card img {
    width: 100%;
}
.vdb-card.paper.horizontal .content {
    right: 0;
    display: table-cell;
    vertical-align: middle;
    width: calc(100% - 30%);
    top: 50%;
    position: absolute;
    transform: translateY(-50%)!important;
}
.vdb-card.paper.horizontal h5 {
    margin-top: 25px;
    margin-bottom: 15px;
    font-size: 17px;
}
.vdb-card.paper.horizontal h4, .vdb-card.paper.horizontal h5 {
    float: left;
    padding: 0 6%;
    text-align: left;
}
.vdb-card.paper.horizontal h5 a {
    color: #18324eb5;
}
.vdb-card.paper.horizontal h5 {
    margin-top: 25px;
    margin-bottom: 15px;
    font-size: 17px;
}
.vdb-card.paper.horizontal h4, .vdb-card.paper.horizontal h5 {
    float: left;
    padding: 0 6%;
    text-align: left;
}
.vdb-card.paper.horizontal h5 a {
    color: #6c7f93;
}
.vdb-card.paper.horizontal h4 {
    margin-top: 0;
}

.vdb-card.paper.horizontal h4, .vdb-card.paper.horizontal h5 {
    float: left;
    padding: 0 6%;
    text-align: justify;
}
.vdb-card.paper h4 {
    font-size: 18px;
    line-height: 20px;
    color: #3e464f;
    text-align: center;
    padding: 0 6%;
    margin: 10px 0;
    margin-top: 30px;
    min-height: 90px;
}
a {
    color: #263e58c9;
}
</style>
@endsection