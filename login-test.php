<?php
//  vienen de un formulario
$hardcodedUser = 'srvcZboost';
$hardcodedPass = 'InditexTech@ZaraBoost2023';
 
// datos enviados por el usuario
$user = $_POST['username'] ?? '';
$pass = $_POST['password'] ?? '';
 
// Verificar las credenciales
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($user === $hardcodedUser && $pass === $hardcodedPass) {
        echo "Login exitoso. Redirigiendo...";
        // Redireccionar a la URL
        header('Location: https://management.inditex.tech');
        exit;
    } else {
        echo "Credenciales inválidas.";
    }
}
?>
 
<!DOCTYPE html>
<html>
<head>
<title>Login Form</title>
</head>
<body>
<form method="post">
<label for="username">Usuario:</label><br>
<input type="text" id="username" name="username"><br>
<label for="password">Contraseña:</label><br>
<input type="password" id="password" name="password"><br><br>
<input type="submit" value="Iniciar sesión">
</form>
</body>
</html>
