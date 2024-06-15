<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión - Repostería</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="background-image"></div>
    <div class="container">
        <form class="login-form" action="accion.php" method="POST">
            <h2>Iniciar Sesión</h2>
            <div class="input-container">
                <label id="username" for="username">Usuario:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-container">
                <label id="password" for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Iniciar Sesión</button>
        </form>
    </div>
</body>
</html>

