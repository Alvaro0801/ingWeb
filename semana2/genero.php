<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>

<body>
    <form action="trabajos.php" method="get" class="form">
        <?php 
            if($_POST['nombre']){
                $nombre=$_POST['nombre'];
                print "<input type=\"hidden\" name=\"nombre\" value=\"$nombre\">";
            }
            if($_POST['trabajo']){
                $trabajo=$_POST['trabajo'];
                for($i=0;$i<count($_POST['trabajo']);$i++){ 
                    print "<input type=\"hidden\" name=\"trabajo[]\" value=\"$trabajo[$i]\">";
                }
            }
            ?>
            <div class="form__group">
                <label class="form__label">Genero</label>
                <input type="radio" name="genero" id="" value="Hombre">
                <label for="">Hombre</label>
                <input type="radio" name="genero" id="" value="Mujer">
                <label for="">Mujer</label>
            </div>
            <input type="submit" value="Buscar">
    </form>
    <?php
    ?>
</body>

</html>