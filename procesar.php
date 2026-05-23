<?php
require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: contacto.php');
    exit;
}

$nombre  = trim($_POST['nombre']  ?? '');
$correo  = trim($_POST['correo']  ?? '');
$mensaje = trim($_POST['mensaje'] ?? '');

try {
    $sql  = "INSERT INTO mensajes (nombre, correo, mensaje) VALUES (:nombre, :correo, :mensaje)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':nombre'  => $nombre,
        ':correo'  => $correo,
        ':mensaje' => $mensaje,
    ]);
    header('Location: contacto.php?status=success');
    exit;
} catch (PDOException $e) {
    header('Location: contacto.php?status=error');
    exit;
}
