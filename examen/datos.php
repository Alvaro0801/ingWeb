<?php
    if($_POST){
        $nombre=$_POST["nombre"];
        $edad=$_POST["edad"];
        $dni=$_POST["dni"];
        echo "<p>Nombre: ".$nombre."</p>";
        echo "<p>Edad: ".$edad."</p>";
        echo "<p>Dni: ".$dni."</p>";
        if($edad>=18)
            echo "<p>".$nombre." es mayor de edad</p>";

        $db = mysqli_connect('localhost', 'root', '123456'); // debe colocar su contraseña personalizada     
     
        if ($db->connect_error) {
            die("Incapaz de conectar a servidor MySQL: " . mysqli_error());
        }
        if (!mysqli_select_db($db,'contactos'))      
            die("Incapaz de seleccionar base de datos: " . mysqli_error());  
    
        if($con=$db->prepare('INSERT INTO contacto (nombre,dni,edad) VALUES (?,?,?)')){
            $con->bind_param("sss", $nombre,$dni,$edad);
            $con->execute();
            echo "Contacto agregado";
        }
        $db->close();
    }else{
        echo "No se han enviado parametros de tipo POST";
    }
    
?>