<?php
require_once('../backend/insertar.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $fecha = $_POST['fecha'];
  $asunto = $_POST['asunto'];
  $comentario = $_POST['comentario'];
  sendContact($nombre, $correo, $fecha, $asunto, $comentario);
} 
?>
<!DOCTYPE html>
<html>

<head>
  <title>Php-Library</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
  <link rel="stylesheet" href="../styles/contacto.css" />
</head>

<body>
  <header>
    <nav class="nav__menu">
      <ul>
        <li><a href="../index.php"> Inicio </a></li>
        <li>
          <a href="autores.php"> Autores </a>
        </li>
        <li>
          <a href="contacto.php"> Contacto </a>
        </li>
      </ul>
    </nav>
  </header>
  <main class="container">
    <h1>PHP - Library</h1>
    <h2>Contactanos!!</h2>
    <div class="form__container">
      <form action="" method="post">
        <div class="form-group row">
          <div class="col-6 left">
            <span>Nombre:</span>
            <input type="text" name="nombre" class="form-control" required />
            <span>Correo:</span>
            <input type="text" name="correo" class="form-control" required />
            <span>Fecha:</span>
            <input  type="date" name="fecha" class="form-control" required />
          </div>
          <div class="col-6 right row">
            <span>Asunto:</span>
            <input type="text" name="asunto" class="form-control" required />
            <span>Comentario:</span>
            <textarea name="comentario" cols="30" rows="4" class="form-control" required>
              </textarea>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </div>
        </div>
      </form>
    </div>
  </main>
  <footer>
    <div class="footer">
      <div class="nav__link">
        <ul>
          <li>
            <a href="contacto.php">Contactos</a>
          </li>
          <li>
            <a href="#">Nosotros</a>
          </li>
        </ul>
      </div>
      <div class="copyRight">CopyRight Made by xCarlosDevx © 2023</div>
    </div>
  </footer>
</body>

</html>