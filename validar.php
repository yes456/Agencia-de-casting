<?php 
    session_start();
    $usuario    = $_POST["usuario"];
    $_SESSION['usuario']=$usuario;
    $contrasena = $_POST["contrasena"];
    include 'conexion.php';
    $consulta   = "Select * FROM usuario where usuario='$usuario' AND contrasena='$contrasena' ";
    $enviar=mysqli_query($con, $consulta);
    $filas=mysqli_num_rows($enviar);
    mysqli_close($con);
    echo $filas;
    if ($filas>0){
        header("location:home.php");
    }
    else{
        include("index.html");
    }
?>
