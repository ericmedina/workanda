<div class="main">
    <main>
        <div class="card">
            <h2 class="card-title">Nuevo usuario</h2>
            <?php include_once path('/views/layout/message.php'); ?>
            <form action="<?php echo url('/nuevo-usuario')?>" method="POST" onsubmit="return verify(this);" autocomplete="off">
                <div class="input-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Ingrese el nombre" required >
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
                <div class="input-group">
                    <label for="password">Repetir contraseña</label>
                    <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Repita la contraseña" required >
                </div>
                <div class="justify-end">
                    <button class="btn btn-primary" type="submit">Guardar</button>
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
            let password = document.querySelector('#password');
            let confirmpassword = document.querySelector('#confirmpassword');
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
            if(password.value.trim() == ''){
                valid = false;
                showInputError(password, 'Debe completar el campo')
            }
            if(confirmpassword.value.trim() == ''){
                valid = false;
                showInputError(confirmpassword, 'Debe completar el campo')
            }
            if(password.value.trim() !== confirmpassword.value.trim()){
                valid = false;
                showInputError(confirmpassword, 'Las contraseñas deben coincidir')
            }
            return valid;
        }
    </script>
</div>