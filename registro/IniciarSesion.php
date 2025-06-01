<?php
 session_start();
 include ('Coneccion.php');
    if (isset($_POST['usuario']) && isset($_POST['contrasena'])) {
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $usuario = validate($_POST['usuario']);
        $contrasena = validate($_POST['contrasena']);

        if (empty($usuario)) {
            header("Location: IniciarSesion.php?error=El usuario es obligatorio");
            exit();
        } else if (empty($contrasena)) {
            header("Location: IniciarSesion.php?error=La contraseña es obligatoria");
            exit();
        } else {
            $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='$contrasena'";
            $result = mysqli_query($conexion, $sql);
            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if ($row['usuario'] === $usuario && $row['contrasena'] === $contrasena) {
                    header("Location: index.php");
                    exit();
                } else {
                    header("Location: IniciarSesion.php?error=Usuario o contraseña incorrectos");
                    exit();
                }
            } else {
                header("Location: IniciarSesion.php?error=Usuario o contraseña incorrectos");
                exit();
            }
        }
    }
        
    
    