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
        .features {
            background-color: #303952; /* Negro azulado más oscuro */
            padding: 50px 0; /* Espaciado */
            text-align: center; /* Alineación de texto */
        }
        .feature-item {
            margin-bottom: 30px; /* Margen inferior */
        }
        .feature-icon {
            font-size: 48px; /* Tamaño de fuente */
            margin-bottom: 20px; /* Margen inferior */
            color: #73d05e; /* Verde */
        }
        .feature-title {
            font-size: 24px; /* Tamaño de fuente */
            margin-bottom: 20px; /* Margen inferior */
            color: #fff; /* Blanco */
        }
        .feature-description {
            font-size: 18px; /* Tamaño de fuente */
            color: #fff; /* Blanco */
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

    <section class="jumbotron">
        <div class="container">
            <h1>Bienvenido a mi blog personal</h1>
            <p>Explora el fascinante mundo de la música y la cultura urbana a través de mis artículos, opiniones y recomendaciones.</p>
        </div>
    </section>

    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-item">
                        <span class="feature-icon">&#9835;</span>
                        <h3 class="feature-title">Música</h3>
                        <p class="feature-description">Descubre las últimas novedades en la escena musical, reseñas de álbumes y recomendaciones de artistas.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-item">
                        <span class="feature-icon">&#9829;</span>
                        <h3 class="feature-title">Cultura Urbana</h3>
                        <p class="feature-description">Explora la cultura urbana a través de análisis de tendencias, entrevistas y reportajes sobre graffiti, moda urbana y más.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-item">
                        <span class="feature-icon">&#127925;</span>
                        <h3 class="feature-title">Opiniones</h3>
                        <p class="feature-description">Comparto mis opiniones y reflexiones sobre temas relevantes en la música y la cultura urbana.</p>
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
