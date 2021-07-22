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
		<input type="text" id="portal-searchbox-field" class="searchField" placeholder="Buscar Artigos..." title="Buscar Artigos" name="searchword"  style="border-radius: 4px;">       
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
                <p style="text-align: justify">FLIEEN 02-04: Lorem ipsum dolor sit amenvallis vehicula. Fusce in purus ipsum. Aenean id semper ligula, vitae egestas dui. Phasellus fringilla bibendum turpis porttitor ultrices.</p>
               </tbody>
            </table>
        <div class="form-group row">
                <div class="content-header-options-1 row-fluid">
            </div>
        </div>
    </div>
</div>
@endsection
