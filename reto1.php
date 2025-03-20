<?php
session_start(); 

if (!isset($_SESSION['intentos'])) {
    $_SESSION['intentos'] = 0;
}


$error = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input1 = htmlspecialchars($_POST['input1']);

    if ($input1 == "sa matao paco") {
        $_SESSION['intentos'] = 0; 
        header("Location: reto2.php");
        exit();
    } else {
         
        $error = "Intenta con un cifrado clásico de la época romana llamado Cifrado Cesar.";
        
    }
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reto 1</title>
    <link rel="stylesheet" href="css/reto1.css">
</head>
<body>
<div class="container">
        <h1>Reto 1: ¡Descifra el Código!</h1>
        <p>
            El sistema del Dr. Vandross ha ocultado un código crucial en un bloque de texto. ¡Encuentra el código secreto y desbloquea el siguiente reto!
        </p>
        <div class="code-container">
            VD ODWDR SDFR
        </div>
        <div class="input-container">
            <form method="POST">
                <input type="text" name="input1" placeholder="Introduce el código secreto aquí">
                <button class="submit-button">Validar</button>
            </form>
        </div>
        <p class="hint">Pista: Usa un cifrado de desplazamiento popular en tiempos de los romanos (César).</p>
        <?php 
            if ($error): ?>
            <p class="error"><?php echo $error; ?></p>
            <?php 
                if ($_SESSION['intentos'] >= 2): ?>
                <center><img src="images/cifrado_cesar.jpg" alt="Ejemplo de Cifrado César" style="width: 300px; display: block; margin-top: 10px;"></center>
            <?php endif; ?>
        <?php endif; ?>
    </div>

</body>
</html>
