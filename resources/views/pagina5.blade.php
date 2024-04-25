<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
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
        .services {
            background-color: #57606f; /* Gris azulado */
            color: #fff; /* Blanco */
            padding: 50px 0; /* Espaciado */
            text-align: center; /* Alineación de texto */
        }
        .service-item {
            margin-bottom: 30px; /* Margen inferior */
        }
        .service-icon {
            font-size: 48px; /* Tamaño de fuente */
            margin-bottom: 20px; /* Margen inferior */
            color: #73d05e; /* Verde */
        }
        .service-title {
            font-size: 24px; /* Tamaño de fuente */
            margin-bottom: 20px; /* Margen inferior */
        }
        .service-description {
            font-size: 18px; /* Tamaño de fuente */
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

    <section class="services">
        <div class="container">
            <h2>Nuestros Servicios</h2>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="service-item">
                        <span class="service-icon">&#127925;</span>
                        <h3 class="service-title">Desarrollo Web</h3>
                        <p class="service-description">Creamos sitios web atractivos y funcionales utilizando las últimas tecnologías y mejores prácticas de diseño.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item">
                        <span class="service-icon">&#128187;</span>
                        <h3 class="service-title">Diseño Gráfico</h3>
                        <p class="service-description">Ofrecemos servicios de diseño gráfico para ayudarte a crear una identidad visual única y memorable para tu marca.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-item">
                        <span class="service-icon">&#128248;</span>
                        <h3 class="service-title">Consultoría Tecnológica</h3>
                        <p class="service-description">Brindamos asesoramiento experto en tecnología para ayudarte a tomar decisiones informadas sobre tus proyectos digitales.</p>
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
