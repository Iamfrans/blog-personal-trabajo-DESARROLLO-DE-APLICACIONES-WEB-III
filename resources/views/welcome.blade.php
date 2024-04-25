<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Personal</title>
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
        .jumbotron {
            background-color: #57606f; /* Gris azulado */
            color: #fff; /* Blanco */
            padding: 100px 0; /* Espaciado */
            text-align: center; /* Alineación de texto */
        }
        .jumbotron h1 {
            font-size: 48px; /* Tamaño de fuente */
            font-weight: bold; /* Negrita */
        }
        .jumbotron p {
            font-size: 24px; /* Tamaño de fuente */
            margin-bottom: 40px; /* Margen inferior */
        }
        .card {
            background-color: #303952; /* Negro azulado más oscuro */
            color: #fff; /* Blanco */
            margin-bottom: 30px; /* Margen inferior */
        }
        .card-title {
            font-size: 24px; /* Tamaño de fuente */
            font-weight: bold; /* Negrita */
            margin-bottom: 20px; /* Margen inferior */
        }
        .card-text {
            font-size: 18px; /* Tamaño de fuente */
            margin-bottom: 20px; /* Margen inferior */
        }
        .footer {
            background-color: #222f3e; /* Negro más oscuro */
            color: #fff; /* Blanco */
            padding: 50px 0; /* Espaciado */
            text-align: center; /* Alineación de texto */
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

    <section id="inicio" class="jumbotron">
        <div class="container">
            <h1>Bienvenido a mi blog personal</h1>
            <p>Este es un espacio donde comparto mis pensamientos, ideas y experiencias.</p>
            <p>Explora los diferentes temas que abordo en mi blog y no dudes en ponerte en contacto conmigo si tienes alguna pregunta o comentario.</p>
        </div>
    </section>

    <section class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="ruta-imagen-aleatoria-1.jpg" class="card-img-top" alt="Artículo 1">
                    <div class="card-body">
                        <h5 class="card-title">Título del artículo 1</h5>
                        <p class="card-text">Breve descripción del artículo 1.</p>
                        <a href="#" class="btn btn-primary">Leer más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="ruta-imagen-aleatoria-2.jpg" class="card-img-top" alt="Artículo 2">
                    <div class="card-body">
                        <h5 class="card-title">Título del artículo 2</h5>
                        <p class="card-text">Breve descripción del artículo 2.</p>
                        <a href="#" class="btn btn-primary">Leer más</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="ruta-imagen-aleatoria-3.jpg" class="card-img-top" alt="Artículo 3">
                    <div class="card-body">
                        <h5 class="card-title">Título del artículo 3</h5>
                        <p class="card-text">Breve descripción del artículo 3.</p>
                        <a href="#" class="btn btn-primary">Leer más</a>
                    </div>
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
