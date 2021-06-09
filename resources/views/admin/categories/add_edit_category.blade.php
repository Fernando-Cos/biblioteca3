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
              <li class="breadcrumb-item active">Categorias</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <section class="content">
      <div class="container-fluid">
        <form name="categoryForm" id="CategoryForm" action="{{ url('admin/add-edit-category') }}" method="POST" enctype="multipart/form-data">@csrf
          <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Adicionar Categoria</h3>
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
                <label for="category_name">Nome Da Categoria</label>
                <input type="text" class="form-control" name="category_name"  id="category_name" placeholder="Nome da Categoria">
              </div>
              <div class="form-group">
                <label>Nivel Categoria</label>
                <select name="parent_id" id="parent_id" class="form-control select2" style="width: 100%;">
                  <option value="0">Categoria Principal</option>
                </select>
              </div>
              <label for="category_name">Disconto da Categoria</label>
              <input type="text" class="form-control" id="category_discount" name="category_discount" placeholder="Nome da Categoria">

              <label for="category_name">Descrição Categoria</label>
              <textarea name="description" id="description" class="form-control" rows="6"></textarea>

              <label for="category_name">Meta Descrição</label>
                <textarea id="meta_description" name="meta_description" class="form-control" rows="6" placeholder="defg"></textarea>
           
          </div>
                <div class="col-md-6">
                  <div class="form-group">
                      <label>Selecione Seções </label>
                      <select name="section_id" id="section_id" class="form-control select2" style="width: 100%;">
                        <option value="0">Selecione</option>
                        @foreach($getSections as $section)
                        <option value="{{ $section->id }}">{{ $section->name }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exempleInputFile">Imagem Categoria</label>
                      <div class="input-group">
                          <div class="custom-file">
                              <input type="file" class="custom-file-input" id="category_image" name="category_image">
                              <label class="custom-file-label" for="category_image">Chosse file</label>
                          </div>
                          <div class="input-group-append">
                              <span class="input-group-text" id="">Upload</span>
                          </div>
                      </div>
                      <label for="category_name">URL da Categoria</label>
                      <input type="text" class="form-control" id="url" name="url" placeholder="Nome da Categoria">
                      <div class="form-group">
                          <label for="category_name">Meta Title</label>
                          <textarea id="meta_title" name="meta_title" class="form-control" rows="6"></textarea>

                          <label for="category_name">Meta Keyousd</label>
                          <textarea id="meta_keywords" name="meta_keywords" class="form-control" rows="6" placeholder="defg"></textarea>
                  
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