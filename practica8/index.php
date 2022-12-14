<?php

//Requiero los archivos de clase para incluirlos en este script
require("Autobus.php");
require("Furgoneta.php");
require("Coche.php");
    $sen=false;
if ($_POST) {
    $tipo = $_POST['tipo'];
    $auto = "";
    switch ($tipo) {
        case 1:
            $auto = new Autobus();
            $tipomsg = "Autobus";
            break;
        case 2:
            $auto = new Furgoneta();
            $tipomsg = "Furgoneta";
            break;
        case 3:
            $auto = new Coche();
            $tipomsg = "Coche";
            break;
    }

    echo "<div> ¿Puedo aparcar el " . $tipomsg . " en la superficie?:
        <strong>";
    echo ($auto->puedeAparcar('superficie')) ? 'si' : 'no';
    echo "</strong></div>";
    echo "<div> ¿Puedo aparcar el " . $tipomsg . " en la subterraneo1?:
    <strong>";
    echo ($auto->puedeAparcar('subterraneo1')) ? 'si' : 'no';
    echo "</strong></div>";
    echo "<div> ¿Puedo aparcar el " . $tipomsg . " en la subterraneo2?:
    <strong>";
    echo ($auto->puedeAparcar('subterraneo2')) ? 'si' : 'no';
    echo "</strong></div>";
    echo "<button id=\"next\">Siguiente</button>";
    echo "<script>
        document.querySelector('#next').addEventListener('click',(e)=>{
            window.location.href = 'formDatos.php?tipo=$tipomsg';
        })
    </script>";
} else if($_GET){
    $tipo = $_GET['tipo'];
    $auto = "";
    $marca =$_GET['color'];
    $modelo =$_GET['modelo'];
    $color =$_GET['color'];
    $propietario =$_GET['prop'];
    echo "<div> <h2>Vehiculo: $tipo</h2></div>";
    switch ($tipo) {
        case 'Autobus':
            $auto = new Autobus();
            $tipomsg = "Autobus";
            $empresa=$_GET['emp'];
            $auto->setEmpresa($empresa);
            echo "<div>
            ¿A qué empresa pertenece el autobús?:
            <strong>";
            echo $auto->getEmpresa()."</strong></div>";
            break;
        case 'Furgoneta':
            $auto = new Furgoneta();
            $tipomsg = "Furgoneta";
            break;
        case 'Coche':
            $auto = new Coche();
            $tipomsg = "Coche";
            break;
    } 
    $auto->setMarca($marca);
    $auto->setModelo($modelo);
    $auto->setColor($color);
    $auto->setPropietario($propietario);

    echo "<div> <strong>Marca: </strong> ";
    echo $auto->getMarca()."</div>";
    echo "<div> <strong>Modelo: </strong>";
    echo $auto->getModelo()."</div>";
    echo "<div> <strong>Color: </strong> ";
    echo $auto->getColor()."</div>";
    echo "<div> <strong>Propietario: </strong> ";
    echo $auto->getPropietario()."</div>";

    echo "<div> ¿Puedo aparcar el " . $tipomsg . " en la superficie?:
        <strong>";
    echo ($auto->puedeAparcar('superficie')) ? 'si' : 'no';
    echo "</strong></div>";
    echo "<div> ¿Puedo aparcar el " . $tipomsg . " en la subterraneo1?:
    <strong>";
    echo ($auto->puedeAparcar('subterraneo1')) ? 'si' : 'no';
    echo "</strong></div>";
    echo "<div> ¿Puedo aparcar el " . $tipomsg . " en la subterraneo2?:
    <strong>";
    echo ($auto->puedeAparcar('subterraneo2')) ? 'si' : 'no';
    echo "</strong></div>";
}else {
?>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <form action="" method="post">
            <label for="">¿Que vehiculo es?</label>
            <input type="radio" name="tipo" id="" value="1">
            Autobus
            <input type="radio" name="tipo" id="" value="2">
            Furgoneta
            <input type="radio" name="tipo" id="" value="3">
            Coche

            <button type="submit">Enviar</button>
        </form>
    </body>

    </html>
<?php
}
 
?>

