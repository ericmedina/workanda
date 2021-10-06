  <div class="content-login">
    <div class="card-login">
      <h2 class="card-title">Iniciar sesión</h2>
      <form action="<?php echo url('/login')?>" method="POST">
        <div class="input-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" placeholder="Ingrese su email" >
        </div>
        <div class="input-group">
          <label for="password">Contraseña</label>
          <input type="password" name="password" id="password" placeholder="Ingrese su contraseña" inputmode="email">
        </div>
        <div class="justify-end">
          <button class="btn btn-primary" type="submit">Ingresar</button>
        </div>
      </form>
    </div>
  </div>