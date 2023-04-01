<?php
require_once('conexion.php');
function createContact()
{
    try {
        $pdo = con();
        $query = $pdo->prepare("CREATE TABLE IF NOT EXISTS contacto (
            id int(11) NOT NULL AUTO_INCREMENT,
            fecha date NOT NULL,
            correo varchar(60) NOT NULL,
            nombre varchar(60) NOT NULL,
            asunto varchar(60) NOT NULL,
            comentario varchar(60) NOT NULL,
            PRIMARY KEY (id)
          )");

        $query->execute();
    } catch (PDOException $ex) {
        echo 'Error en la consulta de create: ' . $ex->getMessage();
    }
}
?>
