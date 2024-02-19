<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Usuarios</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Tabla de Usuarios</h2>

        <!-- Botón de buscar -->
        <div class="input-group mb-3">
            <input type="text" id="buscarInput" class="form-control" placeholder="Buscar por clave...">
            <button class="btn btn-primary" id="buscarBtn" type="button">Buscar</button>
        </div>

        <table class="table" id="tablaUsuarios">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>País</th>
                    <th>Ciudad</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Santiago</td>
                    <td>Moreira</td>
                    <td>Ecuador</td>
                    <td>Guayaquil</td>
                    <td>santimoreira@uees.edu.ec</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-mostrar" data-bs-toggle="modal" data-bs-target="#detallesModal">Mostrar</button>
                        <button type="button" class="btn btn-success">Editar</button>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                <tr>
                    <td>Juan</td>
                    <td>Pérez</td>
                    <td>México</td>
                    <td>Ciudad de México</td>
                    <td>juanperez@example.com</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-mostrar" data-bs-toggle="modal" data-bs-target="#detallesModal">Mostrar</button>
                        <button type="button" class="btn btn-success">Editar</button>
                        <button type="button" class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                <!-- Aquí se agregarían más filas para cada usuario -->
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="detallesModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detalles del Usuario</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="detallesUsuario">
                    <!-- Aquí se mostrarán los detalles del usuario -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.querySelectorAll('.btn-mostrar').forEach(btn => {
            btn.addEventListener('click', function() {
                const row = this.closest('tr');
                const cells = row.querySelectorAll('td');
                const nombre = cells[0].textContent;
                const apellido = cells[1].textContent;
                const pais = cells[2].textContent;
                const ciudad = cells[3].textContent;
                const email = cells[4].textContent;

                const modalContent = `
                    <p><strong>Nombre:</strong> ${nombre}</p>
                    <p><strong>Apellido:</strong> ${apellido}</p>
                    <p><strong>País:</strong> ${pais}</p>
                    <p><strong>Ciudad:</strong> ${ciudad}</p>
                    <p><strong>Email:</strong> ${email}</p>
                `;

                document.getElementById('detallesUsuario').innerHTML = modalContent;
                $('#detallesModal').modal('show'); // Mostrar el modal
            });
        });
    </script>

<script>
        document.getElementById('buscarBtn').addEventListener('click', function() {
            const searchText = document.getElementById('buscarInput').value.toLowerCase();
            const tableRows = document.querySelectorAll('#tablaUsuarios tbody tr');

            tableRows.forEach(row => {
                const nombre = row.cells[0].textContent.toLowerCase();
                const apellido = row.cells[1].textContent.toLowerCase();
                const pais = row.cells[2].textContent.toLowerCase();
                const ciudad = row.cells[3].textContent.toLowerCase();
                const email = row.cells[4].textContent.toLowerCase();

                if (nombre.includes(searchText) || apellido.includes(searchText) || pais.includes(searchText) || ciudad.includes(searchText) || email.includes(searchText)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>

</body>
</html>




