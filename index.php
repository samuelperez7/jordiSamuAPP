<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $usuario = $_POST['usuario'];
  $passwd = $_POST['password'];
  $recordar = $_POST['recordar'];
};

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Iniciar sesión</title>
</head>

<body>
  <main>
    <h1>Iniciar sesión</h1>

    <form action="/login" method="POST">
      <div>
        <label for="usuario">Correo electrónico o usuario</label>
        <input type="text" id="usuario" name="usuario" autocomplete="username" required>
      </div>

      <div>
        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" autocomplete="current-password" required>
      </div>

      <div>
        <input type="checkbox" id="recordar" name="recordar">
        <label for="recordar">Recordar sesión</label>
      </div>

      <button type="submit">Entrar</button>
    </form>

    <p><a href="/recuperar-password">¿Olvidaste tu contraseña?</a></p>
  </main>
</body>

</html>