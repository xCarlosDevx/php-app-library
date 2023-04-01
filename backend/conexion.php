<?php
function con()
{
    try { 
        return new PDO('mysql:host=bpcirl5crjdpmmxkqy3f-mysql.services.clever-cloud.com;dbname=bpcirl5crjdpmmxkqy3f', 'ucrbaoq2wkjgkdf0', 'M8IaWOST3CHqz0BeYzsS');
    } catch (PDOException $e) {
        echo 'Error en la conexion: ' . $e->getMessage();
    }
}
?>
