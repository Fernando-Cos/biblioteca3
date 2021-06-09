{{-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Index | Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- Front style -->
	<link id="callCss" rel="stylesheet" href="{{ url('css/front_css/front.min.css') }}" media="screen"/>
	<link href="{{ url('css/front_css/base.css') }}" rel="stylesheet" media="screen"/>
	<!-- Front style responsive -->
	<link href="{{ url('css/front_css/front-responsive.min.css') }}" rel="stylesheet"/>
	<link href="{{ url('css/front_css/font-awesome.css') }}" rel="stylesheet" type="text/css">
	<!-- Google-code-prettify -->
	<link href="{{ url('js/front_js/google-code-prettify/prettify.css') }}" rel="stylesheet"/>
	<!-- fav and touch icons -->
	<link rel='shortcut icon' href="{{ asset('images/front_images/ico/favicon1.ico') }}">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('images/front_images/ico/apple-touch-icon-144-precomposed.png') }}">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('images/front_images/ico/apple-touch-icon-114-precomposed.png') }}">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('images/front_images/ico/apple-touch-icon-72-precomposed.png') }}">
	<link rel="apple-touch-icon-precomposed" href="{{ asset('images/front_images/ico/apple-touch-icon-57-precomposed.png') }}">
	<style type="text/css" id="enject"></style>
</head>
<body>
@include('layouts.front_layout.front_header') --}}
<!-- Header End====================================================================== -->
	{{-- @if (isset($page_name) && $page_name=="index")
	
	@endif --}}
{{-- <div id="mainBody">
	<div class="container">
		<div class="row">
			<!-- Sidebar ================================================== -->
            @include('layouts.front_layout.front_sidebar')
		
			<!-- Sidebar end=============================================== -->
			@yield('content')
		</div>
	</div>
</div> --}}
<!-- Footer ================================================================== -->
{{-- @include('layouts.front_layout.front_footer')
<!-- Placed at the end of the document so the pages load faster ============================================= -->
<script src="{{ url('js/front_js/jquery.js') }}" type="text/javascript"></script>
<script src="{{ url('js/front_js/front.min.js') }}" type="text/javascript"></script>
<script src="{{ url('js/front_js/google-code-prettify/prettify.js') }}"></script>
<script src="{{ url('js/front_js/front.js') }}"></script>
<script src="{{ url('js/front_js/jquery.lightbox-0.5.js') }}"></script>
</body>
</html> --}}


<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" class="no-js" lang="pt-br" dir="ltr">
<head>
	<!-- Front style -->
	<link id="callCss" rel="stylesheet" href="{{ url('css/front_css/front.min.css') }}" media="screen"/>
	<link href="{{ url('css/front_css/base.css') }}" rel="stylesheet" media="screen"/>
	<link rel="stylesheet" href="/templates/padraogoverno01/css/icones-bmp-verde.css" type='text/css'/>
	<link rel="stylesheet" href="/templates/padraogoverno01/font-awesome/css/font-awesome.min.css" type='text/css'/>

	<base href="https://biblioteca.ufam.edu.br/"/>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title>Página inicial</title>
	<link href="/templates/padraogoverno01/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon"/>
	<link href="https://biblioteca.ufam.edu.br/component/search/?Itemid=101&amp;format=opensearch" rel="search" title="Buscar biblioteca" type="application/opensearchdescription+xml"/>
	<link href="/components/com_k2/css/k2.css" rel="stylesheet" type="text/css"/>
	<link href="https://biblioteca.ufam.edu.br/templates/padraogoverno01/html/mod_banners/css/banner-rotativo-home.css" rel="stylesheet" type="text/css"/>
	<script type="application/json" class="joomla-script-options new">{"csrf.token":"c50ee43b98f577753931d0543aec93ea","system.paths":{"root":"","base":""}}</script>
	<script src="/media/jui/js/jquery.min.js?42c3e03fc397565a413664a287fa9ba8" type="text/javascript"></script>
	<script src="/media/jui/js/jquery-noconflict.js?42c3e03fc397565a413664a287fa9ba8" type="text/javascript"></script>
	<script src="/media/jui/js/jquery-migrate.min.js?42c3e03fc397565a413664a287fa9ba8" type="text/javascript"></script>
	<script src="/components/com_k2/js/k2.js?v2.6.8&amp;sitepath=/" type="text/javascript"></script>
	<script src="https://biblioteca.ufam.edu.br/templates/padraogoverno01/html/mod_banners/js/banner-rotativo-home.js" type="text/javascript"></script>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
        		<link href='https://biblioteca.ufam.edu.br/templates/padraogoverno01/css/fontes.css' rel='stylesheet' type='text/css'>
			<script language="javascript">function sizeFont(elem,acao){var tamInic=12;var tamMin=4;var tamMax=40;if(document.getElementById(elem).style.fontSize==""){var tamFonte=tamInic;}else{var tamFonte=parseInt(document.getElementById(elem).style.fontSize);}switch(acao){case'+':if(tamFonte<tamMax)document.getElementById(elem).style.fontSize=(tamFonte+2)+"px";break;case'-':if(tamFonte>tamMin)document.getElementById(elem).style.fontSize=(tamFonte-2)+"px";break;case'default':document.getElementById(elem).style.fontSize=(tamFonte=16)+"px";break;}}</script>
	<h2 class="hide">Seletor idioma</h2>		
	<script type="text/javascript">//<![CDATA[
function GTranslateGetCurrentLang(){var keyValue=document.cookie.match('(^|;) ?googtrans=([^;]*)(;|$)');return keyValue?keyValue[2].split('/')[2]:null;}function GTranslateFireEvent(element,event){try{if(document.createEventObject){var evt=document.createEventObject();element.fireEvent('on'+event,evt)}else{var evt=document.createEvent('HTMLEvents');evt.initEvent(event,true,true);element.dispatchEvent(evt)}}catch(e){}}function doGTranslate(lang_pair){if(lang_pair.value)lang_pair=lang_pair.value;if(lang_pair=='')return;var lang=lang_pair.split('|')[1];if(GTranslateGetCurrentLang()==null&&lang==lang_pair.split('|')[0])return;var teCombo;var sel=document.getElementsByTagName('select');for(var i=0;i<sel.length;i++)if(sel[i].className=='goog-te-combo')teCombo=sel[i];if(document.getElementById('google_translate_element2')==null||document.getElementById('google_translate_element2').innerHTML.length==0||teCombo.length==0||teCombo.innerHTML.length==0){setTimeout(function(){doGTranslate(lang_pair)},500)}else{teCombo.value=lang;GTranslateFireEvent(teCombo,'change');GTranslateFireEvent(teCombo,'change')}}
//]]></script>
    	<div id="google_translate_element2"></div>
    	<script type="text/javascript">function googleTranslateElementInit2(){new google.translate.TranslateElement({pageLanguage:'pt',autoDisplay:false},'google_translate_element2');}</script>
    	<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
	<style type="text/css">#goog-gt-tt{display:none!important}.goog-te-banner-frame{display:none!important}.goog-te-menu-value:hover{text-decoration:none!important}body{top:0!important}#google_translate_element2{display:none!important}</style>
</head>
<div id="conteudo">
<body>
    <a class="hide" id="topo" href="#accessibility">Ir direto para menu de acessibilidade.</a>
    <noscript>
      <div class="error minor-font">
        Seu navegador de internet está sem suporte à JavaScript. Por esse motivo algumas funcionalidades do site podem não estar acessíveis.
      </div>
    </noscript>
    <!-- barra do governo -->
{{-- <div id="barra-brasil">
	<div id="barra-brasil" style="background:#7F7F7F; height: 20px; padding:0 0 0 10px;display:block;"> 
	<ul id="menu-barra-temp" style="list-style:none;">
		<li style="display:inline; float:left;padding-right:10px; margin-right:10px; border-right:1px solid #EDEDED"><a href="http://brasil.gov.br" style="font-family:sans,sans-serif; text-decoration:none; color:white;">Portal do Governo Brasileiro</a></li> 
		<li><a style="font-family:sans,sans-serif; text-decoration:none; color:white;" href="http://epwg.governoeletronico.gov.br/barra/atualize.html">Atualize sua Barra de Governo</a></li>
	</ul>
	</div>
</div> --}}
<!-- fim barra do governo -->
<div class="layout">
	<header>
		<div class="container">
			<div class="row-fluid accessibility-language-actions-container">
				<!-- fim div.span6 -->
				<div class="span6 language-and-actions-container">
		<h2 class="hide">Opções de acessibilidade</h2>
<ul class="pull-right" id="portal-siteactions">
<li class="item-140"><a href="/acessibilidade.html" accesskey="5">Acessibilidade</a></li><li class="item-141 toggle-contraste"><a class="toggle-contraste" href="#" accesskey="6">Alto contraste</a></li><li class="item-142"><a href="/mapa-do-site.html" accesskey="7">Mapa do site</a></li></ul>
	
	<div style="text-align:right;">
		<ul id="accessibility">
			<li>
				<a href="#" onclick="sizeFont('conteudo','+');" title="Aumentar a fonte" class="flag nturl notranslate">A+</a>
			</li>
			<li>
				<a href="#" onclick="sizeFont('conteudo','default');" title="Voltar ao tamanho normal" class="flag nturl notranslate">A</a>
			</li>
			<li>
				<a href="#" onclick="sizeFont('conteudo','-');" title="Diminuir a fonte" class="flag nturl notranslate">A-</a>&nbsp;
			</li>
                        <li>
                                <a href="#" onclick="doGTranslate('pt|pt');return false;" title="Portuguese" class="flag nturl notranslate">PT</a>
                        </li>
                        <li>
                                <a href="#" onclick="doGTranslate('pt|en');return false;" title="English" class="flag nturl notranslate">EN</a>
                        </li>
                        <li>
                                <a href="#" onclick="doGTranslate('pt|es');return false;" title="Spanish" class="flag nturl notranslate">ES</a>&nbsp;
                        </li>
		</ul>
	</div>
                   </div>
                    <!-- fim div.span6 -->
                </div>
                <!-- fim .row-fluid -->
                <div class="row-fluid">
                    <div id="logo" class="span8">
                        <a href="https://biblioteca.ufam.edu.br/" title="SISTEBIB">
                                                        <img src="https://biblioteca.ufam.edu.br/images/ufam.png" alt="SISTEBIB"/>
                                                        <span class="portal-title-1">Sistema de Bibliotecas da Universidade Federal do Amazonas</span>
                            <h1 class="portal-title corto">SISTEBIB</h1>
                            <span class="portal-description">Universidade Federal do Amazonas</span>
                        </a>
                    </div>
                    <!-- fim .span8 -->
                    <div class="span4">
                        	<div id="social-icons" class="row">
    	<h2 class="hidden">Redes Sociais</h2>
    	
<ul class="pull-right">
<li class="portalredes-item item-136"><a href="https://twitter.com/twiiter"><i class="icon-twitter-sign"><span>Twitter</span></i></a></li><li class="portalredes-item item-138"><a href="http://facebook.com/facebook"><i class="icon-facebook-sign"><span>Facebook</span></i></a></li><li class="portalredes-item item-225"><a href="http://plus.google.com/google+"><i class="icon-google-plus-sign"><span>Google Plus</span></i></a></li><li class="portalredes-item item-257"><a href="http://instagram.com/instagram"><i class="icon-instagram"><span>Instagram</span></i></a></li></ul>
    </div>
		<div id="portal-searchbox" class="row">
    	<h2 class="hidden">Buscar no portal</h2>
    	<form action="/" method="post" class="pull-right">
 	<fieldset>
        <legend class="hide">Busca</legend>
        <h2 class="hidden">Buscar no portal</h2>
        <div class="input-append">
        	<label for="portal-searchbox-field" class="hide">Busca: </label>
        	<input type="text" id="portal-searchbox-field" class="searchField" placeholder="Buscar no portal" title="Buscar no portal" name="searchword">       
            <button type="submit" class="btn searchButton"><span class="hide">Buscar</span><i class="icon-search"></i></button>
		</div>
		<input type="hidden" name="task" value="search"/>
		<input type="hidden" name="option" value="com_search"/>
		<input type="hidden" name="Itemid" value="101"/>
	</fieldset>
</form>
    </div>
	
                    </div>
                    <!-- fim .span4 -->
                </div>
                <!-- fim .row-fluid -->
            </div>
            <!-- fim div.container -->
            <div class="sobre">
                <div class="container">
                    
                </div>
                <!-- .container -->
            </div>
            <!-- fim .sobre -->
        </header>
        <main>
            <div class="container">
                	<div class="row-fluid">
		<section>
						

<div class="custom">
	<center><a href="https://pergamum.ufam.edu.br/" target="_blank" rel="noopener noreferrer"><img src="/images/imagens_menu/link_superior/pergamumcat.png" width="155"/></a><a href="/deposito-de-teses-e-dissertacoes.html"><img src="/images/imagens_menu/link_superior/depteses.png" width="155"/></a><a href="/deposito-de-trabalho-de-conclusao-de-curso.html"><img src="/images/imagens_menu/link_superior/deptcc.png" width="155"/></a><a href="/elaboracao-de-ficha-catalografica.html"><img src="/images/imagens_menu/link_superior/fichacat.png" width="155"/></a><a href="/nada-consta.html"><img src="/images/imagens_menu/link_superior/nadaconsta2.png" width="155"/></a><a href="/contatos.html"><img src="/images/imagens_menu/link_superior/contatos.png" width="155"/></a></center></div>
		</section>
	</div>
		<div class="row-fluid">
		<section>
						<p>
<br>
<br>
</p>		</section>
	</div>
	
                <div class="row-fluid">
                                        <div id="navigation" class="span3">
                        <a href="#" class="visible-phone visible-tablet mainmenu-toggle btn"><i class="icon-list"></i>&nbsp;Menu</a>
                        <section id="navigation-section">
                            <span class="hide">Início do menu principal</span>
                            	<nav class="menu-de-apoio span9">
		<h2 class="hide">Menu de Relevância </h2><!-- visible-phone visible-tablet -->
		
<ul>
<li class="item-262"><a href="/"><img src="/images/SISTEBIB_logo.png" alt="LOGO"/></a></li></ul>
	</nav>
		<nav class="principal span9 closed">
		<h2>sistebib <i class="icon-chevron-up visible-phone visible-tablet pull-right"></i></h2><!-- visible-phone visible-tablet -->
		
<ul>
<li class="item-336"><a href="/sobre-o-sistema.html">Sobre o Sistema</a></li><li class="item-343"><a href="/missao-e-visao.html">Missão e Visão</a></li><li class="item-338"><a href="/organograma.html">Organograma</a></li><li class="item-340"><a href="/equipe.html">Equipe</a></li><li class="item-348"><a href="/normativas.html">Normativas</a></li><li class="item-350"><a href="/relatorios.html">Relatórios</a></li><li class="item-361"><a href="/contatos.html">Contatos</a></li><li class="item-296"><a href="/acesso-restrito.html">Acesso restrito</a></li></ul>
	</nav>
		<nav class="principal span9 closed">
		<h2>Apoio ao ensino <i class="icon-chevron-up visible-phone visible-tablet pull-right"></i></h2><!-- visible-phone visible-tablet -->
		
<ul>
<li class="item-291"><a href="/apresentacoes-e-materiais-de-apoio.html">Apresentações e materiais de apoio</a></li><li class="item-362"><a href="/bases-de-dados.html">Bases de dados</a></li><li class="item-323"><a href="/audiovisual.html">Criação de apresentações</a></li><li class="item-324"><a href="/criacao-de-linha-do-tempo.html">Criação de linha do tempo</a></li><li class="item-325"><a href="/criacao-de-mapas.html">Criação de mapas</a></li><li class="item-326"><a href="/craiacao-de-questionarios.html">Criação de questionários</a></li><li class="item-327"><a href="/criador-de-referencias.html"> Criador de referências</a></li><li class="item-328"><a href="/exercicios-interativos.html">Exercícios interativos</a></li><li class="item-329"><a href="/infografico.html">Infográfico</a></li><li class="item-330"><a href="/livros-e-revistas.html">Livros e revistas</a></li><li class="item-331"><a href="/mapa-mental.html">Mapa mental</a></li><li class="item-332"><a href="/marcadores-e-organizacao.html">Marcadores e organização</a></li><li class="item-333"><a href="/rede-de-aprendizagem.html">Rede de aprendizagem</a></li><li class="item-289"><a href="/treinamento.html">Treinamento</a></li><li class="item-290"><a href="/tutoriais.html">Tutoriais</a></li><li class="item-334"><a href="/verificador-de-conteudo.html">Verificador de conteúdo</a></li></ul>
	</nav>
		<nav class="principal span9 closed">
		<h2>Serviços <i class="icon-chevron-up visible-phone visible-tablet pull-right"></i></h2><!-- visible-phone visible-tablet -->
		
<ul>
<li class="item-281"><a href="/deposito-de-teses-e-dissertacoes.html">Depósito de Teses e Dissertações</a></li><li class="item-282"><a href="/deposito-de-trabalho-de-conclusao-de-curso.html">Depósito de Trabalho de Conclusão de Curso</a></li><li class="item-280"><a href="/elaboracao-de-ficha-catalografica.html">Elaboração de ficha catalográfica</a></li><li class="item-277"><a href="/politicas-de-emprestimo.html">Políticas de empréstimo</a></li><li class="item-279"><a href="/nada-consta.html">Nada consta</a></li><li class="item-312"><a href="/por-doacao.html">Doação</a></li><li class="item-360"><a href="/formularios.html">Formulários</a></li><li class="item-283"><a href="/salas-de-estudo.html">Salas de estudo</a></li><li class="item-307"><a href="/comutacao-bibliografica.html">Comutação Bibliográfica</a></li><li class="item-284"><a href="/aquisicao-de-acervos.html">Aquisição de acervos</a></li></ul>
	</nav>
		<nav class="principal span9 closed">
		<h2>Produtos <i class="icon-chevron-up visible-phone visible-tablet pull-right"></i></h2><!-- visible-phone visible-tablet -->
		
<ul>
<li class="item-287"><a href="https://tede.ufam.edu.br/" target="_blank">Biblioteca Digital de Teses e Dissertações</a></li><li class="item-286"><a href="http://riu.ufam.edu.br/" target="_blank">Repositório institucional</a></li><li class="item-285"><a href="https://pergamum.ufam.edu.br/pergamum/biblioteca/index.php" target="_blank">Pergamum - Catálogo online</a></li><li class="item-288"><a href="/publicacoes-sistebib.html">Publicações SISTEBIB</a></li></ul>
	</nav>
		<nav class="central-conteudos span9 closed">
		<h2>Mídia <i class="icon-chevron-up visible-phone visible-tablet pull-right"></i></h2><!-- visible-phone visible-tablet -->
		
<ul>
<li class="item-146"><a class="videos" href="https://www.youtube.com/channel/UCphduPeCDe3u4VtgKM0OvdA" target="_blank"><span class="icon-li icon-stack"><i class="icon-circle icon-stack-base"><span class="hide">&nbsp;</span></i><i class="icon-play icon-light"><span class="hide">&nbsp;</span></i></span>
Canal SISTEBIB</a></li></ul>
	</nav>
	
                            <span class="hide">Fim do menu principal</span>
                        </section>
                    </div>
                    <!-- fim #navigation.span3 -->
                                        <div id="content" class="span9">
                        <section id="content-section">
                            <span class="hide">Início do conteúdo da página</span>

                            
                            
                                		<div class="row-fluid module ">
							<div class="outstanding-header">			 	<h2 class="outstanding-title"><span>Sistema de Bibliotecas da Universidade Federal do Amazonas</span></h2>
			 	</div>									<div class="carousel banner-carousel slide bannergroup " id="banner-carousel-202">
<div class="carousel-inner">
	<div class="banneritem item active">
																																																																		<a href="/component/banners/click/42.html" title="TREINAMENTO: REPOSITÓRIO UFAM - RIU">
							<img src="https://biblioteca.ufam.edu.br/images/banners/BANNER_TREINA-RIU.png" alt="TREINAMENTO: REPOSITÓRIO UFAM - RIU"/>
						</a>
															<div class="faixa"></div>
			<h1>
				<a href="/component/banners/click/42.html">
					TREINAMENTO: REPOSITÓRIO UFAM - RIU				</a>
			</h1>
							<div class="clr"></div>
	</div>
	<div class="banneritem item ">
																																																																		<a href="/component/banners/click/41.html" title="Treinamentos Online de Junho de 2021">
							<img src="https://biblioteca.ufam.edu.br/images/banners/BANNER--TREINA-JUN--002.png" alt="Treinamentos Online de Junho de 2021"/>
						</a>
															<div class="faixa"></div>
			<h1>
				<a href="/component/banners/click/41.html">
					Treinamentos Online de Junho de 2021				</a>
			</h1>
							<div class="clr"></div>
	</div>
	<div class="banneritem item ">
																																																																		<a href="/component/banners/click/36.html" title="ABERTURA DO PROCESSO DE CONSULTA PARA ESCOLHA DA DIREÇÃO DA BIBLIOTECA CENTRAL DA UNIVERSIDADE FEDERAL DO AMAZONAS GESTÃO 2021-2025">
							<img src="https://biblioteca.ufam.edu.br/images/banners/PROCESSO-DE-CONSULTA.png" alt="ABERTURA DO PROCESSO DE CONSULTA PARA ESCOLHA DA DIREÇÃO DA BIBLIOTECA CENTRAL DA UNIVERSIDADE FEDERAL DO AMAZONAS GESTÃO 2021-2025"/>
						</a>
															<div class="faixa"></div>
			<h1>
				<a href="/component/banners/click/36.html">
					ABERTURA DO PROCESSO DE CONSULTA PARA ESCOLHA DA DIREÇÃO DA BIBLIOTECA CENTRAL DA UNIVERSIDADE FEDERAL DO AMAZONAS GESTÃO 2021-2025				</a>
			</h1>
							<div class="clr"></div>
	</div>
	<div class="banneritem item ">
																																																																		<a href="/component/banners/click/39.html" title="E-books Gale - Acesso até 10 de junho de 2021">
							<img src="https://biblioteca.ufam.edu.br/images/banners/Gale-site.png" alt="E-books Gale - Acesso até 10 de junho de 2021"/>
						</a>
															<div class="faixa"></div>
			<h1>
				<a href="/component/banners/click/39.html">
					E-books Gale - Acesso até 10 de junho de 2021				</a>
			</h1>
							<div class="clr"></div>
	</div>
	<div class="banneritem item ">
																																																																		<a href="/component/banners/click/38.html" title="ACESSO GRATUITO AOS JOURNALS DA APA POR 90 DIAS">
							<img src="https://biblioteca.ufam.edu.br/images/banners/APA-SITE.png" alt="ACESSO GRATUITO AOS JOURNALS DA APA POR 90 DIAS"/>
						</a>
															<div class="faixa"></div>
			<h1>
				<a href="/component/banners/click/38.html">
					ACESSO GRATUITO AOS JOURNALS DA APA POR 90 DIAS				</a>
			</h1>
							<div class="clr"></div>
	</div>
	<div class="banneritem item ">
																																																																		<a href="/component/banners/click/34.html" title="ACESSO GRATUITO AOS JOURNALS DA BIOSCIENTIFICA POR 90 DIAS">
							<img src="https://biblioteca.ufam.edu.br/images/banners/banner_principal/bioscientifica_90-dias.png" alt="ACESSO GRATUITO AOS JOURNALS DA BIOSCIENTIFICA POR 90 DIAS"/>
						</a>
															<div class="faixa"></div>
			<h1>
				<a href="/component/banners/click/34.html">
					ACESSO GRATUITO AOS JOURNALS DA BIOSCIENTIFICA POR 90 DIAS				</a>
			</h1>
							<div class="clr"></div>
	</div>
	<div class="banneritem item ">
																																																																		<a href="/component/banners/click/37.html" title="Treinamentos online do Portal CAPES">
							<img src="https://biblioteca.ufam.edu.br/images/banners/Capes-site.png" alt="Treinamentos online do Portal CAPES"/>
						</a>
															<div class="faixa"></div>
			<h1>
				<a href="/component/banners/click/37.html">
					Treinamentos online do Portal CAPES				</a>
			</h1>
							<div class="clr"></div>
	</div>
	<div class="banneritem item ">
																																																																		<a href="/component/banners/click/22.html" title="Acesse gratuitamente os journals da SIAM por 90 dias">
							<img src="https://biblioteca.ufam.edu.br/images/siam.jpg" alt="Acesse gratuitamente os journals da SIAM por 90 dias"/>
						</a>
															<div class="faixa"></div>
			<h1>
				<a href="/component/banners/click/22.html">
					Acesse gratuitamente os journals da SIAM por 90 dias				</a>
			</h1>
							<div class="clr"></div>
	</div>
	<div class="banneritem item ">
																																																																		<a href="/component/banners/click/20.html" title="Devolução de livros">
							<img src="https://biblioteca.ufam.edu.br/images/banners/banner_principal/Devoluo-de-Livros_site3.png" alt="Devolução de livros"/>
						</a>
															<div class="faixa"></div>
			<h1>
				<a href="/component/banners/click/20.html">
					Devolução de livros				</a>
			</h1>
							<div class="clr"></div>
	</div>
	<div class="banneritem item ">
																																																																		<a href="/component/banners/click/9.html" title="Bibliotecas fechadas - Informações ">
							<img src="https://biblioteca.ufam.edu.br/images/banners/banner_principal/bibliotecas-fechadas-corrigido.jpg" alt="Bibliotecas fechadas - Informações " width="746" height="423"/>
						</a>
															<div class="faixa"></div>
			<h1>
				<a href="/component/banners/click/9.html">
					Bibliotecas fechadas - Informações 				</a>
			</h1>
							<div class="clr"></div>
	</div>
	<div class="banneritem item ">
																																																																		<a href="/component/banners/click/24.html" title="LIVE ACOLHIDA SISTEBIB 2021">
							<img src="https://biblioteca.ufam.edu.br/images/banners/ACOLHIDA--SISTEBIB_CONFERE-JA_SITE.png" alt="LIVE ACOLHIDA SISTEBIB 2021"/>
						</a>
															<div class="faixa"></div>
			<h1>
				<a href="/component/banners/click/24.html">
					LIVE ACOLHIDA SISTEBIB 2021				</a>
			</h1>
							<div class="clr"></div>
	</div>
	<div class="banneritem item ">
																																																																		<a href="/component/banners/click/12.html" title="Agendamento de Treinamentos on-line">
							<img src="https://biblioteca.ufam.edu.br/images/banners/banner_principal/AGENDAMENTO-TREINAMENTOS-NOVO.jpg" alt="Agendamento de Treinamentos on-line" width="746" height="423"/>
						</a>
															<div class="faixa"></div>
			<h1>
				<a href="/component/banners/click/12.html">
					Agendamento de Treinamentos on-line				</a>
			</h1>
							<div class="clr"></div>
	</div>
	<div class="banneritem item ">
																																																																		<a href="/component/banners/click/2.html" title="Documentos de acesso restrito BDTD">
							<img src="https://biblioteca.ufam.edu.br/images/banners/banner_principal/TESES-RESTRICAO-NOVO.jpg" alt="Depósito de teses e dissertações com restrição de acesso" width="746" height="423"/>
						</a>
															<div class="faixa"></div>
			<h1>
				<a href="/component/banners/click/2.html">
					Depósito de teses e dissertações com restrição de acesso				</a>
			</h1>
							<div class="clr"></div>
	</div>
	<div class="banneritem item ">
																																																																		<a href="/component/banners/click/13.html" title="E-books ScienceDirect">
							<img src="https://biblioteca.ufam.edu.br/images/banners/banner_principal/Science-novo.jpg" alt="E-books ScienceDirect" width="746" height="423"/>
						</a>
															<div class="faixa"></div>
			<h1>
				<a href="/component/banners/click/13.html">
					E-books ScienceDirect				</a>
			</h1>
							<div class="clr"></div>
	</div>
	<div class="banneritem item ">
																																																																		<a href="/component/banners/click/16.html" title="Bases de E-books gratuitos">
							<img src="https://biblioteca.ufam.edu.br/images/banners/banner_principal/bases-ebooks-novo.jpg" alt="Bases de E-books gratuitos" width="746" height="423"/>
						</a>
															<div class="faixa"></div>
			<h1>
				<a href="/component/banners/click/16.html">
					Bases de E-books gratuitos				</a>
			</h1>
							<div class="clr"></div>
	</div>
	<div class="banneritem item ">
																																																																		<a href="/component/banners/click/11.html" title="Guia de Fontes de Informação">
							<img src="https://biblioteca.ufam.edu.br/images/banners/banner_principal/GUIA-SETORIAIS-NOVO.jpg" alt="Guia de Fontes de Informação" height="423"/>
						</a>
															<div class="faixa"></div>
			<h1>
				<a href="/component/banners/click/11.html">
					Guia de Fontes de Informação				</a>
			</h1>
							<div class="clr"></div>
	</div>
	<div class="banneritem item ">
																																																																		<a href="/component/banners/click/7.html" title="Canal youtube SISTEBIB">
							<img src="https://biblioteca.ufam.edu.br/images/banners/banner_principal/Yotube-novo.jpg" alt="Canal youtube SISTEBIB" width="746" height="423"/>
						</a>
															<div class="faixa"></div>
			<h1>
				<a href="/component/banners/click/7.html">
					Canal youtube SISTEBIB				</a>
			</h1>
							<div class="clr"></div>
	</div>
	<div class="banneritem item ">
																																																																		<a href="/component/banners/click/15.html" title="Bases de dados gratuitas sobre coronavírus">
							<img src="https://biblioteca.ufam.edu.br/images/banners/banner_principal/BASES-COVID-NOVO.jpg" alt="Bases de dados gratuitas sobre coronavírus" width="746" height="423"/>
						</a>
															<div class="faixa"></div>
			<h1>
				<a href="/component/banners/click/15.html">
					Bases de dados gratuitas sobre coronavírus				</a>
			</h1>
							<div class="clr"></div>
	</div>
	
</div>
<ol class="carousel-indicators carousel-indicators-custom">
			<li data-slide-to="0" data-target="#banner-carousel-202" class="active"><a href="#" title="TREINAMENTO: REPOSITÓRIO UFAM - RIU">0</a></li>
			<li data-slide-to="1" data-target="#banner-carousel-202" class=""><a href="#" title="Treinamentos Online de Junho de 2021">1</a></li>
			<li data-slide-to="2" data-target="#banner-carousel-202" class=""><a href="#" title="ABERTURA DO PROCESSO DE CONSULTA PARA ESCOLHA DA DIREÇÃO DA BIBLIOTECA CENTRAL DA UNIVERSIDADE FEDERAL DO AMAZONAS GESTÃO 2021-2025">2</a></li>
			<li data-slide-to="3" data-target="#banner-carousel-202" class=""><a href="#" title="E-books Gale - Acesso até 10 de junho de 2021">3</a></li>
			<li data-slide-to="4" data-target="#banner-carousel-202" class=""><a href="#" title="ACESSO GRATUITO AOS JOURNALS DA APA POR 90 DIAS">4</a></li>
			<li data-slide-to="5" data-target="#banner-carousel-202" class=""><a href="#" title="ACESSO GRATUITO AOS JOURNALS DA BIOSCIENTIFICA POR 90 DIAS">5</a></li>
			<li data-slide-to="6" data-target="#banner-carousel-202" class=""><a href="#" title="Treinamentos online do Portal CAPES">6</a></li>
			<li data-slide-to="7" data-target="#banner-carousel-202" class=""><a href="#" title="Acesse gratuitamente os journals da SIAM por 90 dias">7</a></li>
			<li data-slide-to="8" data-target="#banner-carousel-202" class=""><a href="#" title="Devolução de livros">8</a></li>
			<li data-slide-to="9" data-target="#banner-carousel-202" class=""><a href="#" title="Bibliotecas fechadas - Informações ">9</a></li>
			<li data-slide-to="10" data-target="#banner-carousel-202" class=""><a href="#" title="LIVE ACOLHIDA SISTEBIB 2021">10</a></li>
			<li data-slide-to="11" data-target="#banner-carousel-202" class=""><a href="#" title="Agendamento de Treinamentos on-line">11</a></li>
			<li data-slide-to="12" data-target="#banner-carousel-202" class=""><a href="#" title="Documentos de acesso restrito BDTD">12</a></li>
			<li data-slide-to="13" data-target="#banner-carousel-202" class=""><a href="#" title="E-books ScienceDirect">13</a></li>
			<li data-slide-to="14" data-target="#banner-carousel-202" class=""><a href="#" title="Bases de E-books gratuitos">14</a></li>
			<li data-slide-to="15" data-target="#banner-carousel-202" class=""><a href="#" title="Guia de Fontes de Informação">15</a></li>
			<li data-slide-to="16" data-target="#banner-carousel-202" class=""><a href="#" title="Canal youtube SISTEBIB">16</a></li>
			<li data-slide-to="17" data-target="#banner-carousel-202" class="last"><a href="#" title="Bases de dados gratuitas sobre coronavírus">17</a></li>
</ol>
</div>
	
					</div>
				<div class="row-fluid module ">
							<div class="outstanding-header">			 	<h2 class="outstanding-title"><span>Bases de Dados</span></h2>
			 	</div>									

<div class="custom">
	<p style="text-align: center;"> <a href="/images/doc/Tutorial-bases-de-dados-de-acesso-restrito.jpg"><img src="/images/gedweb-bases.jpg" alt=""/></a>   <a href="http://www-periodicos-capes-gov-br.ez2.periodicos.capes.gov.br/"><img src="/images/periodicos-base.jpg" alt=""/></a>   <a href="http://ufam.dotlib.com.br/springer/index.html"><img src="/images/springer-bases.jpg" alt=""/></a>   <a href="/images/doc/Tutorial-bases-de-dados-de-acesso-restrito.jpg"><img src="/images/lectio-bases.jpg" alt=""/></a>   <a href="https://pergamum.ufam.edu.br/"><img src="/images/pergamum-bases.jpg" alt=""/></a></p>
<p style="text-align: center;">   <a href="http://riu.ufam.edu.br/"><img src="/images/riu-bases.jpg" alt=""/></a>   <a href="http://tede.ufam.edu.br/"><img src="/images/tede-bases.jpg" alt=""/></a>   <a href="http://www.periodicos.ufam.edu.br/"><img src="/images/peri-ufam-bases.jpg" alt=""/></a>   <a href="http://oasisbr.ibict.br/vufind/"><img src="/images/oasis-bases.jpg" alt=""/></a>   <a href="https://catalogodeteses.capes.gov.br/"><img src="/images/catalogo-bases.jpg" alt=""/></a></p>
<p style="text-align: center;">   <a href="http://www.cnen.gov.br/centro-de-informacoes-nucleares/livre"><img src="/images/livre-bases.jpg" alt=""/></a>   <a href="https://www.rcaap.pt/"><img src="/images/rcaap-bases.jpg" alt=""/></a>   <a href="http://redenorte.ufam.edu.br/"><img src="/images/riaa-bases.jpg" alt=""/></a>   <a href="http://www.lareferencia.info/pt/"><img src="/images/la-referencia-bases.jpg" alt=""/></a> </p></div>
	
					</div>
				<div class="row-fluid module module-box-00">
							<div class="outstanding-header">			 	<h2 class="outstanding-title"><span>Últimos notícias</span></h2>
			 	</div>									<div class="tile-collection">
					<div class="tileItem">
			<h3>
				<a href="/ultimas-noticias/163-pesquisa-em-bases-de-dados-academicas-e-cientificas-via-plataformas-ebscohost.html">
					PESQUISA EM BASES DE DADOS ACADÊMICAS E CIENTÍFICAS VIA PLATAFORMAS EBSCOHOST 				</a>
			</h3>			
						
				<p>10/05/2021 13h33</p>
					</div>
					<div class="tileItem">
			<h3>
				<a href="/ultimas-noticias/162-acesso-gratuito-aos-journals-da-bioscientifica-por-90-dias.html">
					ACESSO GRATUITO AOS JOURNALS DA BIOSCIENTIFICA POR 90 DIAS				</a>
			</h3>			
						
				<p>10/05/2021 11h40</p>
					</div>
					<div class="tileItem">
			<h3>
				<a href="/ultimas-noticias/161-treinamento-base-de-dados-web-of-science-endnot-online.html">
					TREINAMENTO BASE DE DADOS WEB OF SCIENCE + ENDNOT ONLINE 				</a>
			</h3>			
						
				<p>30/04/2021 14h36</p>
					</div>
					<div class="tileItem">
			<h3>
				<a href="/ultimas-noticias/160-treinamentos-sistebib-para-o-mes-de-maio.html">
					Treinamentos SISTEBIB para o mês de Maio				</a>
			</h3>			
						
				<p>30/04/2021 14h35</p>
					</div>
					<div class="tileItem">
			<h3>
				<a href="/ultimas-noticias/159-inauguracao-biblioteca-setorial-sul.html">
					INAUGURAÇÃO BIBLIOTECA SETORIAL SUL				</a>
			</h3>			
						
				<p>29/04/2021 19h37</p>
					</div>
	</div>
	<div class="outstanding-footer">
		<a href="/ultimas-noticias.html" class="outstanding-link">
							<span class="text">Acesse a lista completa</span>
						<span class="icon-box">                                          
		      <i class="icon-angle-right icon-light"><span class="hide">&nbsp;</span></i>
		    </span>
		</a>	
	</div>
	
					</div>
		

                            
                            <span class="hide">Fim do conteúdo da página</span>
                        </section>
                    </div>
                    <!-- fim #content.span9 -->
                </div>
                <!-- fim .row-fluid -->
            </div>
            <!-- fim .container -->
        </main>
        <footer>
            <div class="footer-atalhos">
                <div class="container">
                    <div class="pull-right voltar-ao-topo"><a href="#portal-siteactions"><i class="icon-chevron-up"></i>&nbsp;Voltar para o topo</a></div>
                </div>
            </div>
            <div class="container container-menus">
                <div id="footer" class="row footer-menus">
                    <span class="hide">Início da navegação de rodapé</span>
                    	
		<div class="">		
			<nav class="row  nav">
								<script type="text/javascript">var Tawk_API=Tawk_API||{},Tawk_LoadStart=new Date();(function(){var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];s1.async=true;s1.src='https://embed.tawk.to/58a35f5fbd8b9009f77fc86b/default';s1.charset='UTF-8';s1.setAttribute('crossorigin','*');s0.parentNode.insertBefore(s1,s0);})();</script>			</nav>					
		</div>
	
		
		<div class="span3">		
			<nav class="row principal nav">
				 			
				<h2>Serviços</h2>
								
<ul>
<li class="item-281"><a href="/deposito-de-teses-e-dissertacoes.html">Depósito de Teses e Dissertações</a></li><li class="item-282"><a href="/deposito-de-trabalho-de-conclusao-de-curso.html">Depósito de Trabalho de Conclusão de Curso</a></li><li class="item-280"><a href="/elaboracao-de-ficha-catalografica.html">Elaboração de ficha catalográfica</a></li><li class="item-277"><a href="/politicas-de-emprestimo.html">Políticas de empréstimo</a></li><li class="item-279"><a href="/nada-consta.html">Nada consta</a></li><li class="item-312"><a href="/por-doacao.html">Doação</a></li><li class="item-360"><a href="/formularios.html">Formulários</a></li><li class="item-283"><a href="/salas-de-estudo.html">Salas de estudo</a></li><li class="item-307"><a href="/comutacao-bibliografica.html">Comutação Bibliográfica</a></li><li class="item-284"><a href="/aquisicao-de-acervos.html">Aquisição de acervos</a></li></ul>
			</nav>					
		</div>
	
		
		<div class="span3">		
			<nav class="row redes-sociais nav">
				 			
				<h2>Redes Sociais</h2>
								
<ul>
<li class="item-136"><a href="https://twitter.com/twiiter">Twitter</a></li><li class="item-138"><a href="http://facebook.com/facebook">Facebook</a></li><li class="item-225"><a href="http://plus.google.com/google+">Google Plus</a></li><li class="item-257"><a href="http://instagram.com/instagram">Instagram</a></li></ul>
			</nav>					
		</div>
	
		
		<div class="span3">		
			<nav class="row sobre nav">
				 			
				<h2>Sobre o site</h2>
								
<ul>
<li class="item-172"><a href="/acessibilidade.html">Acessibilidade</a></li><li class="item-173"><a href="/mapa-do-site.html">Mapa do site</a></li></ul>
			</nav>					
		</div>
	
	
                    <span class="hide">Fim da navegação de rodapé</span>
                </div>
                <!-- fim .row -->
            </div>
            <!-- fim .container -->
            <div class="footer-logos">
                <div class="container">
                                            <a href="http://www.acessoainformacao.gov.br/" class="logo-acesso pull-left"><img src="/templates/padraogoverno01/images/acesso-a-informacao.png" alt="Acesso a Informação"></a>
                                                                <!-- separador para fins de acessibilidade --><span class="hide">&nbsp;</span><!-- fim separador para fins de acessibilidade -->
                        <a href="http://www.brasil.gov.br/" class="brasil pull-right"><img src="/templates/padraogoverno01/images/brasil.png" alt="Brasil - Governo Federal"></a>
                                    </div>
            </div>
            <div class="footer-ferramenta">
                <div class="container">
                    Centro de Tecnologia da Informação e Comunicação - <a href="https://ctic.ufam.edu.br/">CTIC</a> / <a href="https://ufam.edu.br/">UFAM</a>                </div>
            </div>
            <div class="footer-atalhos visible-phone">
                <div class="container">
                    <span class="hide">Fim do conteúdo da página</span>
                    <div class="pull-right voltar-ao-topo"><a href="#portal-siteactions"><i class="icon-chevron-up"></i>&nbsp;Voltar para o topo</a></div>
                </div>
            </div>
        </footer>
    </div>
    <!-- fim div#wrapper -->
    <!-- scripts principais do template -->
    	<script src="/templates/padraogoverno01/bootstrap/js/bootstrap.min.js" type="text/javascript"></script><noscript>&nbsp;<!-- item para fins de acessibilidade --></noscript>
	    <script src="/templates/padraogoverno01/js/jquery.cookie.js" type="text/javascript"></script><noscript>&nbsp;<!-- item para fins de acessibilidade --></noscript>
	    <script src="/templates/padraogoverno01/js/template.js" type="text/javascript"></script><noscript>&nbsp;<!-- item para fins de acessibilidade --></noscript>
		<script src="https://barra.brasil.gov.br/barra.js?cor=verde" type="text/javascript"></script><noscript>&nbsp;<!-- item para fins de acessibilidade --></noscript>
		        <!-- debug -->
    </body>
</div>
</html>
