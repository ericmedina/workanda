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
                <h2 class="card-title">Nuevo usuario</h2>
                <form action="<?php echo url('/nuevo-usuario')?>" method="POST">
                    <div class="input-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Ingrese el nombre">
                    </div>
                    <div class="input-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" id="apellido" name="apellido" placeholder="Ingrese el apellido">
                    </div>
                    <div class="input-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Ingrese el email">
                    </div>
                    <div class="input-group">
                        <label for="password">Contraseña</label>
                        <input type="password" id="password" name="password" placeholder="Ingrese la contraseña">
                    </div>
                    <div class="justify-end">
                        <button class="btn btn-primary" type="submit">Guardar</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>

</html>