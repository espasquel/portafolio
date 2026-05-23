<?php

$host = 'localhost';
$puerto = '3306';
$dbname = 'portfolio_db';
$usuario = 'root';
$contrasena = '';

try {
    $pdo = new PDO(
        "mysql:host=$host;port=$puerto;dbname=$dbname;charset=utf8",
        $usuario,
        $contrasena
    );

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexión exitosa";

} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}

?>