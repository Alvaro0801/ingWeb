<?php  
    $dbh = mysqli_connect('localhost', 'root', '123456'); // debe colocar su contraseña personalizada     
     
    if ($dbh->connect_error) {
        die("Incapaz de conectar a servidor MySQL: " . mysqli_error());
    }
    if (!mysqli_select_db($dbh,'agenda'))      
        die("Incapaz de seleccionar base de datos: " . mysqli_error());  
    
    $nombre=$_POST["nombre"];
    $sexo=$_POST["sexo"];
    $email=$_POST["email"];
    $pais=$_POST["pais"];
    $tlf=$_POST["tlf"];

    if($con=$dbh->prepare('INSERT INTO contacto (nombre_apellido,genero,telefono,email,pais) VALUES (?,?,?,?,?)')){
        $con->bind_param("sssss", $nombre,$sexo,$tlf,$email,$pais);
        $con->execute();
        echo json_encode(['ok'=>true]);
    }
    $dbh->close();
    
?>