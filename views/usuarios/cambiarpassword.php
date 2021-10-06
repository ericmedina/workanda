<div class="main">
    <main>
        <div class="card">
            <h2 class="card-title">Cambiar password</h2>
            <?php include_once path('/views/layout/message.php'); ?>
            <form action="<?php echo url('/cambiar-password')?>" method="POST" onsubmit="return verify(this);" autocomplete="off">
                <div class="input-group">
                    <label for="oldpassword">Contraseña actual</label>
                    <input type="password" id="oldpassword" name="oldpassword" placeholder="Ingrese la contraseña" required autocomplete="new-password">
                </div>
                <div class="input-group">
                    <label for="password">Nueva contraseña</label>
                    <input type="password" id="password" name="password" placeholder="Ingrese la contraseña" required autocomplete="new-password">
                </div>
                <div class="input-group">
                    <label for="confirmpassword">Repetir nueva contraseña</label>
                    <input type="password" id="confirmpassword" name="confirmpassword" placeholder="Repita la contraseña" required  autocomplete="new-password">
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
            let oldpassword = document.querySelector('#oldpassword');
            let password = document.querySelector('#password');
            let confirmpassword = document.querySelector('#confirmpassword');
            let valid = true;
            if(oldpassword.value.trim() == ''){
                valid = false;
                showInputError(oldpassword, 'Debe completar el campo')
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