<div class="main">
  <main>
    <div class="card">
      <h2 class="card-title">Datos de usuario #<?php echo $usuario->getId() ?></h2>
      <div class="">
        <div class="input-group">
          <label for="nombre">Nombre</label>
          <input type="text" id="nombre" name="nombre" readonly class="readonly"
            value="<?php echo $usuario->getNombre(); ?>" placeholder="Ingrese el nombre">
        </div>
        <div class="input-group">
          <label for="apellido">Apellido</label>
          <input type="text" id="apellido" name="apellido" readonly class="readonly"
            value="<?php echo $usuario->getApellido(); ?>" placeholder="Ingrese el apellido">
        </div>
        <div class="input-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" readonly class="readonly"
            value="<?php echo $usuario->getEmail(); ?>" placeholder="Ingrese el email">
        </div>
      </div>
      <div class="space-between">
        <div class="space-between">
          <a href="<?php echo url('/editar-usuario?id='.$usuario->getId()); ?>" class="btn btn-warning">Editar</a>
          <form action="<?php echo url('/eliminar-usuario'); ?>" method="post">
            <input type="hidden" name="id" value="<?php echo $usuario->getId(); ?>">
            <button type="submit" class="btn btn-error">Eliminar</button>
          </form>
          <!-- <a href="<?php echo url('/eliminar-usuario?id='.$usuario->getId()); ?>" class="btn btn-error">Eliminar</a> -->
        </div>
        <a href="<?php echo url('/') ?>" class="btn btn-flat-primary">Volver</a>
      </div>
    </div>
  </main>
</div>