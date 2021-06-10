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
	{{-- <script language="javascript">function sizeFont(elem,acao){var tamInic=12;var tamMin=4;var tamMax=40;if(document.getElementById(elem).style.fontSize==""){var tamFonte=tamInic;}else{var tamFonte=parseInt(document.getElementById(elem).style.fontSize);}switch(acao){case'+':if(tamFonte<tamMax)document.getElementById(elem).style.fontSize=(tamFonte+2)+"px";break;case'-':if(tamFonte>tamMin)document.getElementById(elem).style.fontSize=(tamFonte-2)+"px";break;case'default':document.getElementById(elem).style.fontSize=(tamFonte=16)+"px";break;}}</script> --}}
    	<div id="google_translate_element2"></div>
    	<script type="text/javascript">function googleTranslateElementInit2(){new google.translate.TranslateElement({pageLanguage:'pt',autoDisplay:false},'google_translate_element2');}</script>
    	<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
	<style type="text/css">#goog-gt-tt{display:none!important}.goog-te-banner-frame{display:none!important}.goog-te-menu-value:hover{text-decoration:none!important}body{top:0!important}#google_translate_element2{display:none!important}</style>
</head>
<div id="conteudo">
<body>
	@include('layouts.front_layout.front_header')
<!-- Header End====================================================================== -->
	{{-- @if (isset($page_name) && $page_name=="index")
	
	@endif --}}
	<div class="row-fluid">
		<div id="navigation" class="span3">
			<a href="#" class="visible-phone visible-tablet mainmenu-toggle btn">
<!-- Sidebar ================================================== -->
@include('layouts.front_layout.front_sidebar')
<!-- Sidebar ================================================== -->



<div id="content" class="span9">
	<section id="content-section">
<!-- main================================================== -->
@include('layouts.front_layout.front_main')
<!-- main ================================================== -->


<div class="row-fluid module ">
<div class="outstanding-header">
	
<!-- section================================================== -->
@include('layouts.front_layout.front_section')
<!-- section ================================================== -->	


</main>
<!-- Footer ================================================================== -->
@include('layouts.front_layout.front_footer')
<!-- Footer ================================================================== -->

    <!-- scripts principais do template -->
    	<script src="/templates/padraogoverno01/bootstrap/js/bootstrap.min.js" type="text/javascript"></script><noscript>&nbsp;<!-- item para fins de acessibilidade --></noscript>
	    <script src="/templates/padraogoverno01/js/jquery.cookie.js" type="text/javascript"></script><noscript>&nbsp;<!-- item para fins de acessibilidade --></noscript>
	    <script src="/templates/padraogoverno01/js/template.js" type="text/javascript"></script><noscript>&nbsp;<!-- item para fins de acessibilidade --></noscript>
		<script src="https://barra.brasil.gov.br/barra.js?cor=verde" type="text/javascript"></script><noscript>&nbsp;<!-- item para fins de acessibilidade --></noscript>
		        <!-- debug -->
    </body>
</div>
</html>
