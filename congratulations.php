<?php
  $nombre = isset($_GET['nombre']) ? htmlspecialchars($_GET['nombre']) : 'Aventurero';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/congrats.css">
    <title>¡Felicidades!</title>
</head>
<body>
    <div class="container">
        <h1>🎉 ¡Felicidades, <?php echo $nombre; ?>! 🎉</h1>
        <p>¡Has logrado escapar con éxito del Escape Room!</p>
        <p>Demostraste ingenio, valentía y perseverancia. ¡Eres un verdadero maestro de las escapadas!</p>
        <a href="index.html" class="button">Volver al inicio</a>
    </div>
</body>
</html>