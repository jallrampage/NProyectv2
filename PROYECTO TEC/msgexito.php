|<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Document</title>
</head>
<body>
    <script>
    swal({
    title: "Se Concreto El Proceso!",
    text: "Ya Puedes Iniciar Sesion!",
    icon: "success",
    button: "Aceptar!",
    })
    .then((value) => {
    if(value){
        prueba();
    }else{
        prueba();
    }
    });
        function prueba (){
            location.href="login.html";
        }
    </script>
    
</body>
</html>