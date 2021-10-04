<div class="main">
    <main>
        <div class="card">
            <h2 class="card-title">Nuevo usuario</h2>
            <form action="<?php echo url('/nuevo-usuario')?>" method="POST">
                <div class="input-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Ingrese el nombre" required>
                </div>
                <div class="input-group">
                    <label for="apellido">Apellido</label>
                    <input type="text" id="apellido" name="apellido" placeholder="Ingrese el apellido" required>
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Ingrese el email" required>
                </div>
                <div class="input-group">
                    <label for="password">Contraseña</label>
                    <input type="password" id="password" name="password" placeholder="Ingrese la contraseña" required>
                </div>
                <div class="justify-end">
                    <button class="btn btn-primary" type="submit">Guardar</button>
                </div>
            </form>
        </div>
    </main>
</div>