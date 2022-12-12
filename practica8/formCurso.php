<?php
    class Curso
    {
        var $nombre;
        var $turno;
        var $horas;
    }
    $curso1 = new Curso;
    $sen=false;
    if($_GET){
        $curso1->nombre=$_GET['curso'];
        $curso1->turno=$_GET['turno'];
        $curso1->horas=$_GET['horas'];
        echo "Nombre del Primer curso: " . $curso1->nombre;
        echo "<br>";
        echo "Turno: " . $curso1->turno;
        echo "<br>";
        echo "Cantidad de horas: " . $curso1->horas;
        echo "<br>";
        $sen=true;
    }
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
    
</body>
</html>
<?php
    if(!$sen){
?>
<script>
    let curso=prompt('Ingrese nombre de curso');
    while(curso==""){
        alert('El campo no debe estar vacio');
        curso=prompt('Ingrese nombre de curso');
    }
    let turno=prompt('Ingrese turno de curso');
    while(turno==""){
        alert('El campo no debe estar vacio');
        turno=prompt('Ingrese turno de curso');
    }
    let horas=prompt('Ingrese horas de curso');
    while(horas==""){
        alert('El campo no debe estar vacio');
        horas=prompt('Ingrese horas de curso');
    }
    window.location=`formCurso.php?curso=${curso}&turno=${turno}&horas=${horas}`;
</script>
<?php
    }
?>
