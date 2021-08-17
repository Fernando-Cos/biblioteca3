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
              <li class="breadcrumb-item active">Dados de Usúarios</li>
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
                      <!-- Button trigger modal -->
                    <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#viewModal">
                          <i class="fa fa-eye"></i>
                    </button>
                    <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#editModal">
                          <i class="fa fa-picel"></i>
                    </button>
                    <button type="button" class="btn btn-danger mb-1" data-toggle="modal" data-target="#deleteModal">
                          <i class="fa fa-trash"></i>
                    </button>
                  </td>
                </tr>
                <tr>
                  <td>fernando Amaral</td>
                  <td>User123</td>
                  <td>user@gmail.com</td>
                  <td>12/12/12</td>
                  <td>11/11/21</td>
                  <td>
                      <!-- Button trigger modal -->
                  <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#viewModal">
                     <i class="fa fa-eye"></i>
                  </button>
                  <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#editModal">
                  <i class="fa fa-picel"></i>
                  </button>
                  <button type="button" class="btn btn-danger mb-1" data-toggle="modal" data-target="#deleteModal">
                      <i class="fa fa-trash"></i>
                  </button>
                  </td>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>

    <div class="card card-primary card-outline">
        <div class="card-header">
          <h3 class="card-title" style="color: red;">
              <i class="fas fa-edit"></i>Em Teste</h3>
              </div>
            <div class="card-body">
          <p style="text-align: justify;">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
          sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est 
          laborum.
          </p>


<!-- Modal -->  
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelleadby="deleteModalLabel" data-backdrop="static" aria-hidden="true"
style="display: none;">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deleteModalLabel">Apagar dados</h5>
          <button type="button" class="close" data-dismiss="model" aria-label="Close">
              <span aria-hidden="true" data-dismiss="modal">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p style="color: red;">
            Em teste...
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-danger">Confirmar</button>
       </div>
      </div>
    </div>
</div>  

<div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelleadby="viewModalLabel" data-backdrop="static" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="viewModalLabel">Visualizar dados</h5>
          <button type="button" class="close" data-dismiss="model" aria-label="Close">
              <span aria-hidden="true" data-dismiss="modal">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>
          'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Confirmar</button>
       </div>
      </div>
    </div>
</div> 

<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelleadby="editModalLabel" data-backdrop="static" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel"> Editar Dados</h5>
          <button type="button" class="close" data-dismiss="model" aria-label="Close">
              <span aria-hidden="true" data-dismiss="modal">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">Confirmar</button>
       </div>
      </div>
    </div>
</div>


              





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