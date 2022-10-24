<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" id="myForm" method="post">
        Nombre: <input type="text" name="nombreText" id="myText" value="valor por defecto">
        <input type="submit" name="nombreSubmit" value="Enviar">
    </form>
    <?php
        if(isset($_POST["nombreSubmit"])){    
    ?>
    <p id="demo1"></p>
    <p id="demo2"></p>
    <p id="demo3"></p>
    <script>
        document.getElementById("myText").size="50";
        document.getElementById("myText").maxLength="5";
        document.getElementById("myText").pattern="[A-Za-z]{3}";
        document.getElementById("myText").placeholder="Solo ingresa hasta 5 caracteres";
        document.getElementById("myText").select();
        document.getElementById("myText").focus();
        var x=document.getElementById("myText").form.id;
        document.getElementById("demo1").innerHTML=x;
        var y=document.getElementById("myText").value;
        document.getElementById("demo2").innerHTML=y;
        var z=document.getElementById("myText").name;
        document.getElementById("demo3").innerHTML=z;
    </script>
    <?php
        }
    ?>
</body>
</html>