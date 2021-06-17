@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header"></div>
    <div class="card-body">
        <h1>FICHA DE CATALOGRAFIA</h1>
        <p style="font-size: 12pt; text-align: justify;" >Ficha catalográfica é um documento que reúne os dados que descrevem uma publicação, de forma padronizada - esse padrão é internacional.
            <br>Ela aparece no verso da página de rosto das publicações, oficializando seus dados descritivos. 
            Além de padronizar a catalogação da obra, a ficha catalográfica facilita a busca de informações sobre o material.</p><br>
            <p>Para solicitar click na imagem abaixo.</p>
   


            <div class="form-group row">
                <div class="content-header-options-1 row-fluid">
                    <a href="https://forms.gle/zNMFznNKx6A1RDig6" target="_blanck">
                    <img style="max-width: 60%; border-radius: 10px;box-shadow: 5px 0px 7px 2px #888888;" src="{{ asset('images/front_images/ficha.png') }}" alt=""></a>
            </div>
        </div>
    </div>
</div>
@endsection
