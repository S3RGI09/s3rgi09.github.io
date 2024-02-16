<?php
session_start();

// Verificar si el formulario de login fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar las credenciales (aquí deberías conectar con tu base de datos y verificar las credenciales)
    $username = "usuario"; // Cambia esto por tu nombre de usuario
    $password = "contraseña"; // Cambia esto por tu contraseña

    if ($_POST['username'] === $username && $_POST['password'] === $password) {
        // Las credenciales son válidas, iniciar sesión
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: index.php"); // Redirigir al usuario a la página principal
        exit;
    } else {
        // Credenciales inválidas, mostrar mensaje de error
        echo "Credenciales incorrectas. Inténtalo de nuevo.";
    }
}
?>
