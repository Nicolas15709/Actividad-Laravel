<!DOCTYPE html>
<html lang="es">
<head>
    <title>Crea tu Cuenta</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilo.css"> 
</head>
<body>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded-3 bg-light"> <div class="card-body p-4">
                        <h2 class="mb-4 text-center">Crea una Nueva Cuenta</h2>
                        <form id="signup-form" action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Nombre:</label>
                                        <input type="text" id="name" name="name" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="surname">Apellido:</label>
                                        <input type="text" id="surname" name="surname" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="country">País:</label>
                                        <select id="country" name="country" class="form-control" required>
                                            <option value="">Selecciona tu país</option>
                                            <option value="ec">Ecuador</option>
                                            <option value="co">Colombia</option>
                                            <option value="vz">Venezuela</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="city">Ciudad:</label>
                                        <input type="text" id="city" name="city" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                            <label for="email">Dirección de Email:</label>
                            <input type="email" id="email" name="email" class="form-control" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$">
                            <span class="email-error-msg" style="color: red; display: none;">Por favor ingresa una dirección de correo electrónico válida.</span>
                            </div>


                            <div class="form-group">
                                <label for="login">Nombre de Usuario:</label>
                                <input type="text" id="login" name="login" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="password">Contraseña:</label>
                                <input type="password" id="password" name="password" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="confirmPassword">Confirmar Contraseña:</label>
                                <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" required>
                                <span class="password-error-msg" style="color: red; display: none;">Las contraseñas no coinciden.</span>
                            </div>


                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
                                <label class="form-check-label" for="terms">Estoy de acuerdo con los <a href="{{ route('Terminos-De-Servicio') }}">Terminos de servicio</a> y <a href="{{ route('Politica-De-Privacidad') }}">Política de privacidad</a></label>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block mt-4">Crear Cuenta</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <script>
    // Obtener referencias a los campos de contraseña y confirmación de contraseña
    const passwordInput = document.getElementById('password');
    const confirmPasswordInput = document.getElementById('confirmPassword');
    const passwordErrorMsg = document.querySelector('.password-error-msg');
    const emailInput = document.getElementById('email');
    const emailErrorMsg = document.querySelector('.email-error-msg');

    // Función para verificar si las contraseñas coinciden
    function validarContraseñas() {
        if (passwordInput.value !== confirmPasswordInput.value) {
            // Si las contraseñas no coinciden, mostrar el mensaje de error
            passwordErrorMsg.style.display = 'block';
            return false; // Devolver false para evitar que el formulario se envíe
        } else {
            // Si las contraseñas coinciden, ocultar el mensaje de error
            passwordErrorMsg.style.display = 'none';
            return true; // Devolver true para permitir el envío del formulario
        }
    }

    // Agregar un event listener al campo de confirmación de contraseña para verificar la coincidencia
    confirmPasswordInput.addEventListener('input', validarContraseñas);

    // Agregar un event listener al formulario para verificar las contraseñas antes de enviar
    document.getElementById('signup-form').addEventListener('submit', function(event) {
        if (!validarContraseñas()) {
            // Mostrar una alerta si las contraseñas no coinciden
            alert('Las contraseñas no coinciden. Por favor, verifique y vuelva a intentarlo.');
            event.preventDefault(); // Detener el envío del formulario
        }
    });

    // Función para verificar la validez del correo electrónico
    function validarCorreoElectronico() {
        if (!emailInput.validity.valid) {
            // Si el correo electrónico no es válido, mostrar el mensaje de error
            emailErrorMsg.style.display = 'block';
        } else {
            // Si el correo electrónico es válido, ocultar el mensaje de error
            emailErrorMsg.style.display = 'none';
        }
    }

    // Agregar un event listener al campo de correo electrónico para verificar su validez
    emailInput.addEventListener('input', validarCorreoElectronico);

    // Ejecutar la validación de las contraseñas y el correo electrónico cuando la página se carga inicialmente
    window.addEventListener('load', function() {
        validarContraseñas();
        validarCorreoElectronico();
    });
  </script>

<script>
        // Verificar la preferencia del usuario en el almacenamiento local
        const modoOscuroActivado = localStorage.getItem('modoOscuro') === 'true';

        if (modoOscuroActivado) {
            const body = document.querySelector('body');
            
            const textElements = document.querySelectorAll('.text-center');

            body.classList.add('bg-dark');
            textElements.forEach(element => {
                element.classList.add('text-black');
            });
        }
    </script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
