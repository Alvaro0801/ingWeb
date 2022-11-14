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
                $dbh = mysqli_connect('localhost', 'root', '123456'); // debe colocar su contraseña personalizada     
        
                if ($dbh->connect_error) {
                    die("Incapaz de conectar a servidor MySQL: " . mysqli_error());
                }
                if (!mysqli_select_db($dbh,'agenda'))      
                    die("Incapaz de seleccionar base de datos: " . mysqli_error());  
                
                $hora=$_POST["hora"];
                $asunto=$_POST["asunto"];
                $fecha=date("Y-m-d"); 
                if($con=$dbh->prepare('INSERT INTO cita (horacita,diacita,asuntocita) VALUES (?,?,?)')){
                    $con->bind_param("sss", $hora,$fecha,$asunto);
                    $con->execute();
                }  
                mysqli_close($dbh);
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