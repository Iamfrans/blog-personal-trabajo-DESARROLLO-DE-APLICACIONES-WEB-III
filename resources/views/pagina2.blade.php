<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acerca de mí</title>
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
        .container {
            margin-top: 50px; /* Margen superior */
            margin-bottom: 50px; /* Margen inferior */
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
        .profile-img {
            max-width: 300px; /* Ancho máximo */
            margin-bottom: 30px; /* Margen inferior */
        }
        .project-img {
            max-width: 100%; /* Ancho máximo */
            margin-bottom: 20px; /* Margen inferior */
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
            <img src="https://pbs.twimg.com/media/E3v1wukWEAAfZD-.jpg" alt="Foto de perfil" class="img-fluid rounded-circle profile-img">
            <h1>Acerca de mí</h1>
            <p>Soy un apasionado programador de 19 años que vive en Perú y estudia ingeniería de software en la universidad. Desde joven me interesé por la tecnología y la programación, y he dedicado gran parte de mi tiempo libre a aprender nuevos lenguajes de programación y desarrollar proyectos personales.</p>
            <p>En mi blog personal, comparto mis conocimientos, experiencias y opiniones sobre el mundo de la tecnología y la programación. Me encanta aprender cosas nuevas y enfrentar desafíos, y estoy siempre en busca de oportunidades para crecer y mejorar como profesional.</p>
            <p>¡Gracias por visitar mi blog y espero que disfrutes del contenido!</p>
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
