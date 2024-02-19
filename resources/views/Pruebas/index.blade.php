<!DOCTYPE html>
<html lang="es">
<head>
    <title>Inicio de sesión</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        body {
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .theme-switch {
            --toggle-size: 24px; /* Tamaño del botón */
            --container-width: 3.5em; /* Ancho del contenedor */
            --container-height: 1.75em; /* Altura del contenedor */
            --container-light-bg: #3D7EAE;
            --circle-container-diameter: 2.5em; /* Diámetro del contenedor circular */
            --sun-moon-diameter: 1.5em; /* Diámetro del sol o la luna */
            --sun-bg: #ECCA2F;
            --moon-bg: #C4C9D1;
            --spot-color: #959DB1;
            --circle-container-offset: calc((var(--circle-container-diameter) - var(--container-height)) / 2 * -1);
        }

        .theme-switch,
        .theme-switch *,
        .theme-switch *::before,
        .theme-switch *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-size: 24px; /* Tamaño del ícono */
        }

        .logo {
            position: absolute;
            top: 20px; /* Adjust as needed */
            left: 20px; /* Adjust as needed */
            width: 100px; /* Adjust as needed */
            height: auto;
       }
       /* Estilos para el logo */
       .logo {
            background-color: transparent;
        }


        .logo img {
            background-color: transparent;
            mix-blend-mode: multiply;
        }

 
 
        .container {
            width: var(--container-width);
            height: var(--container-height);
            background-color: var(--container-light-bg);
            border-radius: calc(var(--container-height) / 2);
            overflow: hidden;
            cursor: pointer;
            transition: background-color 0.3s ease;
            position: relative;
        }

        .container::before {
            content: "";
            position: absolute;
            z-index: 1;
            inset: 0;
            box-shadow: 0 1px 2px rgba(0,0,0,0.1);
        }

        .checkbox {
            display: none;
        }

        .circle-container {
            width: var(--circle-container-diameter);
            height: var(--circle-container-diameter);
            background-color: rgba(255, 255, 255, 0.1);
            position: absolute;
            left: var(--circle-container-offset);
            top: var(--circle-container-offset);
            border-radius: 50%;
            overflow: hidden;
            transition: left 0.3s ease;
        }

        .sun-moon-container {
            pointer-events: auto;
            position: relative;
            z-index: 2;
            width: var(--sun-moon-diameter);
            height: var(--sun-moon-diameter);
            margin: auto;
            border-radius: 50%;
            background-color: var(--sun-bg);
            box-shadow: 0 0 0.5em rgba(0, 0, 0, 0.2);
            overflow: hidden;
            transition: background-color 0.3s ease;
        }

        .moon {
            width: 100%;
            height: 100%;
            background-color: var(--moon-bg);
            border-radius: 50%;
            transform: translateX(100%);
            transition: transform 0.3s ease;
        }

        .spot {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 25%;
            height: 25%;
            border-radius: 50%;
            background-color: var(--spot-color);
            transform: translate(-50%, -50%);
        }

        .checkbox:checked + .container {
            background-color: #1D1F2C;
        }

        .checkbox:checked + .container .circle-container {
            left: calc(100% - var(--circle-container-offset) - var(--circle-container-diameter));
        }

        .checkbox:checked + .container .circle-container:hover {
            left: calc(100% - var(--circle-container-offset) - var(--circle-container-diameter) - 0.187em);
        }

        .circle-container:hover {
            left: calc(var(--circle-container-offset) + 0.187em);
        }

        .checkbox:checked + .container .moon {
            transform: translate(0);
        }
    </style>
</head>
<body>
    <main class="container-fluid">
    <div class="row align-items-center justify-content-center login-wrapper">
     <div class="col-md-4">
      <h2 class="text-center mb-4">Ingresa Usuario</h2>
     <form>
        <div class="form-group">
            <label for="username" class="text-visible">Usuario</label>
            <input type="text" class="form-control" id="username" placeholder="Ingresa el usuario">
        </div>
        <div class="form-group">
            <label for="password" class="text-visible">Contraseña</label>
            <input type="password" class="form-control" id="password" placeholder="Ingresa la contraseña">
        </div>
        <div class="form-group d-flex justify-content-between">
            <div>
                <input type="checkbox" id="rememberMe">
                <label for="rememberMe" class="text-visible">Recuérdame</label>
            </div>
            <a href="{{ route('Olvido-su-contraseña') }}">¿Olvidó su contraseña?</a>
        </div>
        <a href="{{ route('Principal1') }}" class="btn btn-primary w-100">Iniciar Sesion</a>

    </form>
    <div class="text-center mt-3">
        <p>No es miembro? <a href="{{ route('crear-cuenta') }}">Crear cuenta</a></p>
    </div>
</div>

    </main>

    <div class="position-fixed bottom-0 end-0 p-3">
        <label class="theme-switch">
            <input type="checkbox" class="checkbox">
            <div class="container">
                <div class="circle-container">
                    <div class="sun-moon-container">
                        <div class="moon">
                            <div class="spot"></div>
                            <div class="spot"></div>
                            <div class="spot"></div>
                        </div>
                    </div>
                </div>
            </div>
        </label>
    </div>
    <script>
        // Función para aplicar el modo oscuro
        function aplicarModoOscuro() {
            const body = document.querySelector('body');
            const textVisibleElements = document.querySelectorAll('.text-visible');
            const textCenterElements = document.querySelectorAll('.text-center');

            body.classList.add('bg-dark');
            textVisibleElements.forEach(element => {
                element.classList.add('text-white');
            });
            textCenterElements.forEach(element => {
                element.classList.add('text-white');
            });
        }

        // Función para quitar el modo oscuro
        function quitarModoOscuro() {
            const body = document.querySelector('body');
            const textVisibleElements = document.querySelectorAll('.text-visible');
            const textCenterElements = document.querySelectorAll('.text-center');

            body.classList.remove('bg-dark');
            textVisibleElements.forEach(element => {
                element.classList.remove('text-white');
            });
            textCenterElements.forEach(element => {
                element.classList.remove('text-white');
            });
        }

        // Obtener el elemento del interruptor de tema
        const checkbox = document.querySelector('.checkbox');

        // Agregar un event listener al interruptor de tema
        checkbox.addEventListener('change', function() {
            if (this.checked) {
                aplicarModoOscuro();
                // Guardar preferencia del usuario en el almacenamiento local
                localStorage.setItem('modoOscuro', 'true');
            } else {
                quitarModoOscuro();
                // Guardar preferencia del usuario en el almacenamiento local
                localStorage.setItem('modoOscuro', 'false');
            }
        });

        // Verificar la preferencia del usuario en el almacenamiento local al cargar la página
        window.addEventListener('load', function() {
            const modoOscuroActivado = localStorage.getItem('modoOscuro') === 'true';
            if (modoOscuroActivado) {
                checkbox.checked = true;
                aplicarModoOscuro(); // Aplicar el modo oscuro si estaba activado
            } else {
                checkbox.checked = false;
            }
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
