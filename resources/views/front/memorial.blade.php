@extends('layouts.app')
@section('title', 'Memorial Virtual')
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header"></div>
    <div class="card-body">
        <table class="tabelaConsultas">
            <thead>
                <tr>
                    <th style="width: 20px; min-width: 20px;">
                    </th>
                    <th id="thCabecalho1" style="" class="ordenacao1" onclick="">MERGULHE NESSA HISTÓRIA CONOSCO!
                        <p align="justify">A página do memorial virtual da Secretaria de Estado de Saúde do Amazonas foi pensada para que a historia da saúde. 
                        <p>pública do Estado se mantenha viva, além de organizar a trajetória da historia da Secretaria de Estado de Saúde.<br>
                           Lançado no dia XX de XXXX de 2021 pela SES-AM, contará com fases XXXXX.
                    </th>
                </tr>
            </thead>
    </tbody>
</table>
    <div class="form-group row">
        <div class="card card-body">
                </div>
                <br>
                <h3 align="center" style="color:#05407b"> <b>Em desenvolvimento.</h3>
                <div class='progress1'>
                <ul class =test>
                    <li class ="e">
                        <img src="{{ asset('images/front_images/linha-do-tempo.jpg')}}" alt="busca">
                    </li>
                </ul>
                </div>
                <div class="content-header-options-1 row-fluid">
            </div>
        </div>
    </div>
</div>

<style>
    .progress img{
        
        margin: 15px;
    }

    .test{
        text-align: center;
    }
    .test e {
        display:inline-block;
        width: 200px;
    }
</style>
@endsection
