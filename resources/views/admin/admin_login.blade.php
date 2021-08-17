<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Biblioteca Ses-AM | Administradores</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ url('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ url('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ url('css/admin_css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ url('css/admin_css/custom.css') }}">

  <link rel="shortcut icon" href="images/front_images/ico/favicon-admin.jpg" />
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="{{ url('/admin') }}"><b>SES - AM</b><br>Painel Administrativo</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body" style="box-shadow: 0 0 10px 5px #6666664d;">
      <p class="login-box-msg">Faça login para iniciar sua sessão</p>


      @if(Session::has('error_message'))
        <div class="alert alert-warning" role="alert">
          {{ Session::get('error_message') }}
          Erro
        </div>
      @endif



      @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
  <form action="{{ url('/admin') }}" method="post">@csrf
    <div class="input-group mb-3">
      <input name="email" id="email" type="email" class="form-control" placeholder="Email">
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-envelope"></span>
        </div>
      </div>
    </div>
    <div class="input-group mb-3">
      <input name="password" id="password" type="password" class="form-control" placeholder="Senha">
      <div class="input-group-append">
        <div class="input-group-text">
          <span class="fas fa-lock"></span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-8">
        <div class="icheck-primary">
          <input type="checkbox" id="remember">
          <label for="remember">
            Lembre - se
          </label>
        </div>
      </div>
      <!-- /.col -->
      <div class="col-4">
        <button type="submit" class="btn btn-primary btn-block">Acessar</button>
      </div>
      <!-- /.col -->
    </div>
  </form>
      <div class="social-auth-links text-center mb-3">
        <p>Outras Opçoes</p>
        <a href="" class="btn btn-block btn-primary" style="box-shadow: 3px 4px 4px #007bffa6;">
          <i class="fab fa-facebook mr-2"></i> Acessar através do facebook
        </a>
        <a href="#" class="btn btn-block btn-danger" style="box-shadow: 3px 4px 4px #bd213052;">
          <i class="fab fa-google-plus mr-2"></i> Acessar através do Google+
        </a>
      </div>
      <!-- /.social-auth-links -->
      <p class="mb-1">
        <a href="forgot-password.html">Esqueci minha senha</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Registrar um novo usúario</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->
<!-- jQuery -->
<script src="{{ url('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ url('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('js/admin_js/adminlte.min.js') }}"></script>
</body>
</html>
