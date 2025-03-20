<?php
session_start(); 

if (!isset($_SESSION['intentos'])) {
    $_SESSION['intentos'] = 0;
}
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $codigoIngresado = trim($_POST["codigo"]);
            $codigoCorrecto = "59731"; 

            if ($codigoIngresado === $codigoCorrecto) {
                echo "<p class='mensaje-correcto'>¡Correcto! Has avanzado al siguiente nivel.</p>";
                $_SESSION['intentos'] = 0; 
                header("Location: reto4.php");
                exit();
            } else {
                
                echo "<p class='mensaje-incorrecto'>Código incorrecto. Inténtalo de nuevo.</p>";
                
            }

        }
        ?>




<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape Room - Código Desordenado</title>
    <link rel="stylesheet" href="css/reto3.css">
</head>
<body>
    <div class="container">
        <h1>Ordena los Números</h1>
        <p>Los siguientes números están desordenados. Ordénalos correctamente y encuentra la clave.</p>
        <p>Pista: su orden está relacionado con el abecedario</p>
        
        <div class="codigo-desordenado">
            <span>7</span> <span>3</span> <span>1</span> <span>9</span> <span>5</span>
        </div>

        <form method="POST">
            <input type="text" name="codigo" placeholder="Ingresa el código ordenado" required>
            <button class="submit-button">Validar</button>
        </form>

        
    </div>
</body>
</html>
