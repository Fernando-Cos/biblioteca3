@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header"></div>
    <div class="card-body">
            <div class="form-group row">
                {{-- fim da navegação sppan 3  --}}
        <div id="content" class="span9 internas">
            <section id="content-section">
                <span class="hide">Início do conteúdo da página</span>
            <div class="row-fluid">
        <div class="item-page">
    <h1 class="documentFirstHeading">
        <a href="">Boletim Informativo - Ses - AM</a>
    </h1>
    <ul class="actions"></ul>
    <div class="content-header-options-1 row-fluid">
        <div class="documentByLine span7">
            <span class="documentPublished">Publicado: Quinta, 12 de Março de 2020, 08h09</span>
            <span class="separator">|</span>			
            <span class="documentModified">Última atualização em Quarta, 03 de Março de 2021, 11h32</span>
            <span class="separator">|</span>			
            <span class="documentHits">Acessos: 2739</span></div>
            <div class="btns-social-like span5 hide">
                <div class="pull-left googleplus">
                </div>
            <div class="pull-left twitter">
                <!-- botão twitter -->
                <a href="https://twitter.com/share" class="twitter-share-button" data-via="portalbrasil" data-lang="pt">Tweetar</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','twitter-wjs');</script><noscript>&nbsp;<!-- item para fins de acessibilidade --></noscript>
                <!-- fim botão twitter -->	
            </div>
            <div class="pull-left facebook">
                <!-- botão facebook -->
                <div class="fb-like" data-href="http://www.brasil.gov.br" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
                <div id="fb-root"></div>
                <script>(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=509544779073047";fjs.parentNode.insertBefore(js,fjs);}(document,'script','facebook-jssdk'));</script><noscript>&nbsp;<!-- item para fins de acessibilidade --></noscript>
                <!-- fim botão facebook -->	
            </div>
        </div>		
    </div>
<!-- fim .content-header-options-1 -->
<div class="direct-image direct-image-horz">
    <div class="image-box">
        <img class="img-polaroid img-fulltext-left " title="" alt="imagem sem descrição."
        src="{{ asset('images/front_images/boletim-infor.png')}}" data-pagespeed-url-hash="" onload="">
    </div>
</div>
{{-- table --}}
<table class="tabelaConsultas">
    <thead>
        <tr>
            <th style="width: 20px; min-width: 20px;">
            </th>
            <th id="thCabecalho1" style="" class="ordenacao1" onclick="">Boletim
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
    <p style="text-align: justify">FLIEEN 02-04: Com o intuito de trazer cada vez mais informações para a comunidade 
    acadêmica no que diz respeito as atividades desenvolvidas pelo Ses - AM, lançamos o boletim informativo "FALA SES-AM":</p>
</tbody>
</table>
{{-- fim table --}}

<p style="text-align: left;">
    <span style="font-size: 14pt; background-color: #970c10; border-radius: 10px;">
        <a href="" style="background-color: #970c10; color: #ffffff; border-radius: 10px; margin: 40px;">Edições 2020</a></span></p>
<p style="text-align: left;">
    <span style="font-size: 14pt; background-color: #970c10;  border-radius: 10px;">
        <a href="" style="background-color: #970c10; color: #ffffff; border-radius: 10px; margin: 40px;">Edições 2021</a></span></p>
        
        <div class="test" style="float: right;width: 60%;margin-block: -11%;">
            <img src="{{ asset('images/front_images/infor-logo.svg')}}" alt="">
        </div>    
        <p>&nbsp;</p>



{{-- Inicio do alerta p/ questionario --}}
<div class="alert alert-info" role="alert">
    Não esqueça de responder o questionário avaliativo do nosso boletim (presente no final de cada boletim) para que possamos melhorar a cada nova edição!
  </div>
</div>
{{-- Fim do alerta p/ questionario --}}


<div class="below-content">
    <div class="line">registrado em:<span>
        <a class="link-categoria" rel="tag" href="/servidor/62-departamento-de-assistencia-estudantil-daest.html">
            Colocar o nome do departamento aqui</a></span>
        </div>
    </div>
</div>
<span class="hide">Fim do conteúdo da página</span>
</section>
</div>
<div class="content-header-options-1 row-fluid">
</div>
</div>
</div>
</div>
@endsection
