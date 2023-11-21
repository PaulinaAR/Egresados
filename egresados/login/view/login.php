<?php
require_once("c://xampp/htdocs/egresados/login/view/login.html");
?>
<div class="fondo-login">
    <div class="icon">
        <img src="/egresados/images/logo-icono-3.png" alt="logo_esc">
    </div>
    <div class="titulo">
        ¡Bienvenid@ Pantera!
    </div>
    <form class="col-3 login" autocomplete="off">
    <div class="mb-3">
          <label for="exampleInputNumControl1" class="form-label">Número de Control</label>
          <input type="text" name="num_control" class="form-control" id="exampleInputNumControl1" pattern="[C]?[0-9]{8}">
      </div>
      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Correo Institucional</label>
          <input type="email" name="correo" value="<?=(!empty($_GET['correo'])) ? $_GET['correo'] : "" ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <!--div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <div class="box-eye">
            <button type="button">
              <i id="eyepassword" class="fa-solid fa-eye ChangePassword"></i>
            </button>
          </div>
          <input type="password" name="contraseña" class="form-control" id="exampleInputPassword1">
      </div!-->
     <?php if(!empty($_GET['error']));?>
        <div id="alertError" style="margin: auto;" class="alert alert-danger mb-2" role="alert">
            <?= !empty($_GET['error']) ? $_GET['error'] : ""?>
        </div>
      <div class="d-grid gap-2">
          <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </form>
    </div>
  </div>