<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFld6Z9s7z5a6b" crossorigin="anonymous">
    <link rel="stylesheet" href="inindex.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-1q6b5d8f3a7e4c5f8b2c9d8e3f8a7e4c5f8b2c9d8e3f8a7e4c5f8b2c9d8e3f8a7e4c5f8b2c9d8e3f8a7e4c5f8b2c9d8e3f8a7e4c5f8b2c9d8e3f8a7e4c5f" crossorigin="anonymous">
    <title>Iniciar sesión</title>
</head>
<body>
 <form action="IniciarSesion.php" method="post">
    <h1>Iniciar sesión</h1>
    <hr>
    <?php
     if (isset($_GET['error'])) { 
        ?>
       <p class="error">
        <?php 
        echo $_GET['error']; 
        
        ?>
       </p>
        <?php
      }
    ?>
        
    <hr>
    <i class="fa-solid fa-user"></i>
    <label>Usuario</label>   
    <input type="text" name="usuario" placeholder="Nombre de Usuario" required> 

    <i class="fa-solid fa-lock"></i>
    <label>Contraseña</label>
    <input type="text" name="contrasena" placeholder="Contraseña" required>
    <hr>
    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
    <a href="Registro.php" class="btn btn-secondary">Registrarse</a>
 </form>
</body>
</html>