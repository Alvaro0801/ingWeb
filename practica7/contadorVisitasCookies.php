<?php
    if(isset($_COOKIE['contador'])){
        setcookie('contador',$_COOKIE['contador']+1,time()+365*24*60*60);
        $mensaje='Número de visitas: ' . $_COOKIE['contador']+1;
    }else{
        setcookie('contador',1,time()+365*24*60*60);
        $mensaje='Bienvenido a nuestra página web';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba de cookie</title>
</head>
<body>
    <p><?= $mensaje;?></p>
</body>
</html>