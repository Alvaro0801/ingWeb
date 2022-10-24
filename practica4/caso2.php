<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="myForm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="submit" name="nombreSubmit" value="Mensaje de confirmación">
    </form>
    <?php
        if(isset($_POST['nombreSubmit'])){
    ?>
    <p id="demo"></p>
    <script>
        let text="Presione este botón";
        if(confirm(text)==true){
            text="Presiono el botón OK!";
        }else{
            text="Cancelado";
        }
        document.getElementById("demo")
.innerHTML=text;    
    </script>
    <?php
        }
    ?>
</body>
</html>