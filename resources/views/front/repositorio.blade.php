@extends('layouts.app')
@section('title', 'Repositorio Institucional')
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header"></div>
    <div class="card-body">
        {{-- <h1>REPOSITORIO INSTITUCIONAL</h1><BR> --}}
            <table class="tabelaConsultas">
                <thead>
                    <tr>
                        <th style="width: 20px; min-width: 20px;">
                        </th>
                        <th id="thCabecalho1" style="" class="ordenacao1" onclick="">REPOSITORIO INSTITUCIONAL
                            <div class="setasOrdenacao"></div>
                        </th>
                    </tr>
                </thead>
                    <tbody>
                        <tr onclick="">
                            <td onclick="">
                                <a id="" title="Visualizar em nova guia" class="link abrirDocNovaAbaConsulta" href="">
                                    <span class="icon novaAbaEscuro"></span>
                                </a>
                            </td>
                        <td class="colunaID coluna0">
                            <p style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Sed risus ultricies tristique nulla aliquet. In fermentum et sollicitudin ac orci phasellus egestas tellus.Mi eget mauris pharetra et. Sagittis aliquam malesuada bibendum arcu vitae elementum curabitur. Amet purus gravida quis blandit turpis cursus. A lacus vestibulum sed arcu non odio euismod lacinia at. Urna condimentum mattis pellentesque id nibh tortor id aliquet. Auctor urna nunc id cursus metus aliquam eleifend mi in. Neque ornare aenean euismod elementum nisi quis. Arcu ac tortor dignissim convallis aenean et tortor. Scelerisque varius morbi enim nunc.</p>
                            <p style="text-align: justify">Quis commodo odio aenean sed adipiscing diam donec adipiscing. Eget dolor morbi non arcu risus quis varius quam quisque. Eget magna fermentum iaculis eu non diam phasellus vestibulum lorem. Amet justo donec enim diam vulputate ut pharetra sit. Purus non enim praesent elementum facilisis leo vel fringilla est. Ac felis donec et odio pellentesque. Etiam erat velit scelerisque in dictum. Sed tempus urna et pharetra pharetra. Leo urna molestie at elementum eu facilisis sed odio morbi. Morbi tristique senectus et netus et malesuada fames..</p>
                    </tbody>
                </table>

        <a href="repositorio-institucional" target="_blank"> 
        <input type="button" value="Acessar" class="btn ToRight" style="background: #17a6db;"></a>
                
        <a href="https://riu.ufam.edu.br/">ufam</a>
            <div class="form-group row">
                <div class="content-header-options-1 row-fluid">
            </div>
        </div>
    </div>
</div>
@endsection
