@extends('layouts.app')
@section('title', 'Saúde Para todos | Minha Saúde')
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header"></div>
<div id="portal-searchbox" class="row">
	<form action="/" method="post" class="pull-right">
	<fieldset>
	<div class="input-append">
		<label for="portal-searchbox-field" class="hide">Busca:</label>
		<input type="text" id="portal-searchbox-field" class="searchField" placeholder="Buscar Artigos..." title="Buscar Artigos" name="searchword"  style="border-radius: 4px; box-shadow: 2px 2px 2px 1px rgb(0 0 0 / 20%);background: linear-gradient(0, #c7c7c7, #ffffff, #ffffff);">       
	</div>
    <div class="card-body">
        <h1>Artigos</h1>
        <table class="tabelaConsultas">
                <thead>
                    <tr>
                        <th style="width: 20px; min-width: 20px;">
                        </th>
                        <th id="thCabecalho1" style="" class="ordenacao1" onclick="">Artigos com dicas práticas de saúde.
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
                <p style="text-align: justify">FLIEEN 02-04:  Dicas Práticas Para Manter a Saúde Em Dia Manter a saúde é cuidar todos os dias do corpo e da mente. 
                    Por isso, é necessário seguir alguns hábitos como a boa alimentação, prática de exercícios físicos, entre outras. 
                    Pensando nisso, reunimos neste artigo algumas dicas para se manter saudável.</p>
               </tbody>
            </table>
            <div class="col-md-12">
        <div class="vdb-showcase col-4">
<div class="trail vdb-pagination-content" data-pagination-args="{&quot;args&quot;:{&quot;taxonomy&quot;:&quot;content_format&quot;,&quot;term&quot;:null},&quot;card&quot;:&quot;default&quot;,&quot;hook&quot;:&quot;posts_content&quot;}">
<article class="vdb-card simple">
<a href="https://viverdeblog.com/escrever-melhor/">
<div class="wrapper" style="background-color: #c7c6ce;">
<img src="https://viverdeblog.com/wp-content/uploads/2021/07/escrever-melhor.png" alt="7 tipos de bloqueios que te impedem de escrever melhor" class="">
</div>
</a>
<span><a href="https://viverdeblog.com/escrever-melhor/">Artigos</a></span>
<h4><a href="https://viverdeblog.com/escrever-melhor/" title="7 tipos de bloqueios que te impedem de escrever melhor">7 tipos de bloqueios que te impedem de escrever melhor</a></h4>
</article>
<article class="vdb-card simple">
<a href="https://viverdeblog.com/como-manter-o-foco/">
<div class="wrapper" style="background-color: #8d8a9e7a;">
<img src="https://viverdeblog.com/wp-content/uploads/2021/07/como-manter-o-foco.png" alt="Como manter o foco e concentração na hora de escrever" class="">
</div>
</a>
<span><a href="https://viverdeblog.com/como-manter-o-foco/">Artigos</a></span>
<h4><a href="https://viverdeblog.com/como-manter-o-foco/" title="Como manter o foco e concentração na hora de escrever">Como manter o foco e concentração na hora de escrever</a></h4>
</article>
<article class="vdb-card simple">
<a href="https://viverdeblog.com/textos-persuasivos/">
<div class="wrapper" style="background-color: #8870ff;">
<img src="https://viverdeblog.com/wp-content/uploads/2021/07/como-escrever-qualquer-texto.png" alt="Como escrever textos persuasivos que mantém a atenção dos leitores da primeira até a última palavra" class="">
</div>
</a>
<span><a href="https://viverdeblog.com/textos-persuasivos/">Artigos</a></span>
<h4><a href="https://viverdeblog.com/textos-persuasivos/" title="Como escrever textos persuasivos que mantém a atenção dos leitores da primeira até a última palavra">Como escrever textos persuasivos que mantém a atenção dos leitores da primeira até a última…</a></h4>
</article>
<article class="vdb-card simple">
<a href="https://viverdeblog.com/como-crescer-instagram/">
<div class="wrapper" style="background-color: #3197d6;">
<img src="https://viverdeblog.com/wp-content/uploads/2021/06/como-crescer-no-instagram.png" alt="Como crescer no Instagram sem virar refém das redes sociais" class="">
</div>
</a>
<span><a href="https://viverdeblog.com/como-crescer-instagram/">Artigos</a></span>
<h4><a href="https://viverdeblog.com/como-crescer-instagram/" title="Como crescer no Instagram sem virar refém das redes sociais">Como crescer no Instagram sem virar refém das redes sociais</a></h4>
</article>
<article class="vdb-card simple">
<a href="https://viverdeblog.com/como-usar-metaforas-e-analogias/">
<div class="wrapper" style="background-color: #8870ff;">
<img src="https://viverdeblog.com/wp-content/uploads/2021/06/metaforas.png" alt="Como usar metáforas e analogias para dar vida a seus textos" class="">
</div>
</a>
<span><a href="https://viverdeblog.com/como-usar-metaforas-e-analogias/">Artigos</a></span>
<h4><a href="https://viverdeblog.com/como-usar-metaforas-e-analogias/" title="Como usar metáforas e analogias para dar vida a seus textos">Como usar metáforas e analogias para dar vida a seus textos</a></h4>
</article>
<article class="vdb-card simple">
<a href="https://viverdeblog.com/como-parar-de-procrastinar/">
<div class="wrapper" style="background-color: #8870ff;">
<img src="https://viverdeblog.com/wp-content/uploads/2021/06/como-parar-de-procrastinar.png" alt="Como parar de procrastinar e começar a escrever: 7 estratégias testadas e aprovadas" class="">
</div>
</a>
<span><a href="https://viverdeblog.com/como-parar-de-procrastinar/">Artigos</a></span>
<h4><a href="https://viverdeblog.com/como-parar-de-procrastinar/" title="Como parar de procrastinar e começar a escrever: 7 estratégias testadas e aprovadas">Como parar de procrastinar e começar a escrever: 7 estratégias testadas e aprovadas</a></h4>
</article>
<article class="vdb-card simple">
<a href="https://viverdeblog.com/aprender-a-escrever/">
<div class="wrapper" style="background-color: #316d5196;">
<img src="https://viverdeblog.com/wp-content/uploads/2021/06/aprender-a-escrever.png" alt="10 razões inusitadas para aprender a escrever em 2021" class="">
</div>
</a>
<span><a href="https://viverdeblog.com/aprender-a-escrever/">Artigos</a></span>
<h4><a href="https://viverdeblog.com/aprender-a-escrever/" title="10 razões inusitadas para aprender a escrever em 2021">10 razões inusitadas para aprender a escrever em 2021</a></h4>
</article>
<article class="vdb-card simple">
<a href="">
<div class="wrapper" style="background-color: #477c8c7a;">
<img src="https://viverdeblog.com/wp-content/uploads/2021/05/erros-de-escrita.png" alt="7 erros de escrita que você comete sem saber ( e que são fáceis de corrigir)" class="">
</div>
</a>
<span><a href="">Artigos</a></span>
<h4><a href="" title="7 erros de escrita que você comete sem saber ( e que são fáceis de corrigir)">7 erros de escrita que você comete sem saber ( e que são fáceis de corrigir)</a></h4>
</article>
</div>
</div>
</div>

<div class="row">
<div class="col-md-4 col-md-offset-4">
<nav class="vdb-navigation default circle center margin-top-40 hidden-xs vdb-pagination-links">
<a href="#" class="pagination-link active">1</a>
<a href="#" class="pagination-link">2</a> 
<a href="#" class="pagination-link">3</a> 
<a href="">mais <i class="material-icons"></i></a>
</nav>
</div>
</div>

<style type="text/css">
/* inicio paginação */
.vdb-navigation.default.center {
    display: inherit;
    margin: auto;
    text-align: center;
}

.button.outline.primary {
    color: #2db0ee;
    border-color: #2db0ee;
}
.vdb-navigation.default.circle a.active, .vdb-navigation.default.circle a:hover {
    color: #fff;
    background-color: #a5adb8;
}

.vdb-navigation.default.circle a {
    padding: 4px 11px 6px 12px;
    color: #a5adb8;
    border: 1px solid #a5adb8;
    border-radius: 25px;
    transition: all .1s linear;
}
.vdb-navigation.default.circle a {
    padding: 4px 11px 6px 12px;
    color: #a5adb8;
    border: 1px solid #a5adb8;
    border-radius: 25px;
    transition: all .1s linear;
}

.vdb-navigation.default.circle a {
    padding: 4px 11px 6px 12px;
    color: #a5adb8;
    border: 1px solid #a5adb8;
    border-radius: 25px;
    transition: all .1s linear;
}
.vdb-navigation.default.circle a i {
    vertical-align: middle;
    font-size: 16px;
    margin-bottom: 1px;
}
/* fim paginação */





.vdb-showcase.col-4 .vdb-card {
    width: 23%;
    vertical-align: top;
    display: inline-block;
}

.vdb-card.simple {
    margin-bottom: 30px;
    width: 25%;
}

.vdb-showcase a {
    text-decoration: none;
}

.vdb-card.simple span {
    display: block;
    margin-bottom: 12px;
    font-size: 14.3px;
    text-transform: uppercase;
    /* font-family: truenoregular; */
    color: #a1adba;
}
.vdb-card.simple span a {
    color: #a1adba;
}

.vdb-card.simple h4 {
    font-family: "open_sansregular",'Open Sans',Arial,Helvetica,sans-serif;
    font-size: 12.5px;
    line-height: 20px;
    /* min-height: 150px; */
}

.vdb-card.simple h4 a {
    cursor: pointer;
    color: #3e464f;
}
</style>






        <div class="form-group row">
                <div class="content-header-options-1 row-fluid">
            </div>
        </div>
    </div>
</div>
@endsection
