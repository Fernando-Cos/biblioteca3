@extends('layouts.admin_layout.admin_layout')
@section('content')
    
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tabela de Usúarios</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title" style="color: red;">Em teste</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="users" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Nome</th>
                  <th>User_Id</th>
                  <th>E-mail</th>
                  <th>Criado Em:</th>
                  <th>Atualizado Em:</th>
                  <th>Ativo</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>fernando Amaral</td>
                  <td>User123</td>
                  <td>user@gmail.com</td>
                  <td>12/12/12</td>
                  <td>11/11/21</td>
                  <td>
                      <button class="btn btn-success">teste</button>
                      <button class="btn btn-success">teste</button>
                      <button class="btn btn-success">teste</button>
                  </td>
                </tr>
                <tr>
                  <td>fernando Amaral</td>
                  <td>User123</td>
                  <td>user@gmail.com</td>
                  <td>12/12/12</td>
                  <td>11/11/21</td>
                  <td>
                      <button class="btn btn-success">teste</button>
                      <button class="btn btn-success">teste</button>
                      <button class="btn btn-success">teste</button>
                  </td>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
        
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

@endsection 