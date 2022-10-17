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
    <?php if($_GET){?>
        <div class="form">
        Nombre: <?= $_GET['nombre']?><br>
        Puesto de trabajo:
        <?php 
            if($_GET['trabajo']){
                $trabajo=$_GET['trabajo'];
                for($i=0;$i<count($trabajo);$i++){
                    print "<br>-$trabajo[$i]";
                }
            }
        ?><br>
        Genero: <?= $_GET['genero']?>
        </div>
    <?php }else{ ?>
        <form action="genero.php" method="post" class="form">
            <div class="form__title">Formulario</div>
            <div class="form__group">
                <label for="" class="form__label">Nombre</label>
                <input type="text" name="nombre" id="" required>
            </div>
            <div class="form__group">
                <label for="" class="form__label">Password</label>
                <input type="password" name="pass" id="" required>
            </div>
            <div class="form__group">
                <label for="" class="form__label">Puesto de trabajo</label>
                <input type="checkbox" name="trabajo[]" id="trabajo" value="Direccion">
                <label for="">Dirección</label>
                <input type="checkbox" name="trabajo[]" id="trabajo" value="Técnico">
                <label for="">Técnico</label>
                <input type="checkbox" name="trabajo[]" id="trabajo" value="Empleado">
                <label for="">Empleado</label>
            </div>
            <input type="submit" value="Enviar">
        </form>
    <?php } ?>
</body>
</html>