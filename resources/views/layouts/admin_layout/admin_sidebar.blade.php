  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard" class="brand-link">
      <img src="{{ asset('images/admin_images/logo-admin.svg') }}" alt="AdminLTE Logo" class="brand-image elevation" style="opacity: .8">
      <span class="brand-text font-weight-light">Administração</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('images/admin_images/admin_photos/'.Auth::guard('admin')->user()->image) }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ ucwords(Auth::guard('admin')->user()->name) }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
            @if (Session::get('page')=="dashboard")
              <?php $active = "active"; ?>
            @else
              <?php $active = ""; ?>
            @endif
        <li class="nav-item">
          <a href="{{ url('admin/dashboard') }}" class="nav-link {{ $active }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>

         {{-- Configuracoes --}}
            @if(Session::get('page')=="settings" || Session::get('page')=="update-admin-details")
              <?php $active = "active"; ?>
            @else
              <?php $active = ""; ?>
            @endif
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link  {{ $active }}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Configurações
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @if (Session::get('page')=="settings")
               <?php $active = "active"; ?>
              @else
                <?php $active = ""; ?>
              @endif
              <li class="nav-item">
                <a href="{{ url('admin/settings')}}" class="nav-link {{ $active }} ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Atualizar senha ADM</p>
                </a>
              </li>
              @if (Session::get('page')=="update-admin-details")
                <?php $active = "active"; ?>
              @else
                <?php $active = ""; ?>
              @endif
              <li class="nav-item">
                <a href="{{ url('admin/update-admin-details') }}" class="nav-link {{ $active }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Atualizar detalhes ADM</p>
                </a>
          </li>



          



          <!-- Alterar isso aqui depois -->
          @if (Session::get('page')=="update-users")
                <?php $active = "active"; ?>
              @else
                <?php $active = ""; ?>
              @endif
              <li class="nav-item">
                <a href="{{ url('admin/update-users') }}" class="nav-link {{ $active }}">
                <i class="fa fa-user-circle nav-icon" aria-hidden="true" > </i>
                  <p>Atualizar Usúarios</p>
                </a>
          </li>
          <!-- Alterar isso aqui depois -->





          
          <!-- Alterar isso aqui depois -->
          @if (Session::get('page')=="update-admin-details1")
                <?php $active = "active"; ?>
              @else
                <?php $active = ""; ?>
              @endif
              <li class="nav-item">
                <a href="{{ url('admin/update-admin-details') }}" class="nav-link {{ $active }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:red;">Em teste</p>
                </a>
          </li>
          <!-- Alterar isso aqui depois -->

          <!-- Alterar isso aqui depois -->
            @if (Session::get('page')=="update-admin-details1")
                <?php $active = "active"; ?>
              @else
                <?php $active = ""; ?>
              @endif
              <li class="nav-item">
                <a href="{{ url('admin/update-admin-details') }}" class="nav-link {{ $active }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p style="color:red;">Em teste</p>
                </a>
          </li>
          <!-- Alterar isso aqui depois -->






          {{-- Catalagos --}}
          @if(Session::get('page')=="sections" || Session::get('page')=="categories")
          <?php $active = "active"; ?>
        @else
          <?php $active = ""; ?>
        @endif
      <li class="nav-item has-treeview menu-open">
        <a href="#" class="nav-link  {{ $active }}">
          <i class="nav-icon fas fa-th"></i>
          <p>
            Catalogos
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          @if (Session::get('page')=="sections")
           <?php $active = "active"; ?>
          @else
            <?php $active = ""; ?>
          @endif
          <li class="nav-item">
            <a href="{{ url('admin/sections')}}" class="nav-link {{ $active }} ">
              <i class="far fa-circle nav-icon"></i>
              <p>Sessões</p>
            </a>
          </li>
          @if (Session::get('page')=="categories")
            <?php $active = "active"; ?>
          @else
            <?php $active = ""; ?>
          @endif
          <li class="nav-item">
            <a href="{{ url('admin/categories') }}" class="nav-link {{ $active }}">
              <i class="far fa-circle nav-icon"></i>
              <p>Categorias</p>
            </a>
       </li>
       @if (Session::get('page')=="products")
       <?php $active = "active"; ?>
     @else
       <?php $active = ""; ?>
     @endif
     <li class="nav-item">
       <a href="{{ url('admin/products') }}" class="nav-link {{ $active }}">
         <i class="far fa-circle nav-icon"></i>
         <p>POST's</p>
       </a>
  </li>




<!-- Alterar isso aqui depois inicio  -->
@if (Session::get('page')=="products")
<?php $active = "active"; ?>
@else
<?php $active = ""; ?>
@endif
<li class="nav-item">
<a href="{{ url('admin/products') }}" class="nav-link {{ $active }}">
  <i class="fa fa-address-book"></i>
  <p>Cadastro de informações</p>
</a>
</li>
<!--  Alterar isso depois fim  -->















<!-- Alterar isso aqui depois inicio  -->
  @if (Session::get('page')=="products")
       <?php $active = "active"; ?>
     @else
       <?php $active = ""; ?>
     @endif
     <li class="nav-item">
       <a href="{{ url('admin/products') }}" class="nav-link {{ $active }}">
         <i class="fa fa-address-book"></i>
         <p>Cadastrar Ebook's</p>
       </a>
  </li>
  <!--  Alterar isso depois fim  -->



<!-- Alterar isso aqui depois inicio  -->
@if (Session::get('page')=="products")
       <?php $active = "active"; ?>
     @else
       <?php $active = ""; ?>
     @endif
     <li class="nav-item">
       <a href="{{ url('admin/products') }}" class="nav-link {{ $active }}">
         <i class="fa fa-archive" ></i>
         <p>Cadastrar Artigos</p>
       </a>
  </li>
  <!--  Alterar isso depois fim  -->
  
  <!-- Alterar isso aqui depois inicio  -->
  @if (Session::get('page')=="products")
       <?php $active = "active"; ?>
     @else
       <?php $active = ""; ?>
     @endif
     <li class="nav-item">
       <a href="{{ url('admin/products') }}" class="nav-link {{ $active }}">
         <i class="fa fa-briefcase"></i>
         <p>Cadastrar Treinamentos</p>
       </a>
  </li>
  <!--  Alterar isso depois fim  -->

  <!-- Alterar isso aqui depois inicio  -->
  @if (Session::get('page')=="products")
       <?php $active = "active"; ?>
     @else
       <?php $active = ""; ?>
     @endif
     <li class="nav-item">
       <a href="{{ url('admin/products') }}" class="nav-link {{ $active }}">
         <i class="fa fa-calendar"></i>
         <p>Cadastrar Eventos</p>
       </a>
  </li>
  <!--  Alterar isso depois fim  -->


  <!-- Alterar isso aqui depois inicio  -->
  @if (Session::get('page')=="products")
       <?php $active = "active"; ?>
     @else
       <?php $active = ""; ?>
     @endif
     <li class="nav-item">
       <a href="{{ url('admin/products') }}" class="nav-link {{ $active }}">
         <i class="fa fa-medkit"></i>
         <p>Saúde Literaria </p>
       </a>
  </li>
  <!--  Alterar isso depois fim  -->



  <!-- Alterar isso aqui depois inicio  -->
  @if (Session::get('page')=="products")
       <?php $active = "active"; ?>
     @else
       <?php $active = ""; ?>
     @endif
     <li class="nav-item">
       <a href="{{ url('admin/products') }}" class="nav-link {{ $active }}">
         <i class="fa fa-heartbeat"></i>
         <p>Minha Saúde </p>
       </a>
  </li>
  <!--  Alterar isso depois fim  -->



        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>