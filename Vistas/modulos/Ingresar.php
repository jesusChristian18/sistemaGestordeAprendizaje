<div class="login-box">
  <div class="login-logo">
  
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Inicio de Sesion</p>

    <form  method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="libreta" placeholder="libreta">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="clave" placeholder="contraseña">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
        </div>
        <!-- /.col -->
      </div>
      <?php 

      $ingreso = new UsuariosC();
      $ingreso -> IniciarSesionC();


       ?>
    </form>

   

  </div>
  <!-- /.login-box-body -->
</div>