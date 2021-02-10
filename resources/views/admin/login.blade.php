<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Caracas Digital | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->


  {!!Html::style('plugins/fontawesome-free/css/all.min.css')!!}
  {!!Html::style('plugins/icheck-bootstrap/icheck-bootstrap.min.css')!!}
  {!!Html::style('dist/css/adminlte.min.css')!!}


</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Caracas</b>Digital {{ session('user') }}</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg"> <?php echo isset($msg) ?  $msg: "Regístrese para iniciar su sesión"; ?> </p>

      <form action="cpanel/home" method="post">
      	 @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="usuario" id="usuario"  placeholder="Usuario" required="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="clave" id="clave" class="form-control" placeholder="Clave" required="">
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
                Recordarme
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- <div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">Olvid&eacute; mi contrase&ntilde;a</a>
      </p>
      <!-- <p class="mb-0">
        <a href="register.html" class="text-center">Registar nuevo usuario</a>
      </p> -->
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
  {!!Html::script('plugins/jquery/jquery.min.js')!!}

<!-- Bootstrap 4 -->
 {!!Html::script('plugins/jquery/jquery.min.js')!!}

<!-- AdminLTE App -->
 {!!Html::script('plugins/bootstrap/js/bootstrap.bundle.min.js')!!}

</body>
</html>
