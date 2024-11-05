<?php
include 'conexion.php';

try {
    $stmt = $pdo->query("SELECT * FROM usuarios");
    $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo "Error al obtener los datos: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de Conexión a la Base de Datos</title>
</head>
<body>
<h1>Bienvenido a mi proyecto PHP</h1>

<?php if (!empty($usuarios)): ?>
    <h2>Usuarios:</h2>
    <ul>
        <?php foreach ($usuarios as $usuario): ?>
            <li><?php echo htmlspecialchars($usuario['nombre']) . ' - ' . htmlspecialchars($usuario['email']); ?></li>
        <?php endforeach; ?>
    </ul>
<?php else: ?>
    <p>No se encontraron usuarios.</p>
<?php endif; ?>
</body>
</html>