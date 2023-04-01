<?php
require_once('conexion.php');
function getTitles(int $limit)
{
    try {
        $pdo = con();
        $query = $pdo->prepare('Select id_titulo,titulo,tipo,precio,notas from titulos LIMIT :limit');
        $query->bindParam(':limit', $limit, PDO::PARAM_INT);
        $query->execute();

        return $query->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $ex) {
        echo 'Error en la consulta: ' . $ex->getMessage();
    }
}

function getAutors(int $limit)
{
    try {
        $pdo = con();
        $query = $pdo->prepare('Select nombre,apellido,pais from autores LIMIT :limit');
        $query->bindParam(':limit', $limit, PDO::PARAM_INT);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $ex) {
        echo 'Error en la consulta: ' . $ex->getMessage();
    }
}
?>