<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="cookies">aqui va mensaje de cookie</div>
    <div id="fecha">muestra fecha de expiración</div>
    <script>
        var date=new Date()
        date.setFullYear(2022,11,3)
        date.setHours(22 -5)
        date.setMinutes(30)
        date.setSeconds(0)
        document.cookie="usuario = 1; expires=" + date.toUTCString();
        var getCookies=document.cookie;
        document.getElementById("cookies").innerHTML=getCookies;
        document.getElementById("fecha").innerHTML=date.toUTCString();
    </script>
</body>
</html>