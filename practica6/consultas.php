<?php  
    $dbh = mysqli_connect('localhost', 'root', ''); // debe colocar su contraseña personalizada     
     
    if ($dbh->connect_error) {
        die("Incapaz de conectar a servidor MySQL: " . mysqli_error());
    }
    echo "conectado a ".$dbh->host_info . "<br>";
    if (!mysqli_select_db($dbh,'agenda'))      
        die("Incapaz de seleccionar base de datos: " . mysqli_error());  
   
    $sql_stmt = "SELECT * FROM contacto";  
     
   
    $result = mysqli_query($dbh,$sql_stmt);
    
    if (!$result)      
        die("Fallo acceso a conectarse a base de datos: " . mysqli_error());  
         
    $rows = mysqli_num_rows($result);  
            
    if ($rows) {      
        while ($row = mysqli_fetch_array($result)) {          
            echo 'ID: ' . $row['id'] . '<br>';          
            echo 'Nombres: ' . $row['nombre_apellido'] . '<br>';         
            echo 'Genero: ' . $row['genero'] . '<br>';          
            echo 'No. Contacto: ' . $row['telefono'] . '<br>';          
            echo 'Email: ' . $row['email'] . '<br>';          
            echo 'Ciudad: ' . $row['ciudad'] . '<br>';          
            echo 'Pais: ' . $row['pais'] . '<br><br>';      
        }  
    }  
    mysqli_close($dbh);  
?>