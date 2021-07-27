@extends('layouts.admin_layout.admin_layout')
@section('content')

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Categorias</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">POST's</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
      @if ($errors->any())
      <div class="alert alert-danger" style="margin: 10px;">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif
  {{-- Mensagem de success --}}
  @if(Session::has('success_message'))
  <div class="alert alert-success alert-dismissible fade show" role="alert" style="margin-top: 10px;">
    {{ Session::get('success_message') }}
   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
   </button>
  </div>
@endif
<form name="productForm" id="ProductForm" @if(empty($productdata['id'])) action="{{ url('admin/add-edit-product') }}" @else action="{{ url('admin/add-edit-product/'.$productdata['id']) }}" @endif method="POST" enctype="multipart/form-data">@csrf
  <div class="card card-default">
    <div class="card-header">
      <h3 class="card-title">{{ $title }}</h3>
      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <!-- /.card-header -->
<div class="card-body">
<div class="row">
  <div class="col-md-6">
    <div class="form-group">
        <label for="product_name">Nome Do POST's</label>
        <input type="text" class="form-control" name="product_name"  id="product_name" placeholder="Nome da Categoria" 
        @if(!empty($productdata['product_name'])) value="{{ $productdata['product_name'] }}" @else value="{{ old('product_name') }}" @endif>
      </div>
      </div>

      <div class="col-md-6">
        <div class="form-group">
            <label>Selecione Categoria </label>
            <select name="category_id" id="category_id" class="form-control select2" style="width: 100%;">
              <option value="">Selecione</option>
            </select>
          </div></div>

          <div class="col-md-6">
            <div class="form-group">
              <label for="product_code">Coder POST's</label>
              <input type="text" class="form-control" name="product_code"  id="product_code" placeholder="code da Categoria" 
              @if(!empty($productdata['product_code'])) value="{{ $productdata['product_code'] }}" @else value="{{ old('product_code') }}" @endif>
            </div>


      {{-- <label for="product_name">Disconto da Categoria (numero da categoria)</label>
      <input type="text" class="form-control" id="product_discount" 
      name="product_discount" placeholder="valor da categoria"
      @if(!empty($productdata['product_discount'])) value="{{ $productdata['product_discount'] }}" @else value="{{ old('product_discount') }}" @endif>
       --}}
      <label for="product_name">Descrição Categoria</label>
      <textarea name="description" id="description" class="form-control" rows="6">
        @if(!empty($productdata['description'])){{ $productdata['description']}}@else{{old('description')}}@endif
      </textarea>
  </div>  
              <div class="col-md-6">
            <div class="form-group">
              <label for="exempleInputFile">Imagem Categoria</label>
              <div class="input-group">
                  <div class="custom-file">
                      <input type="file" class="custom-file-input" id="product_image" name="product_image">
                      <label class="custom-file-label" for="product_image">Chosse file</label>
                  </div>
                  <div class="input-group-append">
                      <span class="input-group-text" id="">Upload</span>
                  </div>
                </div>
                  @if(!empty($productdata['product_image']))
                  <div>
                    <img style="width:75px; margin-top: 5px;"src="{{ asset('images/product_images/'.$productdata['product_image']) }}">
                    &nbsp;
                    <a class="confirmDelete" href="javascript:void(0)" record="product-image" recordid="{{ $productdata['id'] }}" <?php /* href="{{ url('admin/delete-product-image/'.$productdata['id']) }}" */ ?>>Apagar Imagem</a>
                  </div>
                  @endif
              </div>
              <label for="product_name">URL da Categoria</label>
              <input type="text" class="form-control" id="url" name="url" placeholder="Nome da Categoria"
              @if(!empty($productdata['url'])) value="{{ $productdata['url'] }}" @else value="{{ old('url') }}" @endif>
              {{-- <div class="form-group">
                <label for="product_name">Meta Title</label>
                <textarea id="meta_title" name="meta_title" class="form-control" rows="6"></textarea> --}}
                {{-- <label for="product_name">Meta Keyousd</label>
                <textarea id="meta_keywords" name="meta_keywords" class="form-control" rows="6" placeholder="defg"></textarea> --}}
            </div> 
        </div>
        </div>
      </div>
      </div>
    <div class="card-footer">
    <button type="submit" class="btn btn-dark">Enviar</button>
  </div>
</form>
</div>
<!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>

@endsection