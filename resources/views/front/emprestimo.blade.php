@extends('layouts.app')
@section('title', 'Emprestimo de obras')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header"></div>
    <div class="card-body">
        <h1>EMPRESTIMO DE OBRAS</h1><BR>
            <div class="form-group row" style="font-size: 12pt;">
                <p>O empréstimo de obras físicas da biblioteca é um serviço disponibilizado aos servidores, 
                colaboradores e estagiários da SES-AM. Antes, porém, é necessário fazer o cadastro no Biblivre.</p>
                <h4>Cadastro de usuários</h4>
                <p>Para efetuar cadastro o usuário deverá apresentar na Biblioteca os seguintes documentos: </p><br>
                <h4>Servidor:</h4><p>Crachá ou contracheque + um documento com foto</p>
                <h4>Colaborador:</h4>
                <p>Contrato ou contracheque + um documento com foto </p>
                <h4>Estagiário:</h4>
                <p>Cópia do contrato + um documento com foto</p><br>
                <p><b>Empréstimo Domiciliar:</b> é aquele que faz a retirada de material para consulta fora da biblioteca.
                (Serviço para usuários com vínculo com a SES/AM, que estejam cadastrados na biblioteca) </p><br>
                
                <p><b>Consulta local:</b> é o empréstimo do material que só pode ser consultado no ambiente da biblioteca,
                tendo a possibilidade de ser emprestado no horário de fechamento e devolução no horário de abertura do próximo dia. </p><br>
                
                <p><b>Renovação:</b>O material emprestado poderá ser renovado desde que não esteja em atraso ou possua reserva.
                Esta renovação pode ser solicitada pelo  e-mail: <a href="">bibliotecases.am@gmail.com</a> com o Assunto: RENOVAÇÃO DE MATERIAL.</p><br>
                
                <p><b>Reservas:</b> é permitido fazer dos materiais que estiverem emprestados. A reserva pode ser solicitada pelo  e-mail:
                bibliotecases.am@gmail.com com o Assunto: RESERVA DE MATERIAL ou diretamente na biblioteca. </p><br>
                
                <p>As obras de caráter literário poderão ser emprestadas pelo prazo de 15
                dias úteis - podendo ser renovado por mais 15 dias.</p>

                <p>Limites e Prazos de empréstimo domiciliar: as obras de caráter técnico poderão ser
                emprestadas pelo prazo de 7 dias úteis - podendo ser renovado por mais 7.</p>
                <div class="content-header-options-1 row-fluid">
                    
            </div>
        </div>
    </div>
</div>
@endsection
