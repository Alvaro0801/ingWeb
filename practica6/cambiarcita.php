<?php
    include("./conexion.php");
    $idcita=$_GET["id"];

    $con=$db->prepare('SELECT * FROM citas WHERE idcita=?');
    $con->bindParam(1,$idcita);
    $con->execute();
    $resultado = $con->fetchAll();
    if(!$resultado){
?>
<script>
    alert("Error! No se ha encontrado la cita");
    window.location="index.php";
</script>
<?php
    }
?>
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
            date_default_timezone_set('UTC');
            $dia=date("d");
            $mes=date("m");
            $anio=date("Y");
            setlocale(LC_ALL, 'es_PE.UTF-8');
            $meses=["Enero", "Febrero","Marzo","Abril","Mayo","Junio","Julio"
            ,"Agosto","Setiembre","Octubre","Noviembre","Diciembre"];
            $fecha=$dia." de ".$meses[$mes-1]." del ".$anio;

            if($_POST){
                $fecha=$_POST["dia"];
                $con=$db->prepare('UPDATE citas SET diacita=? WHERE idcita=?');
                $con->bindParam(1,$fecha);
                $con->bindParam(2,$idcita);
                if($con->execute()){
                    echo "Cita actualizada";
                }
            }
        ?>
        <h2 id="fechaActual">LA FECHA ACTUAL ES: <?= $fecha ?></h2>
        <form action="" method="POST">
            <div class="form__group">
                <label for="fecha" class="form__label"></label>
                <input type="date" name="dia" value="<?= $resultado[0]["diacita"]?>">
            </div>
            <input type="hidden" name="id" value="<?= $resultado[0]["idcita"]?>">
            <button type="submit" class="form__submit">Actualizar</button>
            <br>
            <button><a href="index.php">Descartar Cambio</a></button>
        </form>
    </div>
    <script>
        const fecha=document.getElementById("fechaActual");

    </script>
</body>

</html>