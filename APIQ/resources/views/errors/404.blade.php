<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error 404 - Página no encontrada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <div class="error-container">

        <!-- Contenedor del matraz -->
        <div class="flask-container">
            <div class="flask">
                <div class="bubbles"></div>
            </div>
        </div>
        <!-- Código de error -->
        <div class="error-code">404</div>
        <!-- Contenido principal -->
        <div class="content">
            <h2 class="text-primary">¡Reacción inesperada!</h2>
            <p>Parece que la página que buscas se ha evaporado en el laboratorio. Intenta regresar al inicio.</p>
        </div>

        <!-- Botón separado correctamente -->
        <div class="btn-container">
            <a href="{{ url('/') }}" class="btn btn-primary">Volver al laboratorio</a>
        </div>
    </div>
    <style>
        /* Estilos generales */
        body {
            background-color: #1a1a2e;
            color: white;
            text-align: center;
            font-family: Arial, sans-serif;
            overflow: hidden;
        }

        /* Contenedor principal */
        .error-container {
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            padding: 20px;
        }

        /* Código de error grande */
        .error-code {
            font-size: 150px;
            font-weight: bold;
            color: #00d4ff;
            position: relative;
            z-index: 10;
        }

        /* Contenedor del matraz */
        .flask-container {
            position: relative;
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Matraz de laboratorio */
        .flask {
            width: 80px;
            height: 120px;
            background-color: transparent;
            border: 5px solid white;
            border-top-left-radius: 40px;
            border-top-right-radius: 40px;
            display: flex;
            justify-content: center;
            align-items: flex-end;
            overflow: hidden;
            position: relative;
        }

        /* Líquido dentro del matraz */
        .flask::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 50%;
            background: linear-gradient(180deg, #00d4ff, #0066cc);
            bottom: 0;
            border-bottom-left-radius: 40px;
            border-bottom-right-radius: 40px;
        }

        /* Burbujas dentro del matraz */
        .bubbles {
            position: absolute;
            bottom: 10px;
            width: 5px;
            height: 5px;
            background-color: white;
            border-radius: 50%;
            animation: bubbles 3s infinite;
        }

        /* Ajuste del botón para evitar que se solape */
        .btn-container {
            margin-top: 20px;
        }

        /* Animaciones */
        @keyframes bubbles {
            0% {
                transform: translateY(0);
                opacity: 1;
            }

            100% {
                transform: translateY(-50px);
                opacity: 0;
            }
        }
    </style>
</body>

</html>
