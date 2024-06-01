<?php
include('accion.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal - Repostería</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="sidebar">
        <h2>Bienvenido</h2>
        <nav>
            <ul>
                <li><a href="login.php">Iniciar Sesión</a></li>
                <li><a href="pedidos.php">Pedidos</a></li>
                <li><a href="#contact">Contacto</a></li>
                <li><a href="#members">Miembros</a></li>
                <li><a href="#members">cerrar sesion</a></li>
            </ul>
        </nav>
    </div>

    <div class="content">
        <div class="logo">
            <img src="logo.jpg" alt="Logo de Repostería">
        </div>
        <h1>Bienvenido, <?php echo $_SESSION['username'] ?> a nuestra repostería</h1>
        <p>¡Descubre nuestras deliciosas creaciones!</p>
        <br>
        <p>NUESTRA FILOSOFÍA

        <div id="parrafo1" class="p1">
Amar 100% lo que hacemos, creer en la magia para crear absolutamente todo con una energía que mueva tu interior, sacarte muchas sonrisas y despertar lo mejor que hay en ti.  Seleccionar los mejores ingredientes para que nuestras recetas sean identificadas por su sabor y estética, seguir aprendiendo cada día y retarnos a ser siempre mejores acompañados por la alegría, la honestidad y la pasión.

El Portal es una empresa feliz que trabaja naturalmente para demostrar que cada una de las personas del planeta tenemos una luz infinita dentro de sí y que hay una manera extraordinaria de vivir.</p>
</div>
<div class="image-container">
                <img src="img.jpg" alt="Imagen al lado del párrafo">
            </div>


    </div>
</body>
</html>

