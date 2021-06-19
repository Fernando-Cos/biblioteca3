@extends('layouts.app')
@section('title', 'Isbn Solicitações')
{{-- @include('front.includes.ficha1') --}}
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
    <div class="card">
    <div class="card-header"></div>
    <div class="card-body">
        <h1 style="text-align: center">❖ | ISBN</h1>
            <button class="btn btn-primary">
                <a href="https://forms.gle/zNMFznNKx6A1RDig6" target="_blanck" style="color: rgb(255, 255, 255);">Solicitar</a>
            </button>
            <h1>O que é ISBN?</h1>
                <div class="form-group row">
                <p style="text-align: justify;">O International Standard Book Number/ Padrão Internacional de Numeração de Livro - 
                ISBN é um padrão numérico criado com o objetivo de fornecer uma espécie de "RG" para as publicações, funciona como identificador. Esse número é muito difuso por possibilitar que o material seja lido por redes de varejo,
                bibliotecas e sistemas gerais de catalogação.</p>
            <h1>Quais publicações podem receber ISBN?</h1>
            <p>O ISBN é atribuído a publicações monográficas, incluindo produtos relacionados,como publicações disponibilizadas como conjuntos ou como séries completas disponíveis para o público,
            quer estas publicações e produtos estejam disponíveis gratuitamente ou para compra. Por exemplo:</p>
            <table border="1">
                <tr>
                    <th> anais, seminários e encontros</th>
                <tr>
                    <th> 	apostilas de concursos</th>
                </tr>
                <tr>
                    <th> 	audiolivros, seja físico ou acessível na internet</th>
                    </tr>
                    <tr>
                    <th> 	aplicativos para e-book (livros eletrônicos), desde que possuam conteúdo textual significativo e possam ser considerados uma publicação monográfica e disponível para o público</th>
                    </tr>
                    <tr>
                    <th>	aulas e cursos em vídeo (somente se forem educacionais e comercializados);</th>
                    </tr>
                    <tr>
                    <th>	catálogos de exposição com texto explicativo</th>
                    </tr>
                    <tr>
                    <th>	diário de bordo vinculado estritamente a projetos educacionais – ensino fundamental</th>
                    </tr>
                    <tr>
                    <th>	livros de arte e livros ilustrados com uma página de título e/ou texto ou legendas</th>
                    </tr>
                    <tr>
                    <th>	publicações em braile</th>
                    </tr>
                    <tr>
                    <th>	publicação infanto-juvenil (jogos e passatempos que contenham atividades educacionais)</th>
                    </tr>
                    <tr>
                        <th>	álbum de figurinha (direcionados a conteúdos educativos e com textos significativos e explicativos).</th>
                        </tr>
                </table> <br>      
                <p>Para solicitar click na imagem abaixo.</p>
                <a href="https://forms.gle/4sADQZ6C69FEmMweA" target="_blank"><img src="{{ asset('images/front_images/ficha1.png')}}" style="max-width: 60%; border-radius: 10px;box-shadow: 5px 0px 7px 2px #888888;" alt="solicitar ficha"></a>
        </div>
        
</div>
@endsection

