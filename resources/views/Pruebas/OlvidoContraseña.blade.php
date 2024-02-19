<!DOCTYPE html>
<html lang="es">
<head>
    <title>Recuperar contraseña</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h2 class="mb-4 text-center">Recuperar contraseña</h2>

                        <form action="{{ route('Confirmacion') }}">
                            <div class="form-group">
                                <label for="email">Correo electrónico:</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block mt-4">Recuperar contraseña</button>
                        </form>

                        <div class="text-center mt-3">
                            <p>¿Ya tienes una cuenta? <a href="{{ route('Inicio-sesion') }}">Iniciar sesión</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
