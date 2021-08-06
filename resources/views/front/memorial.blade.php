@extends('layouts.app')
@section('title', 'Memorial Virtual')
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header"></div>
    <div class="card-body">
        <div class="form-group row">
            <div class="card card-body">
                <p align="justify"> <b> Mergulhe nessa história conosco!</b></p>
                A pagina do memorial virtual da Secretaria de Estado de Saúde do Amazonas foi pensada para que a historia da saude 
                <p> pública do Estado se mantenha viva, além de organizar a trajetória da historia da Secretaria de Estado de Saúde.<br>
                    Lançado no dia XX de XXXX de 2021 pela SES-AM, contará com fases XXXXX.
                </div>
                <br>
                <h3 align="center" style="color:#05407b"> <b>Linha do tempo da saúde no Amazonas</h3>
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
