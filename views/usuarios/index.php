<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Listado de usuarios</title>
  <link rel="stylesheet" href="./static/css/main.css">
</head>
<body>
  <div class="main">
    <nav>
  
    </nav>
    <main>
      <h2>Listado de usuarios</h2>
      <table>
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
          </tr>
        </thead>
      </table>
      <a href="<?php echo url('/login'); ?>">Ir a iniciar sesión</a>
    </main>
  </div>
</body>
</html>