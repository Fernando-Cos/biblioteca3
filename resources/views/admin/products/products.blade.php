@extends('layouts.admin_layout.admin_layout')
@section('content')
    
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dados de Seções</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Posts</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            {{-- Mensagem de alert --}}
            @if(Session::has('error_message'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert" style="margin-top: 10px;">
              {{ Session::get('error_message') }}
              Erro[]
            </div>
          @endif
          @if(Session::has('success_message'))
          <div class="alert alert-success" role="alert" style="margin-top: 10px;">
            {{ Session::get('success_message') }}
          </div>
        @endif
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabelas de dados de Seções</h3>
                <a href="{{ url('admin/add-edit-product') }}"
                style="max-width: 100px; float:right; display: inline-block;" class="btn btn-block btn-success"><b>+ POST's</b></a>
              </div>
              <!-- /.card-header -->
            </div>
            <!-- /.card -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">POST'S</h3>
              </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="products" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>ID</th>
              <th>Produtos (nome POS't)</th>
              <th>produto codigo (POST's codigo)</th>
              <th>Session</th>
              <th>Categoria</th>
              {{-- <th>POST img</th> --}}
              <th>Status</th>
              <th>Ativos</th>
            </tr>
            </thead>
          <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->product_name }}</td>
                <td>{{ $product->product_code }}</td>
                <td>{{ $product->section->name }}</td>
                <td>{{ $product->category }}</td>
               
                <td>
                    @if($product->status ==1)
                        <a class="updateProductStatus" id="product-{{ $product->id }}" product_id="
                        {{ $product->id }}" href="javascript:void(0)">Ativo</a>
                    @else 
                        <a class="updateProductStatus" id="product-{{ $product->id }}" product_id="
                        {{ $product->id }}" href="javascript:void(0)">Inativo</a>
                    @endif
                </td>
              <td>
                  <a href="{{ url('admin/add-edit-product/'.$product->id) }}">Editar</a>&nbsp;&nbsp;
                  {{-- <a class="confirmDelete" name="product" href="{{ url('admin/delete-category/'.$category->id) }}">Deletar</a> --}}
                  <a href="javascript:void(0)" class="confirmDelete" record="product" recordid="{{ $product->id }}" <?php /*href="{{ url('admin/delete-product/'.$product->id) }}" */ ?>>Deletar</a>
              </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>

@endsection