<?php
require_once('conexion.php');
require_once('create.php');
function sendContact($nombre, $correo, $fecha, $asunto, $comentario)
{
    createContact();
    try {
        $pdo = con();
        $query = $pdo->prepare('insert into contacto (nombre,correo,fecha,asunto,comentario) values (:nombre,:correo,:fecha,:asunto,:comentario)');

        $query->bindParam(':nombre', $nombre);
        $query->bindParam(':correo', $correo);
        $query->bindParam(':fecha', $fecha);
        $query->bindParam(':asunto', $asunto);
        $query->bindParam(':comentario', $comentario);

        $query->execute();
    } catch (PDOException $ex) {
        echo 'Error en la consulta: ' . $ex->getMessage();
    }
} 
?>