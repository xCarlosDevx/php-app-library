<?php
function con()
{
    try { 
        return new PDO('mysql:host=localhost;dbname=libreria', 'root', '');
    } catch (PDOException $e) {
        echo 'Error en la conexion: ' . $e->getMessage();
    }
}
?>