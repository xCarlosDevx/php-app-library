<?php
require_once('backend/consultar.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Php-Library</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="stylesheet" href="styles/index.css" />
</head>

<body>
    <header>
        <nav class="nav__menu">
            <ul>
                <li><a href="index.php"> Inicio </a></li>
                <li>
                    <a href="pages/autores.php"> Autores </a>
                </li>
                <li>
                    <a href="pages/contacto.php"> Contacto </a>
                </li>
            </ul>
        </nav>
    </header>
    <main class="container">
        <h1>PHP - Library</h1>
        <h2>Nuestras Categorias</h2>
        <div class="container__all row align-items-center">
            <span class="arrow col-1">
                < </span>
                    <div class="card__container col-10">
                        <?php
                        $array = getTitles(30);
                        foreach ($array as $index => $item) {
                            ?>
                            <div class="card__title__content">
                                <img src="https://st2.depositphotos.com/2872743/7239/i/600/depositphotos_72391779-stock-photo-books-stack-of-book-blank.jpg"
                                    alt="catalogo de libros" />
                                <p class="title">
                                    <?php echo $item['titulo']; ?>
                                </p>
                                <p class="subtitle">
                                    <?php echo $item['tipo']; ?>
                                </p>
                                <p class="price__title">Precio: <span class="price"> RD$
                                        <?php echo $item['precio']; ?>
                                    </span></p>
                            </div>
                        <?php } ?>
                    </div>
                    <span class="arrow col-1"> > </span>
        </div>
    </main>
    <footer>
        <div class="footer">
            <div class="nav__link">
                <ul>
                    <li>
                        <a href="pages/contacto.php">Contactos</a>
                    </li>
                    <li>
                        <a href="#">Nosotros</a>
                    </li>
                </ul>
            </div>
            <div class="copyRight">CopyRight Made by xCarlosDevx © 2023</div>
        </div>
    </footer>
    <script src="javaScript/swiper.js"></script>

</html>