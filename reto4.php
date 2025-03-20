<?php
session_start();

if (!isset($_SESSION['intentos'])) {
    $_SESSION['intentos'] = 0;
}
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $codigoIngresado = trim($_POST["codigo"]);
        $codigoCorrecto = "67831573524699"; 

        if ($codigoIngresado === $codigoCorrecto) {
            echo "<p class='mensaje-correcto'>¡Correcto! La caja fuerte se ha abierto.</p>";
            $_SESSION['intentos'] = 0; 
                header("Location: congratulations.php");
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
    <title>Escape Room - La Caja Fuerte</title>
    <link rel="stylesheet" href="css/reto4.css">
</head>
<body>
    <div class="container">
        <h1>Abre la Caja Fuerte</h1>
        <p>Encuentra el código oculto en la página y ábrela.</p>
        
        <div class="caja-fuerte">
            <div><div class="digito azul">6</div>
                <div class="digito amarillo">2</div>
                <div class="digito rojo">8</div>
                <div class="digito verde">5</div>
                <div class="digito amarillo">3</div>
                <div class="digito azul">9</div>
            </div>
                
            <div>
                <div class="digito verde">7</div>
                <div class="digito rojo">4</div>
                <div class="digito amarillo">1</div>
                <div class="digito azul">5</div>
                <div class="digito rojo">2</div>
                <div class="digito verde">3</div>
            </div>
            
            <div>
                <div class="digito azul">7</div>
                <div class="digito verde">9</div>
                <div class="digito amarillo">6</div>
                <div class="digito rojo">1</div>
                <div class="digito azul">4</div>
                <div class="digito amarillo">8</div>
            </div>

            <div>
                <div class="digito verde">2</div>
                <div class="digito verde">3</div>
                <div class="digito rojo">9</div>
                <div class="digito azul">2</div>
                <div class="digito amarillo">7</div>
                <div class="digito rojo">6</div>
            </div>

            <div>
                <div class="digito azul">8</div>
                <div class="digito verde">1</div>
                <div class="digito amarillo">5</div>
                <div class="digito rojo">4</div>
                <div class="digito amarillo">9</div>
                <div class="digito verde">6</div>
            </div>

            <div>
                <div class="digito azul">3</div>
                <div class="digito amarillo">2</div>
                <div class="digito azul">7</div>
                <div class="digito rojo">1</div>
                <div class="digito verde">8</div>
                <div class="digito rojo">5</div>
            </div>

            <div>
                <div class="digito amarillo">4</div>
                <div class="digito azul">1</div>
                <div class="digito amarillo">8</div>
                <div class="digito rojo">3</div>
                <div class="digito azul">6</div>
                <div class="digito verde">9</div>
            </div>

            <div>
                <div class="digito rojo">2</div>
                <div class="digito azul">5</div>
                <div class="digito verde">7</div>
                <div class="digito amarillo">4</div>
                <div class="digito rojo">1</div>
                <div class="digito azul">9</div>
            </div>

            <div>
                <div class="digito verde">2</div>
                <div class="digito amarillo">7</div>
                <div class="digito azul">3</div>
                <div class="digito verde">5</div>
                <div class="digito rojo">8</div>
                <div class="digito amarillo">6</div>
            </div>

        </div>

        <div class="input-container">
            <form method="POST">
                <input type="text" name="codigo" placeholder="Ingresa el código" required>
                <button class="submit-button">Validar</button>
            </form>
        </div>

        

        
    </div>
</body>
</html>
