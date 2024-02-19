<!DOCTYPE html>
<html lang="es">
<head>
    <title>Confirmación de recuperación de contraseña</title>
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
                        <p class="text-center">Se ha enviado un código de verificación a su correo electrónico.</p>
                                 <img src="{{ asset('Imagenes/correo.png') }}" alt="Correo imagen" class="img-fluid d-none" id="sobre-animacion">
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

</body>
</html>
