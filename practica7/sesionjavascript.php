<?php
    $cookie_name="cliente";
    $cookie_value="Alfonso";
    setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="cookies"> Van a aparecer datos</div>
    <script>
        document.cookie="<b>Bienvenido a este sitio</b>";
        var getCookies=document.cookie;
        document.getElementById("cookies").innerHTML=getCookies;
    </script>  
</body>
</html>