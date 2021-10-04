<div class="main">
    <main>
        <div class="card">
            <h2 class="card-title">Modificar usuario #<?php echo $usuario->getId();?></h2>
            <form action="<?php echo url('/editar-usuario')?>" method="POST">
                <input type="hidden" name="id" value="<?php echo $usuario->getId(); ?>">
                <div class="input-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" value="<?php echo $usuario->getNombre() ?>"
                        placeholder="Ingrese el nombre" required>
                </div>
                <div class="input-group">
                    <label for="apellido">Apellido</label>
                    <input type="text" id="apellido" name="apellido" value="<?php echo $usuario->getApellido() ?>"
                        placeholder="Ingrese el apellido" required>
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="<?php echo $usuario->getEmail() ?>"
                        placeholder="Ingrese el email" required>
                </div>
                <div class="justify-end">
                    <button class="btn btn-primary" type="submit">Modificar</button>
                </div>
            </form>
        </div>
    </main>
</div>