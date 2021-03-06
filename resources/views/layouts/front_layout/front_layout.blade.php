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
	<link rel="stylesheet" href="{{ url('css/front_css/bootstrap.min.css') }}" type='text/css'/>
	<link rel="stylesheet" href="{{ url('css/front_css/style.css') }}" type='text/css'/>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css">

	<title>@yield('title') | Ses - AM</title>
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
	
	{{-- ChatBot --}}
	<link rel="stylesheet" type="text/css" href="{{ url('css/front_css/jquery.convform.css')}}">
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text-javascript"></script>
	{{-- ChatBot --}}
	</head>
<div id="conteudo">
<body class="font-lato">
	{{-- chatbot --}}
	<div class="chat_icon">
		<i class="fa fa-commenting" aria-hidden="true"></i>
	</div>
	<div class="chat_box" style="bottom: 11%;">
		<div class="conv-form-wrapper">
		<form action="" method="GET" class="hidden">
			<select name="category" data-conv-question="Ol??! Por aqui vo???? pode estar tirando suas duvidas! (EM TESTE)">
				<option value="webDevelopment">Dev Sistema?</option>
				<option value="digitalMarketing">Marketing Digital?</option>
			</select>
			<div data-conv-fork="category">
				<div data-conv-case="webDevelopment">
					 <input type="text" name="domain_name" data-conv-question="por favor, me diga seu nome de dom??nio.">
				</div>
				<div data-conv-case="digitalMarketing">
					<input type="text" name="company_name" data-conv-question="por favor, me diga o nome da sua compania">
			   </div>
			</div>
			<div data-conv-case="digitalMarketing">
				<input type="text" name="name" data-conv-question="Confirme ?">
				<input data-conv-question="Digite seu e-mail" data-pattern="^[a-zA-Z0-9.!#$%&???*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" id="email" type="email" name="email" required placeholder="What's your e-mail?">
					{{-- <option value="confirm">Confirmar ?</option> --}}
					<select data-conv-question="Please Conform">
						<option value="confirm">Conform</option>
				</select>
			</div>
		</form>
	</div>
	</div>
	{{-- chatbot --}}



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
<script src="{{ url('js/front_js/jquery.lightbox-0.5.js') }}"></script>
<script src="{{ url('js/front_js/custom.js') }}"></script>
<script type="text/javascript" src="{{url('js/front_js/jquery.convform.js')}}"></script>


</body>
	</div>
	
</html>
