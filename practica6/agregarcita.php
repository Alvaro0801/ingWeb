<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="form">
        <?php 
            if($_POST){
                include("./conexion.php");
                $hora=$_POST["hora"];
                $asunto=$_POST["asunto"];
                $fecha=date("Y-m-d"); 
                $con=$db->prepare('INSERT INTO citas (horacita,diacita,asuntocita) VALUES (?,?,?)');
                $con->execute([$hora,$fecha,$asunto]);
                
                echo '<p>Cita Agregada</p>';
            }
        ?>
        <form method="post">
            <div class="form__title">CITA PARA EL DIA</div>
            <div class="form__group">
                <label for="hora" class="form__label">Hora</label>
                <input type="time" name="hora" id="hora">
            </div>
            <div class="form__group">
                <label for="asunto" class="form__label">Asunto</label>
                <input type="text" name="asunto" id="asunto">
            </div>
            <button class="form__submit" id="enviarC" type="submit">Enviar</button>
            <br>
            <button><a href="index.php">Cancelar</a></button>
        </form>
    </div>
</body>
</html>