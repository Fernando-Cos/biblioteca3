@extends('layouts.app')
@section('title', 'BVS')
@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header"></div>
    <div class="card-body">
        <h1>Informações e Links</h1>
        <table class="tabelaConsultas">
                <thead>
                    <tr>
                        <th style="width: 20px; min-width: 20px;">
                        </th>
                        <th id="thCabecalho1" style="" class="ordenacao1" onclick="">BVS Informações e links uteis.
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
            <td style="" class="colunaID coluna0" >
                <p style="text-align: justify" >FLIEEN 02-04: Portal Regional da BVS - <a href="https://bvsalud.org/" target="_blank">Portal Regional da BVS.</a></p>
                <p style="text-align: justify" >FLIEEN 02-04: BVS Saúde Pública Brasil - <a href=" http://saudepublica.bvs.br/" target="_blank">BVS Saúde Pública Brasil.</a></p>
                <p style="text-align: justify" >FLIEEN 02-04: BVS Ministério da Saúde - <a href=" https://bvsms.saude.gov.br/" target="_blank">Biblioteca Virtual em Saúde MINISTÉRIO DA SAÚDE</a></p>
                <p style="text-align: justify" >FLIEEN 02-04: BVS Psicologia Brasil - <a href="http://www.bvs-psi.org.br/php/index.php" target="_blank">BVS Psicologia Brasil.</a></p>
                <p style="text-align: justify" >FLIEEN 02-04: BVS Enfermagem Brasil - <a href="https://bvsenfermeria.bvsalud.org/pt/brasil/" target="_blank">Biblioteca Virtual en Salud Enfermería | Enfermagem.</a></p>
                <p style="text-align: justify" >FLIEEN 02-04: BVS Saúde dos Povos Indígenas Brasil - <a href="http://bvsmig3.icict.fiocruz.br/" target="_blank">Biblioteca Virtual em Saúde Saúde dos Povos Indígenas.</a></p>
                <p style="text-align: justify" >FLIEEN 02-04: BVS Medicina Veterinária e Zootecnia - <a href="https://www.bvs-vet.org.br/" target="_blank">Medicina Veterinária e Zootecnia | BVS-VET.</a></p>
                <p style="text-align: justify" >FLIEEN 02-04: Biblioteca Virtual em Saúde do Adolescente - <a href=" http://www.adolec.uerj.br/" target="_blank">Literatura Científica e Técnica.</a></p>
                <p style="text-align: justify" >FLIEEN 02-04: BVS Enfermagem - <a href="https://pesquisa.bvsalud.org/enfermeria/" target="_blank">Portal de Pesquisa da BVS Enfermagem Informação e Conhecimento para a Saúde.</a></p>
                <p style="text-align: justify" >FLIEEN 02-04: BVS Instituto Evandro Chagas - <a href="http://bvs.iec.gov.br/iec/" target="_blank">BVS - Instituto Evandro Chagas.</a></p>

    
            </tbody>
    </table>
            <div class="form-group row">
                <div class="content-header-options-1 row-fluid">
            </div>
        </div>
    </div>
</div>
@endsection
