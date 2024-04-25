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
        .container {
            margin-top: 50px; /* Margen superior */
            margin-bottom: 50px; /* Margen inferior */
        }
        .blog-img {
            max-width: 100%; /* Ancho máximo */
            margin-bottom: 20px; /* Margen inferior */
        }
        .sidebar {
            background-color: #57606f; /* Gris azulado */
            color: #fff; /* Blanco */
            padding: 20px; /* Espaciado */
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

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <article>
                    <img src="https://i0.wp.com/urbanroosters.news/wp-content/uploads/2020/07/4_CANSERBERO.png?resize=1024%2C550&ssl=1" alt="Canserbero" class="blog-img">
                    <h2>Artículo 1: Canserbero y su impacto en la música urbana</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vel augue quis felis hendrerit feugiat vel vitae leo. Integer semper, justo eget condimentum dictum, elit nunc accumsan risus, eget semper nulla ipsum sed risus.</p>
                    <a href="#" class="btn btn-primary">Leer más</a>
                </article>
                <hr>
                <article>
                    <img src="https://img.buzzfeed.com/buzzfeed-static/complex/images/qaydkex0zlzenu8zmh4m/suicideboys-promo-shot.jpg" alt="$uicideboys$" class="blog-img">
                    <h2>Artículo 2: La controversia detrás de $uicideboys$</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vel augue quis felis hendrerit feugiat vel vitae leo. Integer semper, justo eget condimentum dictum, elit nunc accumsan risus, eget semper nulla ipsum sed risus.</p>
                    <a href="#" class="btn btn-primary">Leer más</a>
                </article>
                <hr>
                <article>
                    <img src="https://los40puebla.com/wp-content/uploads/2022/01/mm3.jpg" alt="Marilyn Manson" class="blog-img">
                    <h2>Artículo 3: El legado de Marilyn Manson en el rock</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vel augue quis felis hendrerit feugiat vel vitae leo. Integer semper, justo eget condimentum dictum, elit nunc accumsan risus, eget semper nulla ipsum sed risus.</p>
                    <a href="#" class="btn btn-primary">Leer más</a>
                </article>
            </div>
            <div class="col-md-4">
                <aside class="sidebar">
                    <h3>Sobre mí</h3>
                    <p>Soy un apasionado de la música y la cultura urbana. En este blog, comparto mis pensamientos y opiniones sobre artistas como Canserbero, $uicideboys$ y Marilyn Manson, así como noticias y novedades sobre el mundo de la música.</p>
                </aside>
            </div>
        </div>
    </div>

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
