@extends('layouts.app')
@section('title', 'Sala de estudos')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">
</div>
<div class="card-body">
<div class="form-group row">
    <div class="module-box-01 module span12 variacao-module-00">
        <div class="outstanding-header2">
            <h2 class="outstanding-title">Sala de Estudo</h2>
        </div>
        <ul class="row-fluid lista">
            <li class="span12">
                <h4>
                    <a href="">
                        Disponivel de 08:00 as 11:30.</a>
                    </h4>
                </li>			
                <li class="span12">
                    <h4>
                        <a href="">
                            E de 13:00 as 17:00.</a>
                        </h4>
                    </li>			
                </li>			
            </ul>
            <div class="footer">
                <a href="/ultimas-noticias.html" class="link">
                    Acesse a lista completa			
                </a>	
            </div>
            <div class="outstanding-footer2">
            </div>
        </div>
        <div class="content-header-options-1 row-fluid">
            <img src="{{ asset('images/front_images/sala-leitura.svg')}}" style="max-width: 50%" alt="">
        </div>
        <div class="col-md-6" style="margin-top: -45%; margin-top: -26%; position: absolute; margin-left: 29%;">
            @include('front.includes.ultimas-noticiais')
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-fluid module">
                <div class="row-fluid module span12">
                    <div class="row-fluid">
                        {{-- <div>
                            @include('front.includes.infor-dados')
                        </div> --}}
</div>
    </div>
</div>
</div>

            <style>
            main div.container .module .outstanding-header2 {
                border-top: 5px solid #0c3c64;
                }

            main div.container .module .outstanding-footer2 {
                border-top: 4px solid #003042;
                background: #bcc4d3;
                height: 22px;
                margin: 26px 0 0 0;
                padding: 10px;
            }
            </style>
@endsection
