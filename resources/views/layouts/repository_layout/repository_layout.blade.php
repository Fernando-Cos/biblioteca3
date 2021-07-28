<!DOCTYPE html>
<html>
    <head>
        <title>Repositório SEAS: Página inicial</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="Generator" content="DSpace 5.2" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon"/>

	    <link rel="stylesheet" href="{{ url('css/repository_css/static/jquery-ui-1.10.3.custom.css')}}" type="text/css" />
	    <link rel="stylesheet" href="{{ url('css/repository_css/static/bootstrap/bootstrap.min.css')}}" type="text/css" />
	    <link rel="stylesheet" href="{{ url('css/repository_css/static/bootstrap/bootstrap-theme.min.css')}}" type="text/css" />
	    <link rel="stylesheet" href="{{ url('css/repository_css/static/bootstrap/dspace-theme.css') }}" type="text/css" />


        <script type='text/javascript' src="{{ url('js/repository_js/static/jquery-1.10.2.min.js') }}"></script>
        <script type='text/javascript' src="{{ url('js/repository_js/static/jquery-ui-1.10.3.custom.min.js') }}"></script>
        <script type='text/javascript' src="{{ url('js/repository_js/static/bootstrap/bootstrap.min.js') }}"></script>
        <script type='text/javascript' src="{{ url('js/repository_js/static/holder.js')}}"></script>
        <script type="text/javascript" src="{{ url('js/repository_js/utils.js') }}"></script>
        <script type="text/javascript" src="{{ url('js/repository_js/static/choice-support.js') }}"> </script>
   
    </head>
<body class="undernavigation" style="background-color: #d9dce4;">
<a class="sr-only" href="#content">Skip navigation</a>
<header class="navbar navbar-inverse navbar-fixed-top">    
            <div class="container">
       <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
 
         <a class="navbar-brand" href="/">S E S - AM</a>
       </div>
       <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
         <ul class="nav navbar-nav">
          <li class="">
          <a href="/"><span class="glyphicon"></span>
            <img src="{{ asset('images/front_images/ico/b.png') }}" style="height: 20px;"/>&nbsp;Inicial</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Navegação<b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="/community-list">Comunidades e coleções</a></li>
    <li class="divider"></li>
    <li class="dropdown-header">Navegar nos Itens por:</li>
            <li><a href="/browse?type=dateissued">Data do documento</a></li>
            <li><a href="/browse?type=author">Todos os autores</a></li>
            <li><a href="/browse?type=advisor">Todos os orientadores</a></li>
            <li><a href="/browse?type=title">Título</a></li>
            <li><a href="/browse?type=subject">Assunto</a></li>
            <li><a href="/browse?type=cnpq">CNPq</a></li>
            <li><a href="/browse?type=department">Departamento</a></li>
            <li><a href="/browse?type=program">Programa</a></li>
            <li><a href="/browse?type=type">Tipo de documento</a></li>
            <li><a href="/browse?type=access">Tipo de acesso</a></li>
            <li><a href="/browse?type=controlado">Vocabulário controlado</a></li>
    </ul>
</li>
    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Documentos <b class="caret"></b></a>
        <ul class="dropdown-menu">
        <li><a target="_blank" href="">Check-list para depósito de TCC</a></li>	
        <li><a target="_blank" href="">Carta de encaminhamento</a></li>
        <li><a target="_blank" href="/Politica_RepositorioInstitucionalUFAM.pdf">Politica do Repositório</a></li>	
        <li><a target="_blank" href="/termo_autorizacao.docx">Termo de autorização - Autodepósito</a></li>
        <li><a target="_blank" href="/termodeembargo.docx">Termo de solicitação de embargo</a></li>
        <li><a target="_blank" href="/ajudariu.pdf">Tutorial de uso</a></li>
        <li><a target="_blank" href="/tutoliberacao.pdf">Tutorial para liberação de relatórios</a></li>

        </ul>
    </li>

	  <li class=""><a href="/mydspace"><span class="glyphicon"></span>
      <img src="{{ asset('images/front_images/ico/a.png') }}" style="height: 20px;"/>&nbsp;Autodepósito</a></li>
      <li class=""><a href="/mydspace"><span class="glyphicon"></span>
        <img src="{{ asset('images/front_images/ico/c.jpg') }}" style="height: 20px;"/>&nbsp;Contatos</a></li>
       </ul>
       <div class="nav navbar-nav navbar-right">
		<ul class="nav navbar-nav navbar-right">
         <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Entrar em: <b class="caret"></b></a>
             <ul class="dropdown-menu">
               <li><a href="/mydspace">Meu espaço</a></li>
               <li><a href="/subscribe">Receber atualizações<br/> por e-mail</a></li>
               <li><a href="/profile">Editar perfil</a></li>
	       <li><a target ="_blank" href="https://ecampus.ufam.edu.br/ecampus/projetosLira/index">Disponibilizar Relatórios</a></li>
             </ul>
           </li>
          </ul>  
	
	<form method="get" action="/simple-search" class="navbar-form navbar-right">
	    <div class="form-group">
          <input type="text" class="form-control" placeholder="Buscar no repositório" name="query" id="tequery" size="25"/>
        </div>
        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
	</form>
</div>
    </nav>
         </div>
</header>
<main id="content" role="main">
<br/>
<div class="container">
</div>                
<div class="container">

<style>
.fade_bs.in_bs {
    opacity: 1;
}
.alert-success_bs {
    color: #FCF8E3;
    background-color: #594087;
    border-color: #faebcc;
}
.alert_bs {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
}
.fade_bs {
    opacity: 0;
    -webkit-transition: opacity .15s linear;
    -o-transition: opacity .15s linear;
    transition: opacity .15s linear;
}
.close_bs {
    float: right;
    font-size: 21px;
    font-weight: 700;
    line-height: 1;
    color: #000;
    text-shadow: 0 1px 0 #fff;
    filter: alpha(opacity=20);
    opacity: .2;
}
a.aecampus {
    color: #91c3ef;
    text-decoration: none;
}
a.aecampus {
    background-color: transparent;
}
</style>

  {{-- <div class="alert_bs alert-success_bs fade_bs in_bs">
    <strong>AVISO!</strong> Professor, <a class="aecampus" target="_blank" href="https://ecampus.ufam.edu.br/ecampus/projetosLira/index">autorize aqui</a> a publicação dos seus relatórios!
  </div> --}}

  


	<div class="container">
		<form method="get" action="/simple-search" class="form-horizontal col-md-12 form-group form-group-lg" 
    scope="search" role="form">
						
			<div id="logo-deposita" class="text-center">
				<a  id="link-logo-deposita" href="/community-list">
					<!-- <img src="/image/logo.gif" usemap="#mapa-brasil"> -->
				
				<img src="{{ asset('images/front_images/saude.png')}}" height="auto" width="240" usemap="#mapa-brasil">

				</a>
				<br/>
				<span style="font-size:22px; font-weight:bold; margin-bottom:10px;">
					
				</span>
			</div>  
		<div class="col-md-4 searchbox">
			<div class="col-md-11">
		   		<input type="text" class="form-control " placeholder="Buscar no repositório" 
           name="query" id="tequery-main-page" size="25" style="box-shadow: 4px 3px 5px rgb(101 108 144 / 45%);"/>
			</div>				
			<div class="col-md-1">

			   {{-- <button type="submit" class="btn btn-primary pull-left search-button">
           <span class="glyphicon glyphicon-search"></span>
          </button> --}}
			</div>
		</div>
		</form>
    
<div class="container row">
  
<div class="col-md-12">

<!-- <h3 class="facets">Busca facetada</h3> -->
<div id="facets" class="facetsBox row panel">
	    <div id="facet_contributor" class="col-md-4">
	    	<div class="panel panel-success colorborder1">
		    	<div class="panel-heading facet-panel clickable-panel color1">Orientador<span class="glyphicon glyphicon-plus pull-right"></span></div>
		    		<ul class="list-group hideFacets"  ><li class="list-group-item"><span class="badge">96</span> <a href="/simple-search?filterquery=Assessoria+de+Comunica%C3%A7%C3%A3o+da+UFAM&amp;filtername=contributor&amp;filtertype=equals"
					                title="Filtrado por Assessoria de Comunicação da UFAM">
					                Assessoria de Comunicação da UFAM</a></li><li class="list-group-item"><span class="badge">25</span> <a href="/simple-search?filterquery=Renata+Takeara&amp;filtername=contributor&amp;filtertype=equals"
					                title="Filtrado por Renata Takeara">
					                Renata Takeara</a></li><li class="list-group-item"><span class="badge">23</span> <a href="/simple-search?filterquery=Milton+C%C3%A9sar+Costa+Campos&amp;filtername=contributor&amp;filtertype=equals"
					                title="Filtrado por Milton César Costa Campos">
					                Milton César Costa Campos</a></li><li class="list-group-item"><span class="badge">21</span> <a href="/simple-search?filterquery=Barbalho%2C+C%C3%A9lia+Regina+Simonetti&amp;filtername=contributor&amp;filtertype=equals"
					                title="Filtrado por Barbalho, Célia Regina Simonetti">
					                Barbalho, Célia Regina Simonetti</a></li><li class="list-group-item"><span class="badge">21</span> <a href="/simple-search?filterquery=Valdir+Flor%C3%AAncio+da+Veiga+Junior&amp;filtername=contributor&amp;filtertype=equals"
					                title="Filtrado por Valdir Florêncio da Veiga Junior">
					                Valdir Florêncio da Veiga Junior</a></li><li class="list-group-item"><span class="badge">20</span> <a href="/simple-search?filterquery=Iolete+Ribeiro+da+Silva&amp;filtername=contributor&amp;filtertype=equals"
					                title="Filtrado por Iolete Ribeiro da Silva">
					                Iolete Ribeiro da Silva</a></li><li class="list-group-item"><span class="badge">19</span> <a href="/simple-search?filterquery=Anderson+Cavalcante+Guimar%C3%A3es&amp;filtername=contributor&amp;filtertype=equals"
					                title="Filtrado por Anderson Cavalcante Guimarães">
					                Anderson Cavalcante Guimarães</a></li><li class="list-group-item"><span style="visibility: hidden;">.</span>
					            <a href="?contributor_page=1#facet_contributor"><span class="pull-right">próximo &gt;</span></a>
					            </li>	</ul>
	    </div>
	      
   		 </div>
   		 
   
       
	    <div id="facet_subject" class="col-md-4">
	    
	    	<div class="panel panel-success colorborder2">
	    		
	    		
	    	
		    	<div class="panel-heading facet-panel clickable-panel color2">Assunto<span class="glyphicon glyphicon-plus pull-right"></span></div>
		    		<ul class="list-group hideFacets"  ><li class="list-group-item"><span class="badge">71</span> <a href="/simple-search?filterquery=Amaz%C3%B4nia&amp;filtername=subject&amp;filtertype=equals"
					                title="Filtrado por Amazônia">
					                Amazônia</a></li><li class="list-group-item"><span class="badge">67</span> <a href="/simple-search?filterquery=Manaus&amp;filtername=subject&amp;filtertype=equals"
					                title="Filtrado por Manaus">
					                Manaus</a></li><li class="list-group-item"><span class="badge">48</span> <a href="/simple-search?filterquery=Amazonas&amp;filtername=subject&amp;filtertype=equals"
					                title="Filtrado por Amazonas">
					                Amazonas</a></li><li class="list-group-item"><span class="badge">27</span> <a href="/simple-search?filterquery=Antioxidantes&amp;filtername=subject&amp;filtertype=equals"
					                title="Filtrado por Antioxidantes">
					                Antioxidantes</a></li><li class="list-group-item"><span class="badge">26</span> <a href="/simple-search?filterquery=Educa%C3%A7%C3%A3o&amp;filtername=subject&amp;filtertype=equals"
					                title="Filtrado por Educação">
					                Educação</a></li><li class="list-group-item"><span class="badge">26</span> <a href="/simple-search?filterquery=Peixes&amp;filtername=subject&amp;filtertype=equals"
					                title="Filtrado por Peixes">
					                Peixes</a></li><li class="list-group-item"><span class="badge">26</span> <a href="/simple-search?filterquery=Tuberculose&amp;filtername=subject&amp;filtertype=equals"
					                title="Filtrado por Tuberculose">
					                Tuberculose</a></li><li class="list-group-item"><span style="visibility: hidden;">.</span>
						        
					            
					            <a href="?subject_page=1#facet_subject"><span class="pull-right">próximo &gt;</span></a>
					            </li>	</ul>
	    </div>
	      
   		 </div>
   		 
   
       
	    <div id="facet_cnpq" class="col-md-4">
	    
	    	<div class="panel panel-success colorborder0">
	    		
	    		
	    	
		    	<div class="panel-heading facet-panel clickable-panel color0">CNPq<span class="glyphicon glyphicon-plus pull-right"></span></div>
		    		<ul class="list-group hideFacets"  ><li class="list-group-item"><span class="badge">114</span> <a href="/simple-search?filterquery=Ci%C3%AAncias+Agr%C3%A1rias%3A+Agronomia&amp;filtername=cnpq&amp;filtertype=equals"
					                title="Filtrado por Ciências Agrárias: Agronomia">
					                Ciências Agrárias: Agronomia</a></li><li class="list-group-item"><span class="badge">68</span> <a href="/simple-search?filterquery=Ci%C3%AAncias+Exatas+e+da+Terra%3A+Quimica+dos+Produtos+Naturais&amp;filtername=cnpq&amp;filtertype=equals"
					                title="Filtrado por Ciências Exatas e da Terra: Quimica dos Produtos Naturais">
					                Ciências Exatas e da Terra: Quimi...</a></li><li class="list-group-item"><span class="badge">67</span> <a href="/simple-search?filterquery=Ci%C3%AAncias+Humanas%3A+Psicologia&amp;filtername=cnpq&amp;filtertype=equals"
					                title="Filtrado por Ciências Humanas: Psicologia">
					                Ciências Humanas: Psicologia</a></li><li class="list-group-item"><span class="badge">66</span> <a href="/simple-search?filterquery=Ci%C3%AAncias+Agr%C3%A1rias%3A+Zootecnia&amp;filtername=cnpq&amp;filtertype=equals"
					                title="Filtrado por Ciências Agrárias: Zootecnia">
					                Ciências Agrárias: Zootecnia</a></li><li class="list-group-item"><span class="badge">59</span> <a href="/simple-search?filterquery=Ci%C3%AAncias+da+Sa%C3%BAde%3A+Odontologia&amp;filtername=cnpq&amp;filtertype=equals"
					                title="Filtrado por Ciências da Saúde: Odontologia">
					                Ciências da Saúde: Odontologia</a></li><li class="list-group-item"><span class="badge">56</span> <a href="/simple-search?filterquery=Ci%C3%AAncias+Agr%C3%A1rias%3A+Engenharia+de+Pesca&amp;filtername=cnpq&amp;filtertype=equals"
					                title="Filtrado por Ciências Agrárias: Engenharia de Pesca">
					                Ciências Agrárias: Engenharia de ...</a></li><li class="list-group-item"><span class="badge">56</span> <a href="/simple-search?filterquery=Ci%C3%AAncias+Humanas%3A+Educa%C3%A7%C3%A3o&amp;filtername=cnpq&amp;filtertype=equals"
					                title="Filtrado por Ciências Humanas: Educação">
					                Ciências Humanas: Educação</a></li><li class="list-group-item"><span style="visibility: hidden;">.</span>
						        
					            
					            <a href="?cnpq_page=1#facet_cnpq"><span class="pull-right">próximo &gt;</span></a>
					            </li>	</ul>
	    </div>
	      
   		 </div>
   		 
   
       
	    <div id="facet_type" class="col-md-4">
	    
	    	<div class="panel panel-success colorborder1">
	    		
	    		
	    	
		    	<div class="panel-heading facet-panel clickable-panel color1">Tipo de documento<span class="glyphicon glyphicon-plus pull-right"></span></div>
		    		<ul class="list-group hideFacets"  ><li class="list-group-item"><span class="badge">3611</span> <a href="/simple-search?filterquery=Relat%C3%B3rio+de+Pesquisa&amp;filtername=type&amp;filtertype=equals"
					                title="Filtrado por Relatório de Pesquisa">
					                Relatório de Pesquisa</a></li><li class="list-group-item"><span class="badge">155</span> <a href="/simple-search?filterquery=Trabalho+de+Conclus%C3%A3o+de+Curso&amp;filtername=type&amp;filtertype=equals"
					                title="Filtrado por Trabalho de Conclusão de Curso">
					                Trabalho de Conclusão de Curso</a></li><li class="list-group-item"><span class="badge">96</span> <a href="/simple-search?filterquery=Clipping&amp;filtername=type&amp;filtertype=equals"
					                title="Filtrado por Clipping">
					                Clipping</a></li><li class="list-group-item"><span class="badge">15</span> <a href="/simple-search?filterquery=E-book&amp;filtername=type&amp;filtertype=equals"
					                title="Filtrado por E-book">
					                E-book</a></li><li class="list-group-item"><span class="badge">11</span> <a href="/simple-search?filterquery=Relat%C3%B3rio&amp;filtername=type&amp;filtertype=equals"
					                title="Filtrado por Relatório">
					                Relatório</a></li><li class="list-group-item"><span class="badge">9</span> <a href="/simple-search?filterquery=Trabalho+de+Conclus%C3%A3o+de+Curso+-+Artigo&amp;filtername=type&amp;filtertype=equals"
					                title="Filtrado por Trabalho de Conclusão de Curso - Artigo">
					                Trabalho de Conclusão de Curso - ...</a></li><li class="list-group-item"><span class="badge">7</span> <a href="/simple-search?filterquery=Apresenta%C3%A7%C3%B5es&amp;filtername=type&amp;filtertype=equals"
					                title="Filtrado por Apresentações">
					                Apresentações</a></li><li class="list-group-item"><span class="badge">7</span> <a href="/simple-search?filterquery=Guia&amp;filtername=type&amp;filtertype=equals"
					                title="Filtrado por Guia">
					                Guia</a></li><li class="list-group-item"><span class="badge">5</span> <a href="/simple-search?filterquery=Caderno+digital&amp;filtername=type&amp;filtertype=equals"
					                title="Filtrado por Caderno digital">
					                Caderno digital</a></li><li class="list-group-item"><span class="badge">4</span> <a href="/simple-search?filterquery=Artigo+publicado+em+evento&amp;filtername=type&amp;filtertype=equals"
					                title="Filtrado por Artigo publicado em evento">
					                Artigo publicado em evento</a></li><li class="list-group-item"><span style="visibility: hidden;">.</span>
						        
					            
					            <a href="?type_page=1#facet_type"><span class="pull-right">próximo &gt;</span></a>
					            </li>	</ul>
	    </div>
	      
   		 </div>
   		 
   
       
	    <div id="facet_dateIssued" class="col-md-4">
	    
	    	<div class="panel panel-success colorborder2">
	    		
	    		
	    	
		    	<div class="panel-heading facet-panel clickable-panel color2">Data de Publicação<span class="glyphicon glyphicon-plus pull-right"></span></div>
		    		<ul class="list-group hideFacets"  ><li class="list-group-item"><span class="badge">36</span> <a href="/simple-search?filterquery=%5B2020+TO+2021%5D&amp;filtername=dateIssued&amp;filtertype=equals"
					                title="Filtrado por 2020 - 2021">
					                2020 - 2021</a></li><li class="list-group-item"><span class="badge">3356</span> <a href="/simple-search?filterquery=%5B2010+TO+2019%5D&amp;filtername=dateIssued&amp;filtertype=equals"
					                title="Filtrado por 2010 - 2019">
					                2010 - 2019</a></li><li class="list-group-item"><span class="badge">303</span> <a href="/simple-search?filterquery=%5B2009+TO+2009%5D&amp;filtername=dateIssued&amp;filtertype=equals"
					                title="Filtrado por 2009 - 2009">
					                2009 - 2009</a></li>	</ul>
	    </div>
	      
   		 </div>
   		 
   
       
	    <div id="facet_access" class="col-md-4">
	    
	    	<div class="panel panel-success colorborder0">
	    		
	    		
	    	
		    	<div class="panel-heading facet-panel clickable-panel color0">Tipo de acesso<span class="glyphicon glyphicon-plus pull-right"></span></div>
		    		<ul class="list-group hideFacets"  ><li class="list-group-item"><span class="badge">2570</span> <a href="/simple-search?filterquery=Acesso+Aberto&amp;filtername=access&amp;filtertype=equals"
					                title="Filtrado por Acesso Aberto">
					                Acesso Aberto</a></li><li class="list-group-item"><span class="badge">1369</span> <a href="/simple-search?filterquery=Acesso+Restrito&amp;filtername=access&amp;filtertype=equals"
					                title="Filtrado por Acesso Restrito">
					                Acesso Restrito</a></li><li class="list-group-item"><span class="badge">1</span> <a href="/simple-search?filterquery=Acesso+Embargado&amp;filtername=access&amp;filtertype=equals"
					                title="Filtrado por Acesso Embargado">
					                Acesso Embargado</a></li>	</ul>
	    </div>
	      
   		 </div>
   		 
   </div></div>

<script type="text/javascript" src="{{ url('js/repository_js/static/clickable.js')}}"></script>
</div>
<div class="row">
        <div class="col-md-4">
               <h3>Comunidades do repositório</h3>
                <p>Clique em uma comunidade para ver suas coleções</p>
          <div class="list-group">
<div class="list-group-item row">
    <div class="col-md-12">
            <h4 class="list-group-item-heading"><a href="/handle/prefix/51">Ciências Agrárias</a>
            <span class="badge pull-right">595</span>
            </h4>
      </div>
</div>
<div class="list-group-item row">
    <div class="col-md-12">
            <h4 class="list-group-item-heading"><a href="/handle/prefix/87">Ciências Biológicas</a>
            <span class="badge pull-right">455</span>
            </h4>
    </div>
</div>
<div class="list-group-item row">

        <div class="col-md-12">

                <h4 class="list-group-item-heading"><a href="/handle/prefix/105">Ciências da Saúde</a>

                <span class="badge pull-right">640</span>

                </h4>
    </div>
</div>
<div class="list-group-item row">

        <div class="col-md-12">

                <h4 class="list-group-item-heading"><a href="/handle/prefix/69">Ciências Exatas e da Terra</a>

                <span class="badge pull-right">741</span>

                </h4>
    </div>
</div>
<div class="list-group-item row">
        <div class="col-md-12">
                <h4 class="list-group-item-heading"><a href="/handle/prefix/159">Ciências Humanas</a>
                <span class="badge pull-right">722</span>
                </h4>
    </div>
</div>
<div class="list-group-item row">

        <div class="col-md-12">

                <h4 class="list-group-item-heading"><a href="/handle/prefix/141">Ciências Sociais Aplicadas</a>

                <span class="badge pull-right">383</span>

                </h4>
    </div>
</div>
<div class="list-group-item row">

        <div class="col-md-12">
                <h4 class="list-group-item-heading"><a href="/handle/prefix/123">Engenharias</a>
                <span class="badge pull-right">147</span>
                </h4>
    </div>
</div>
<div class="list-group-item row">
        <div class="col-md-12">

                <h4 class="list-group-item-heading"><a href="/handle/prefix/177">Linguística, Letras e Artes</a>

                <span class="badge pull-right">119</span>
                </h4>
    </div>
</div>
<div class="list-group-item row">
        <div class="col-md-12">
                <h4 class="list-group-item-heading"><a href="/handle/prefix/5489">Memorial UFAM</a>
                <span class="badge pull-right">98</span>
                </h4>
    </div>
</div>
<div class="list-group-item row">

        <div class="col-md-12">

                <h4 class="list-group-item-heading"><a href="/handle/prefix/195">Multidisciplinar</a>

                <span class="badge pull-right">45</span>

                </h4>
    </div>
</div>
        </div>
        </div>

        </div>
	</div>
</div>
</div>

</div>
</main>
    <footer class="navbar navbar-inverse navbar-bottom" style="position:static !important;">
      <div class="container text-muted" style="padding-left: 0px;">
        <div class="text-center col-md-12">
          <div class="footer-logo pull-left">
              <a href="" target="_blank">
                <img class="pull-left" src="{{ asset('images/front_images/odio.jpg')}}"style="max-width: 50%; height: 60px;"></a>
              <a href="" target="_blank">
                <img class="pull-left" src="{{ asset('images/front_images/pergunte.png')}}" style="height: 60px;"></a> 
              <a href="" target="_blank">
                <img class="pull-left" src="{{ asset('images/front_images/saude.png')}}" style="height: 57px;"></a>
              <a href="" target="_blank">
                <img class="pull-left" src="{{ asset('images/front_images/img-bvs.jpg')}}" style="height: 60px;"></a></div>
                  <div class="footer-logo pull-right">
              <a href="" class="default-padding-left" target="_blank">
                <img class="footer-logo pull-left" src="{{ asset('images/front_images/acesso-a-informacao.png')}}"></a>
           </div>
        </div>
    </div>
<div class="footer-CPD">Sistema desenvolvido pelo departamento de gerencia de desenvolvimento - DETIN
  </div>
    </footer>
    </body>
</html>

