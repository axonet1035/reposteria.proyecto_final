<?php
session_start();

// Verifica si se han enviado las credenciales de inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Almacena las credenciales en la sesión
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];

    // Redirige a la página de bienvenida
    header("Location: bienvenido.php");
    exit(); // Detiene la ejecución del script después de la redirección
} else {
    // Si no se han enviado las credenciales, muestra un mensaje de error o redirige a una página de error
    echo "Error: Las credenciales no se han enviado.";
}
?>
