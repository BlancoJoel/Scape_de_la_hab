<?php
session_start();

if (!isset($_SESSION['intentos'])) {
    $_SESSION['intentos'] = 0;
}

if (!isset($_SESSION['validado']) || $_SESSION['validado'] !== true) {
    $_SESSION['error'] = "No puedes acceder a esta página directamente.";
    header("Location: index.html");
    exit;
}

unset($_SESSION['validado']);

$error = '';
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $codigoIngresado = trim($_POST["codigo"]);
            $codigoCorrecto = "7"; 

            if ($codigoIngresado == $codigoCorrecto) {
                echo "<p class='mensaje-correcto'>¡Correcto! Has avanzado al siguiente nivel.</p>";
                $_SESSION['intentos'] = 0;
                header("Location: reto3.php");
                exit();
            } else {
                 
                $error = "Has mirado bien cada detalle?.";
                
            }
        }
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 2 - Encuentra las diferencias</title>
    <link rel="stylesheet" href="css/reto2.css">
    <script src="javascriptreto2.js"></script>
</head>
<body>

<div class="container">
        <h1>Encuentra las diferencias</h1>
        <p>Observa atentamente las dos imágenes y encuentra cuántas diferencias hay, como el dr. Vandross es muy rata ha puesto las imagenes pequeñas para que te sea mas difícl. </p>
        <div class="images-container">
            <div class="image" id="image1">
                <img src="images/reto2_dif1.png" alt="Imagen 1">
                <div class="magnifier" id="magnifier1">
                    <img src="images/reto2_dif1.png" alt="Zoom Imagen 1">
                </div>
            </div>

            <div class="image" id="image2">
                <img src="images/reto2_dif1-1.png" alt="Imagen 2">
                <div class="magnifier" id="magnifier2">
                    <img src="images/reto2_dif1-1.png" alt="Zoom Imagen 2">
                </div>
            </div>
        </div>
       
       <div class="input-container">
            <form method="POST">
                <input type="text" name="codigo" placeholder="Ingresa el código ordenado" required>
                <button class="submit-button">Validar</button>
            </form>
       </div>
        
       <p class="hint">Pista: Fijate bien en cada pequeño detalle, aqui tienes una pequeña ayuda: donde han asado la carne puede que haya una.</p>
        <?php if ($error): ?>
            <p class="error"><?php echo $error; ?></p>
            <?php if ($_SESSION['intentos'] >= 2): ?>
                <p class="hint">El número que estas buscando es primo</p>
            <?php endif; ?>
        <?php endif; ?>
    </div>
    
</body>
</html>