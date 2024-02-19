<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Servicios Gastronómicos</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <h1 class="text-center mb-5">Servicios Gastronómicos</h1>
    <div class="row">
      <div class="col-md-6">
        <div class="card mb-4">
          <div class="card-body">
            <h5 class="card-title">Consultoría Gastronómica</h5>
            <p class="card-text">Ofrecemos servicios de consultoría para restaurantes, hoteles u otros negocios relacionados con la gastronomía. Esto incluye asesoramiento sobre menús, estrategias de marketing, gestión de costos, entre otros.</p>
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-body">
            <h5 class="card-title">Eventos Gastronómicos</h5>
            <p class="card-text">Organizamos eventos gastronómicos personalizados, como cenas temáticas, catas de vinos, talleres de cocina, degustaciones de platos tradicionales, entre otros.</p>
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-body">
            <h5 class="card-title">Tours Gastronómicos</h5>
            <p class="card-text">Diseñamos y organizamos tours gastronómicos por diferentes ciudades de la Gran Colombia, ofreciendo a los participantes la oportunidad de explorar los mercados locales, probar platos auténticos y conocer la historia detrás de la comida.</p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card mb-4">
          <div class="card-body">
            <h5 class="card-title">Clases de Cocina</h5>
            <p class="card-text">Impartimos clases de cocina presenciales o en línea, donde los participantes pueden aprender a preparar platos tradicionales de la región andina bajo la guía de chefs expertos.</p>
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-body">
            <h5 class="card-title">Servicios de Catering</h5>
            <p class="card-text">Ofrecemos servicios de catering para eventos especiales, bodas, fiestas y reuniones, destacando la autenticidad y calidad de la comida andina.</p>
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-body">
            <h5 class="card-title">Asesoramiento en Nutrición</h5>
            <p class="card-text">Proporcionamos servicios de asesoramiento nutricional personalizado, centrándonos en la dieta andina y promoviendo un estilo de vida saludable.</p>
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
