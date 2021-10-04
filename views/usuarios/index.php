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
      <div class="card">
        <h2 class="card-title">Listado de usuarios</h2>
        <div class="actions-table">
          <a class="btn btn-primary" href="<?php echo url('/nuevo-usuario') ?>">Nuevo usuario</a>
          <form class="filter">
            <div class="input-group">
              <label for="">Buscar</label>
              <input type="text" id="buscar" name="buscar" placeholder="Buscar por nombre y/o apellido">
            </div>
            <button type="submit" class="btn btn-primary">Buscar</button>
          </form>
        </div>
        <table>
          <thead>
            <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Email</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($usuarios as $usuario){ ?>
            <tr>
              <td><?php echo $usuario['id'] ?></td>
              <td><?php echo $usuario['nombre'] ?></td>
              <td><?php echo $usuario['apellido'] ?></td>
              <td><?php echo $usuario['email'] ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</body>
</html>