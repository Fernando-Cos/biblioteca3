@extends('layouts.app')
@section('title', 'Isbn Solicitações')
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
    <div class="card">
    <div class="card-header"></div>
    <div class="card-body">
        <h1>❖ | ISBN</h1>
            <button class="btn btn-primary">
                <a href="https://forms.gle/zNMFznNKx6A1RDig6" target="_blanck" style="color: rgb(255, 255, 255);">Solicitar</a>
            </button>
    <table class="tabelaConsultas">
        <thead>
            <tr>
                <th style="width: 20px; min-width: 20px;">
                </th>
                <th id="thCabecalho1" style="" class="ordenacao1" >O QUE É ISBN?
                    <p align="justify">O International Standard Book Number/ Padrão Internacional de Numeração de Livro - 
                        ISBN é um padrão numérico criado com o objetivo de fornecer uma espécie de "RG" para as publicações, funciona como identificador. Esse número é muito difuso por possibilitar que o material seja lido por redes de varejo,
                        bibliotecas e sistemas gerais de catalogação. 
                <th id="thCabecalho1" style="" class="ordenacao1" >QUAIS PUBLICAÇÕES PODEM RECEBER O ISBN?
                    <p align="justify">O ISBN é atribuído a publicações monográficas, incluindo produtos relacionados,
                        como publicações disponibilizadas como conjuntos ou como séries completas disponíveis para o público, 
                        quer estas publicações e produtos estejam disponíveis gratuitamente ou para compra. Por exemplo:</p>
                    </th>
                </tr>
            </thead>
        </tbody>
    </table>
<div class="form-group row" style="margin-right: 0%;">
    <table class="tabelaConsultas">
        <thead>
            <tr>
                <th style="width: 20px; min-width: 20px;">
                </th>
                <th id="thCabecalho1" style="" class="ordenacao1">
                    Exemplo de publicações ISBN
                    <div class="setasOrdenacao"></div>
                </th>
                <th id="thCabecalho2" style="" class="">
                    Documentos
                    <div class="setasOrdenacao"></div>
                </th>
            </tr>
        </thead>
        <tbody>
                <tr onclick="">
                    <td>
                        <a id="" title="Visualizar em nova guia" class="link abrirDocNovaAbaConsulta" href="" target="_blank">
                            <span class="icon novaAbaEscuro"></span>
                        </a>
                    </td>
            <td style="" class="colunaID coluna0">FLIEEN 02-04 :01</td>
            <td style="" class="coluna1">CANAIS, SEMÍNARIOS E ENCONTROS</td>
        </tr>
    <tr onclick="">
        <td>
            <a id="" title="Visualizar em nova guia" class="link abrirDocNovaAbaConsulta" href="" target="_blank">
                <span class="icon novaAbaEscuro"></span>
            </a>
        </td>
        <td style="" class="colunaID coluna0">IEVD 01-01 :01</td>
        <td style="" class="coluna1">APOSTILAS DE CONCURSOS</td>
    </tr>
    <tr>
        <td>
            <a id="" title="Visualizar em nova guia" class="link abrirDocNovaAbaConsulta" href="" target="_blank">
                    <span class="icon novaAbaEscuro"></span>
                </a>
            </td>
            <td style="" class="colunaID coluna0">IPQC001-PA-1650-03B4:02</td>
            <td style="" class="coluna1">APLICATIVOS PARA E-BOOKS(LIVROS ELETRÔNICOS), DESDE QUE POSSUAM CONTEÚDO TEXTUAL SIGNIFICATIVO E
                POSSAM SER CONSIDERADOS UMA PUBLICAÇÃO MONOGRÁFICA E DISPONÍNEL PARA O PÚBLICO. 
            </td>
        </tr>
        <tr>
            <td>
                <a id="" title="Visualizar em nova guia" class="link abrirDocNovaAbaConsulta" href="" target="_blank">
                    <span class="icon novaAbaEscuro"></span>
                </a>
            </td>
            <td style="" class="colunaID coluna0">M SGI 00:08
            </td>
            <td style="" class="coluna1">AUDIOLIVROS, SEJA FÍSICO OU ACESSÍVEL NA INTERNET</td>
        </tr>
    <tr onclick="">
        <td>
            <a id="" title="Visualizar em nova guia" class="link abrirDocNovaAbaConsulta" href="" target="_blank">
                <span class="icon novaAbaEscuro"></span>
            </a>
        </td>
            <td style="" class="colunaID coluna0">MA0001:02</td>
            <td style="" class="coluna1">AULAS E CURSOS EM VÍDEO(SOMENTE SE FOREM EDUCACIONAIS E COMERCIALIZADOS).</td>
        </tr>
    <tr>
        <td>
            <a id="" title="Visualizar em nova guia" class="link abrirDocNovaAbaConsulta" href="" target="_blank">
                <span class="icon novaAbaEscuro"></span>
            </a>
        </td>
        <td style="" class="colunaID coluna0">13.0-PA-1450-26BA/B3:00</td>
        <td style="" class="coluna1">CATÁLOGOS DE EXPOSIÇÃO COM TEXTO EXPLICATIVO.</td>
            </tr>
            <tr onclick="">
                <td onclick="event.stopPropagation();">
                    <a id="" title="Visualizar em nova guia" class="link abrirDocNovaAbaConsulta" href="">
                        <span class="icon novaAbaEscuro"></span>
                    </a>
                </td>
            <td style="" class="colunaID coluna0">MPE 01:01</td>
            <td style="" class="coluna1">DÍARIO DE BORDO VINCULADO ESTRITAMENTE A PROJETOS EDUCACIONAIS – ENSINO FUNDAMENTAL.</td>
                </tr>
                    <tr>
                <td>
                    <a id="" title="Visualizar em nova guia" class="link abrirDocNovaAbaConsulta" href="">
                        <span class="icon novaAbaEscuro"></span>
                    </a>
                </td>
                <td style="" class="colunaID coluna0">PCMSO:06</td>
                <td style="" class="coluna1">PROGRAMA DE CONTROLE MÉDICO DE SAÚDE OCUPACIONAL</td>
            </tr>
        <tr onclick="">
            <td>
                <a id="" title="Visualizar em nova guia" class="link abrirDocNovaAbaConsulta" href="" target="_blank">
                    <span class="icon novaAbaEscuro"></span>
                </a>
            </td>
            <td style="" class="colunaID coluna0">POSGI 01:04</td>
            <td style="" class="coluna1">LIVROS DE ARTES E LIVROS ILUSTRADOS COM UMA PAGÍNA DE TÍTULO E/OU TEXTO OU LEGENDAS, GUIAS.</td>
        </tr>
            <tr onclick="">
                <td>
                    <a id="" title="Visualizar em nova guia" class="link abrirDocNovaAbaConsulta" href="" target="_blank">
                        <span class="icon novaAbaEscuro"></span>
                    </a>
                </td>
                <td style="" class="colunaID coluna0">POSGI 01:04</td>
                <td style="" class="coluna1">LIVROS IMPRESSOS, PUBLICAÇÕES EM BRAILE</td>
            </tr>
        <tr onclick="">
            <td>
                <a id="" title="Visualizar em nova guia" class="link abrirDocNovaAbaConsulta" href="" target="_blank">
                    <span class="icon novaAbaEscuro"></span>
                </a>
            </td>
            <td style="" class="colunaID coluna0">POSGI 01:04</td>
            <td style="" class="coluna1">PUBLICAÇÃO INFANTO-JUVENIL(JOGOS E PASSATEMPO QUE CONTENHAM ATIVIDADES EDUCACIONAIS).</td>
        </tr>
            <tr onclick="">
                <td>
                    <a id="" title="Visualizar em nova guia" class="link abrirDocNovaAbaConsulta" href="" target="_blank">
                        <span class="icon novaAbaEscuro"></span>
                    </a>
                </td>
                <td style="" class="colunaID coluna0">POSGI 01:04</td>
                <td style="" class="coluna1">SOFTWARE EDUCACIONAL OU INSTRUTIVO</td>
            </tr>
                <tr onclick="">
                    <td>
                        <a id="" title="Visualizar em nova guia" class="link abrirDocNovaAbaConsulta" href="" target="_blank">
                            <span class="icon novaAbaEscuro"></span>
                        </a>
                    </td>
                    <td style="" class="colunaID coluna0">POSGI 01:04</td>
                    <td style="" class="coluna1">ÁLBUM DE FIGURINHAS (DIRECIONADOS A CONTEÚDOS EDUCATIVOS E COM TEXTOS SIGNIFICATIVOS E EXPLICATIVOS).</td>
                </tr>
        </tbody>
    </table><br>      
        <p>Para solicitar click na imagem abaixo.</p>
        <a href="https://forms.gle/4sADQZ6C69FEmMweA" target="_blank"><img src="{{ asset('images/front_images/ficha1.png')}}" style="max-width: 60%; border-radius: 10px;box-shadow: 5px 0px 7px 2px #888888;" alt="solicitar ficha"></a>
    </div>
</div>
@endsection