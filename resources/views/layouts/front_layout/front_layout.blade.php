<!DOCTYPE html>
<html class="no-js" lang="pt-br" dir="ltr">
<head>
	<!-- Front style -->
	<link id="callCss" rel="stylesheet" href="{{ url('css/front_css/front.min.css') }}" media="screen"/>
	<link href="{{ url('css/front_css/base.css') }}" rel="stylesheet" media="screen"/>
	<link rel="stylesheet" href="{{ url('css/front_css/icones-bmp-verde.css') }}" type='text/css'/>
	<link rel="stylesheet" href="{{ url('css/front_css/font-awesome/css/font-awesome.min.css') }}" type='text/css'/>
	<base href=""/>
	<link rel="stylesheet" href="{{ url('css/front_css/custom.css') }}" type='text/css'/>
	{{-- <link rel="stylesheet" href="{{ url('css/front_css/bootstrap.min.css') }}" type='text/css'/> --}}
	<link rel="stylesheet" href="{{ url('css/front_css/style.css') }}" type='text/css'/>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<title>@yield('title', 'Página inicial')</title>
	<link href="{{ asset('images/front_images/ico/favicon1.ico') }}" rel='shortcut icon'/>
	{{-- <script type="application/json" class="joomla-script-options new">{"csrf.token":"c50ee43b98f577753931d0543aec93ea","system.paths":{"root":"","base":""}}</script> --}}
	{{-- <link href="https://biblioteca.ufam.edu.br/component/search/?Itemid=101&amp;format=opensearch" rel="search" title="Buscar biblioteca" type="application/opensearchdescription+xml"/> --}}
	{{-- <script src="/components/com_k2/js/k2.js?v2.6.8&amp;sitepath=/" type="text/javascript"></script> --}}
	{{-- <script language="javascript">function sizeFont(elem,acao){var tamInic=12;var tamMin=4;var tamMax=40;if(document.getElementById(elem).style.fontSize==""){var tamFonte=tamInic;}else{var tamFonte=parseInt(document.getElementById(elem).style.fontSize);}switch(acao){case'+':if(tamFonte<tamMax)document.getElementById(elem).style.fontSize=(tamFonte+2)+"px";break;case'-':if(tamFonte>tamMin)document.getElementById(elem).style.fontSize=(tamFonte-2)+"px";break;case'default':document.getElementById(elem).style.fontSize=(tamFonte=16)+"px";break;}}</script> --}}
	{{-- <link href="/components/com_k2/css/k2.css" rel="stylesheet" type="text/css"/> --}}

	<link href="{{ url('css/front_css/fontes.css') }}" rel='stylesheet' type='text/css'>
	<link href="{{ url('css/front_css/mod_banners/css/banner-rotativo-home.css') }}" rel="stylesheet" type="text/css"/>
	<script src="{{ url('js/front_js/jquery.min.js') }}" type="text/javascript"></script>
	<script src="{{ url('js/front_js/jquery-noconflict.js') }}" type="text/javascript"></script>
	<script src="{{ url('js/front_js/jquery-migrate.min.js') }}" type="text/javascript"></script>
	<script src="{{ url('js/front_js/mod_banners/banner-rotativo-home.js') }}" type="text/javascript"></script>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
	<div id="google_translate_element2"></div>
	<script type="text/javascript"></script>
	{{-- <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script> --}}
	{{-- <style type="text/css">#goog-gt-tt{display:none!important}.goog-te-banner-frame{display:none!important}.goog-te-menu-value:hover{text-decoration:none!important}body{top:0!important}#google_translate_element2{display:none!important}</style> --}}
</head>
<div id="conteudo">
<body class="font-lato">


{{-- 
	<div id="root">
		<main class="drift-widget-chat-layout" role="main" aria-live="polite">
			<style>
				.drift-widget-chat-wrapper.keyboard-focused {
				box-shadow:  0 0 0 2px #50626a;
				border-radius:4px;
          }
			</style>
			<div class="drift-widget-preload-fonts" aria-hidden="true">
				<span>A</span>
				<strong>B</strong>
			</div>
			<div class="drift-widget-chat-wrapper drift-widget-chat-wrapper__open" tabindex="0">
				<header class="drift-widget-header drift-widget-header--collapsed"> 
					<div class="drift-widget-header-top-line" style="background: rgb(80, 98, 106); color: rgb(255, 255, 255);">
					</div>
					<div class="drift-widget-header--content">
						<div class="drift-widget-greeting">
							<div class="drift-widget-greeting-agent-header">
								<span>drift-widget-greeting-recipient-name</span>
								<div class="drift-widget-recipient-avatar">
									<div class="drift-widget-avatar" style="background-image: url("https://driftt.imgix.net/https%3A%2F%2Fdriftt.imgix.net%2Fhttps%253A%252F%252Fs3.amazonaws.com%252Fcustomer-api-avatars-prod%252F1854863%252Fdc99a71317e447098145742daf871fc3mt2z8g5ir7s7%3Ffit%3Dmax%26fm%3Dpng%26h%3D200%26w%3D200%26s%3D55ecaa97789772e200d996984cbd23d5?fit=max&fm=png&h=200&w=200&s=ea7aa20ea7dffab85eef86664bafcfed");">
									</div>	
								</div>
							</div>
							<div class="drift-widget-welcome-message-content">
								<div>
									<div class="drift-welcome-message-content--body">Como podemos ajudar? Estamos aqui!</div>
								</div>
							</div>
						</div>
					</div>
				</header>
				<div class="drift-widget-conversation-history" aria-hidden="true">
					<style>

					</style>
				</div>
			</div>
		</main>
	</div>
 --}}








@include('layouts.front_layout.front_header')
	<div class="row-fluid">
		<div id="navigation" class="span3">
			<a href="#" class="visible-phone visible-tablet mainmenu-toggle btn">
@include('layouts.front_layout.front_sidebar')
@yield('content')
<div id="content" class="span9">
	<section id="content-section">
{{-- @include('layouts.front_layout.front_main') --}}
{{-- 
 <div class="row-fluid module ">
<div class="outstanding-header">  --}}
{{-- @include('layouts.front_layout.front_section') --}}
</main>
@include('layouts.front_layout.front_footer')
<!-- scripts principais do template -->
<script src="{{ url('js/front_js/bootstrap.min.js') }}" type="text/javascript"></script><noscript>&nbsp;<!-- item para fins de acessibilidade --></noscript>
<script src="{{ url('js/front_js/jquery.cookie.js') }}" type="text/javascript"></script><noscript>&nbsp;<!-- item para fins de acessibilidade --></noscript>
<script src="{{ url('js/front_js/template.js') }}" type="text/javascript"></script><noscript>&nbsp;<!-- item para fins de acessibilidade --></noscript>
<script src="{{ url('js/front_js/verde.js') }}" type="text/javascript"></script><noscript>&nbsp;<!-- item para fins de acessibilidade --></noscript>
{{-- <script src="{{ url('js/front_js/jquery.lightbox-0.5.js') }}"></script> --}}

</body>
	</div>
</html>
