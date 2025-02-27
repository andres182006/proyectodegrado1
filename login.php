<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $tipo_usuario = $_POST['tipo_usuario'];
    $usuario = $_POST['usuario'];
    $contraseña = $_POST['contraseña'];
    
    if ($tipo_usuario == 'admin' && $usuario == 'admin' && $contraseña == 'admin'){
        header('Location: admin.php');
        exit();
    }else if ($tipo_usuario == 'cliente' && $usuario == 'cliente' && $contraseña == 'cliente'){
        header('Location: cliente.php');
        exit();
    }else if ($tipo_usuario == 'empleado' && $usuario == 'empleado' && $contraseña == 'empleado'){
        header('Location: empleado.php');
        
    }else{
        echo 'Usuario o contraseña incorrectos';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3 style="text-align: center;">La esquina de jose</h3>
    <h2 style="text-align: center; margin-top: 100px;">iniciar sesion</h2>
    <form action="login.php" method="post" style="display: flex; flex-direction: column; align-items: center; margin-top: 50px;">
        <label for="tipo_usuario">tipo de usuario:</label>
        <select name="tipo_usuario" id="tipo_usuario">
        <option value="admin">Administrador</option>
        <option value="cliente">Cliente</option>
        <option value="empleado">Empleado</option>
        </select>
        <br>
        <input type="text" name="usuario" placeholder="Usuario" style="margin-bottom: 20px;">
        <input type="password" name="contraseña" placeholder="Contraseña" style="margin-bottom: 20px;">

        <input type="submit" value="Iniciar sesion">
    </form>
    
</body>
</html>
