<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        /* Toda tu hoja de estilos actual aquí */
        * {
            margin: 0;
            padding: 0;
            color: #f2f5f7;
            font-family: sans-serif;
            letter-spacing: 1px;
            font-weight: 300;
        }
        body {
            overflow-x: hidden;
        }
        nav {
            height: 4.5rem;
            width: 100vw;
            background-color: #131418;
            box-shadow: 0 3px 20px rgba(0, 0, 0, 0.2);
            display: flex;
            position: fixed;
            z-index: 10;
        }
        
        /* Estilos adicionales de la barra de navegación de Bootstrap */
    </style>
    <title>DeliciasAndinas</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-ligth">
        <div class="container">
        <a class="navbar-brand" href="#">
            <span style="font-size:26px; font-weight:bold; letter-spacing: 1px;margin-left: 20px; background: linear-gradient(90deg, #f1c40f, #3498db, #e74c3c); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">DeliciasAndinas</span>
        </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Soluciones</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('usuarios') }}">Usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('Servicio') }}">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('Contactanos') }}">Contactanos</a>
                    </li>
                    <li class="nav-item" style="margin-top: -8px;">
                        <a href="#" class="nav-link">
                        <img src="https://scontent.fgye1-2.fna.fbcdn.net/v/t1.30497-1/143086968_2856368904622192_1959732218791162458_n.png?stp=cp0_dst-png_p60x60&amp;_nc_cat=1&amp;ccb=1-7&amp;_nc_sid=2b6aad&amp;_nc_ohc=dRSSeZGuv9YAX-osRtj&amp;_nc_ht=scontent.fgye1-2.fna&amp;oh=00_AfAzXaWNi6ZFZqVARI6KTgFFbCEmMShjsnXA7t94LrcSZw&amp;oe=65F499B8" 
                        alt="Perfil" 
                        style="height: 40px; width: 40px; border-radius: 50%; margin-right: 10px;">
                        Perfil
                    </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

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

    <script>
        // Tu script JavaScript actual aquí
        const hamburger = document.querySelector(".navbar-toggler");
        const navLinks = document.querySelector(".navbar-collapse");
        const links = document.querySelectorAll(".navbar-nav .nav-link");

        hamburger.addEventListener('click', () => {
            //Animate Links
            navLinks.classList.toggle("show");
            links.forEach(link => {
                link.classList.toggle("fade");
            });

            //Hamburger Animation
            hamburger.classList.toggle("open");
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
