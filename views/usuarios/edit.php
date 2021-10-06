<div class="main">
    <main>
        <div class="card">
            <h2 class="card-title">Modificar usuario #<?php echo $usuario->getId();?></h2>
            <form action="<?php echo url('/editar-usuario')?>" method="POST" onsubmit="return verify(this);" autocomplete="off">
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
    <script type="text/javascript">
        function verify(form){
            resetValidations(form)
            let nombre = document.querySelector('#nombre');
            let apellido = document.querySelector('#apellido');
            let email = document.querySelector('#email');
            let valid = true;
            if(nombre.value.trim() == ''){
                valid = false;
                showInputError(nombre, 'Debe completar el campo')
            }
            if(apellido.value.trim() == ''){
                valid = false;
                showInputError(apellido, 'Debe completar el campo')
            }
            if(email.value.trim() == ''){
                valid = false;
                showInputError(email, 'Debe completar el campo')
            }
            return valid;
        }
    </script>
</div>