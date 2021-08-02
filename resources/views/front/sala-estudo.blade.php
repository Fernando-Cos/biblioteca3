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
            <li class="span12" style="height: 34px;">
                <h4>
                    <a href="/ultimas-noticias/150-ppgiba-e-outras-pos-abrem-selecao-de-bolsistas-pesquisadores-por-meio-do-pdpg-amazonia-legal.html">
                        PPGIBA  e outras Pós abrem seleção de bolsistas pesquisadores por meio do...</a>
                    </h4>
                </li>			
                <li class="span12" style="height: 34px;">
                    <h4>
                        <a href="/ultimas-noticias/149-semana-de-abertura-do-semestre-do-ppgiba-reune-roda-de-conversa-aula-magna-reuniao-e-disciplina-especial.html">
                            Semana de abertura do semestre do PPGIBA traz roda de conversa, Aula Magna,...</a>
                        </h4>
                    </li>			
                    <li class="span12" style="height: 34px;">
                        <h4>
                            <a href="/ultimas-noticias/148-aluna-do-ppgiba-recebe-mencao-honrosa-no-v-simposio-de-biologia-molecular.html">
                                Aluna do PPGIBA recebe menção honrosa no V Simpósio de Biologia Vascular</a>
                            </h4>
                        </li>			
                        <li class="span12" style="height: 34px;">
                            <h4>
                                <a href="/ultimas-noticias/142-disciplina-seminarios-iii-encerra-nesta.html">
                                    Ofertada no calendário especial de 2020, Seminários III encerra nesta...</a>
                                </h4>
                            </li>			
                            <li class="span12" style="height: 34px;">
                                <h4>
                                    <a href="/ultimas-noticias/141-discente-egresso-do-ppgiba-recebe-premio-de-melhor-dissertacao-de-2019-do-programa.html">
                                        Discente egresso do PPGIBA recebe prêmio de melhor dissertação de 2019 do..</a>
                                    </h4>
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
                        <div class="col-md-6" style="margin-top: -45%;
                            margin-top: -26%;
                            position: absolute;
                            margin-left: 29%;
                        ">
                                
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
