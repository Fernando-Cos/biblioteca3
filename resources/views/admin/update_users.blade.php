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

          <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-edit"></i>
                  Modal Examples
                </h3>
              </div>
              <div class="card-body">

                <!-- EM TESTE -->
                <!-- Button trigger modal -->
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
                Launch demo modal
                </button> -->

                <!-- Modal -->
                <!-- <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalScrollableTitle">Em teste</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body" style = "color: red;">
                    EM TESTE!
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fehar</button>
                    <button type="button" class="btn btn-primary">Salvar e Sair</button>
                  </div>
                </div>
                </div>
                </div> -->
                <!-- EM TESTE -->


                
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-secondary mb-1" data=toggle="modal"
                    data-target="#smallmodal">
                    Small
                </button>

                <button type="button" class="btn btn-secondary mb-1" data=toggle="modal"
                    data-target="#mediumModal">
                    Meduim 
                </button>

                <button type="button" class="btn btn-secondary mb-1" data=toggle="modal"
                    data-target="#staticModal">
                    Statics
                </button>

                <!-- Modal -->


              





                <!-- 
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                  Launch Default Modal
                </button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-primary">
                  Launch Primary Modal
                </button>
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal-secondary">
                  Launch Secondary Modal
                </button>
                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-info">
                  Launch Info Modal
                </button>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger">
                  Launch Danger Modal
                </button>
                <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-warning">
                  Launch Warning Modal
                </button>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-success">
                  Launch Success Modal
                </button>
                <br>
                <br>
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-sm">
                  Launch Small Modal
                </button>
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg">
                  Launch Large Modal
                </button>
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-xl">
                  Launch Extra Large Modal
                </button>
                <br>
                <br>
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-overlay">
                  Launch Modal with Overlay
                </button>
              </div> -->
              <!-- /.card -->
            </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

@endsection 