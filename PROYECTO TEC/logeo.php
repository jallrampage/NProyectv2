<?php
    require 'conexion.php';
    session_start();
    $miUsuario = $_POST['correo'];
    $miPassword = $_POST['password'];
    $miPassword_SHA1 = sha1($miPassword);

    $query = "SELECT count(*) AS contar FROM usuarios WHERE correo = '$miUsuario' AND contra = '$miPassword'";
    $consulta = mysqli_query($con, $query);
    $array = mysqli_fetch_array($consulta);

    if($array['contar'] > 0){
        $_SESSION['username'] = $miUsuario;
        $_SESSION['password'] = $miPassword;
        header('location:home.html');
        
    }
    else{
        header('location:login.html');
        
    }
    
?>