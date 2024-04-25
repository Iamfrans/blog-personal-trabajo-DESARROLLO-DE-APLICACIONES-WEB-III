<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <!-- Enlaces a archivos CSS de Bootstrap y personalizado -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            background-color: #1e272e; /* Negro azulado */
            color: #fff; /* Blanco */
            font-family: 'Roboto', sans-serif; /* Fuente */
        }
        .navbar {
            background-color: #303952; /* Negro azulado más oscuro */
        }
        .navbar-light .navbar-brand {
            color: #fff; /* Blanco */
            font-size: 28px; /* Tamaño de fuente */
        }
        .navbar-light .navbar-nav .nav-link {
            color: #fff; /* Blanco */
            font-size: 20px; /* Tamaño de fuente */
        }
        .navbar-light .navbar-nav .nav-link:hover {
            color: #57606f; /* Gris azulado */
        }
        .contact-form {
            background-color: #57606f; /* Gris azulado */
            color: #fff; /* Blanco */
            padding: 50px 0; /* Espaciado */
            text-align: center; /* Alineación de texto */
        }
        .contact-form h2 {
            margin-bottom: 30px; /* Margen inferior */
        }
        .form-control {
            background-color: #303952; /* Negro azulado más oscuro */
            color: #fff; /* Blanco */
            border-color: #57606f; /* Gris azulado */
        }
        .form-control:focus {
            background-color: #57606f; /* Gris azulado */
            color: #fff; /* Blanco */
            border-color: #73d05e; /* Verde */
            box-shadow: none; /* Sin sombra */
        }
        .btn-primary {
            background-color: #73d05e; /* Verde */
            border-color: #73d05e; /* Verde */
        }
        .btn-primary:hover {
            background-color: #66bde6; /* Azul claro */
            border-color: #66bde6; /* Azul claro */
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ&ab_channel=RickAstley">Blog Personal</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/frans/public/pagina1">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/frans/public/pagina2">Acerca de mí</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/frans/public/pagina3">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/frans/public/pagina4">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/frans/public/pagina5">Servicios</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="contact-form">
        <div class="container">
            <h2>Contacto</h2>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form action="#" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nombre" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Correo electrónico" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" placeholder="Mensaje" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar mensaje</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 FRANS RAMOS COTRINA</p>
        </div>
    </footer>

    <!-- Enlaces a archivos JavaScript de Bootstrap y jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
