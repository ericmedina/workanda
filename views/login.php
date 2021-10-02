<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar sesión</title>
  <link rel="stylesheet" href="./static/css/main.css">
</head>
<body>
  <div class="content-login">
    <div class="card-login">
      <h2 class="card-title">Iniciar sesión</h2>
      <form action="<?php echo url('/')?>" method="GET">
        <div class="input-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" placeholder="Ingrese su email">
        </div>
        <div class="input-group">
          <label for="password">Contraseña</label>
          <input type="password" name="password" id="password" placeholder="Ingrese su contraseña">
        </div>
        <div class="justify-end">
          <button class="btn btn-primary" type="submit">Ingresar</button>
        </div>
      </form>
    </div>

  </div>
</body>
</html>