
<?php
    require 'conexion.php';
    
    session_start();
    $nombreUS = $_POST['nombre'];
    $apellidoPUS = $_POST['apellidoP'];
    $apellidoMUS = $_POST['apellidoM'];
    $emailUS = $_POST['email'];
    $rfcUS = $_POST['rfc'];
    $passwordUS = $_POST['contra'];
    $tipoUS = $_POST['roles'];
    $pruebaA ="No puedes";
    $codigojs=' 
    <script>

    alert("holi");
    </script>';


    $query = "INSERT INTO `usuarios` (`idusuario`, `nombre`, `app`, `apm`, `correo`, `contra`, `rfc`, `idrol`) VALUES (NULL, '$nombreUS', '$apellidoPUS', '$apellidoMUS', '$emailUS', '$passwordUS', '$rfcUS', '$tipoUS')";

    if($nombreUS!=NULL && $apellidoPUS!=NULL && $apellidoMUS!=NULL && $emailUS!=NULL && $rfcUS!=NULL && $passwordUS!=NULL && $tipoUS!=NULL){

        if(mysqli_query($con, $query)){

                header('location:msgexito.php');
        
        }
        else{
           header('location:login.html'); 
            
        }

    }else{
    header('location:login.html');
    
    }
    
    
?>