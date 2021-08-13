@extends('layouts.app')
@section('title', 'Publicações')
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
    <div class="card-body">
    <div id="content" class="span9 internas">
    <section id="content-section">
        <span class="hide">Início do conteúdo da página</span>
        <div class="row-fluid">
<div class="item-page">
<div class="content-header-options-1 row-fluid">
<table class="tabelaConsultas">
            <thead>
                <tr>
                    <th style="width: 20px; min-width: 20px;">
                    </th>
                    <th id="thCabecalho1" style="" class="ordenacao1" onclick="">Publicação de Informações
                        <div class="setasOrdenacao"></div>
                    </th>
                </tr>
            </thead>
    <tbody>
        <tr onclick="">
            <td>
                <a id="" title="Visualizar em nova guia" class="link abrirDocNovaAbaConsulta" href="">
                    <span class="icon novaAbaEscuro">Em teste</span>
                </a>
            </td>
        <td style="" class="colunaID coluna0">
            <p style="text-align: justify"><b>Canoa do Tempo – Revista do Programa de Pos-Graduação em História da Universidade Federal do Amazonas.<b></p>
            <p style="text-align: justify; text-indent: 4rem;" >O conselho científico conta com especialistas.</p>
            <button type="button" class="btn btn-success">Acessar</button>
            {{-- <img src="{{ asset('images/front_images/data.png')}}" style="max-width: 25%" alt=""> --}}
        </tbody>
</table>
	<div class="documentByLine span7">
		<ul>
		</ul>
	</div>
</div>
<!-- fim .content-header-options-1 -->
<p><span style="font-size: 16px;">Página do periódico:<a href="" target="_blank" rel="noopener noreferrer">Em teste</a></span></p>
<hr>
<table class="tabelaConsultas">
                <thead>
                    <tr>
                        <th style="width: 20px; min-width: 20px;">
                        </th>
                        <th id="thCabecalho1" style="" class="ordenacao1" onclick="">Informações publicas
                            <div class="setasOrdenacao"></div>
                        </th>
                    </tr>
                </thead>
        <tbody>
            <tr onclick="">
                <td>
                    <a id="" title="Visualizar em nova guia" class="link abrirDocNovaAbaConsulta" href="">
                        <span class="icon novaAbaEscuro">Em teste</span>
                    </a>
                </td>
            <td style="" class="colunaID coluna0">
                <p style="text-align: justify"><b>Manduarisawa – Revista eletrônica discente do curso de História da Universidade Federal do Amazonas.<b></p>
                <p style="text-align: justify; text-indent: 4rem;">A Manduarisawa nasceu da inquietação de jovens acadêmicos que almejavam contribuir e ..</p>
                <button type="button" class="btn btn-success">Acessar</button>
            </tbody>
        </table>
<p><span style="font-size: 16px;">Página do periódico: <a href="" target="_blank" rel="noopener noreferrer">Em teste</a></span></p>
 
</div>
<div class="below-content">
		<div class="line">
		registrado em:
    <span><a class="link-categoria" rel="tag" href="">Últimas notícias</a></span>
    <span class="separator">,</span>
    <span><a class="link-categoria" rel="tag" href="">Uncategorised</a></span>	</div>
</div>
</div>
    <span class="hide">Fim do conteúdo da página</span>
        </section>
            </div>
            </div>
        </div>
<div class="form-group row">
</div>
</div>             
        </div>
    </div>
</div>

@endsection
