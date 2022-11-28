<?php
    include("./conexion.php");

    if($_POST){
        $idcita=$_POST["idcita"];
        $idcontacto=$_POST["idcontacto"];
        $con=$db->prepare('INSERT INTO citas_contacto (idcita,idcontacto) VALUES (?,?)');
        $con->execute([$idcita,$idcontacto]);
                
        echo '<p>Cita Agendada</p>';
    }

    function obtenerCitasOcupadas($db) {
        $sql = 'SELECT p.*,c.* FROM contacto p INNER JOIN citas_contacto cc ON p.id=cc.idcontacto INNER JOIN citas c ON cc.idcita=c.idcita';
        $consulta=$db->query($sql);
        $result = $consulta->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function obtenerCitasLibres($db){
        $sql = 'SELECT c.* FROM citas c LEFT JOIN citas_contacto cc ON cc.idcita=c.idcita WHERE cc.idcita IS NULL';
        $consulta=$db->query($sql);
        $result = $consulta->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    function obtenerContactos($db){
        $sql = 'SELECT * FROM contacto';
        $consulta=$db->query($sql);
        $result = $consulta->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    $citas=obtenerCitasOcupadas($db);
    $citasLibres=obtenerCitasLibres($db);
    $contactos=obtenerContactos($db);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleAgendar.css">
    <title>Document</title>
</head>
<body>
    <div class="tablas">
        <h2>Citas Programadas</h2>
        <table>
            <thead>
                <th>ID</th>
                <th>Paciente</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Asunto</th>
            </thead>
            <tbody>
                <?php
                    // $arr = $resultado->fetchAll(PDO::FETCH_ASSOC);
                    foreach($citas as $cita) {
                        
                        echo "<tr>";
                        echo '<td>'.$cita["id"].'</td>';
                        echo '<td>'.$cita["nombre_apellido"].'</td>';
                        echo '<td>'.$cita["diacita"].'</td>';
                        echo '<td>'.$cita["horacita"].'</td>';
                        echo '<td>'.$cita["asuntocita"].'</td>';
                        echo "</tr>";
                    }
                ?>   
            </tbody>
        </table>
    </div>
    <div class="tablas">
        <h2>Citas Disponibles</h2>
        <table>
            <thead>
                <th>ID</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Asunto</th>
            </thead>
            <tbody id="citas">
                <?php
                    foreach($citasLibres as $cita) {
                        
                        echo '<tr class="fila_cita">';
                        echo '<td>'.$cita["idcita"].'</td>';
                        echo '<td>'.$cita["diacita"].'</td>';
                        echo '<td>'.$cita["horacita"].'</td>';
                        echo '<td>'.$cita["asuntocita"].'</td>';
                        echo "</tr>";
                    }
                ?>   
            </tbody>
        </table>
    </div>
    <form action="" method="post">
        <div>
            <h2>Agendar Cita</h2>
        </div>
        <label for="idcontacto">Contacto</label>
        <select name="idcontacto" id="idcontacto">
            <option>Seleccione una opcion</option>
            <?php
                foreach($contactos as $contacto) {
                   echo '<option value='.$contacto["id"].'>';
                   echo $contacto["nombre_apellido"];
                   echo "</option>";     
                }
            ?>   
        </select>
        <div class="cita"></div>
        
        <br>
        <button type="submit">Guardar</button>
    </form>
    <script>
        document.addEventListener('click',(e)=>{
            const fila=e.target.parentNode;
            if(fila.classList=="fila_cita"){
                const cita=document.querySelector('.cita');
                let citaSave=`<input type="hidden" name="idcita" value="${fila.children[0].innerHTML}">
                <label for="">Fecha</label>
                <input type="date" name="" id="fecha" value="${fila.children[1].innerHTML}" disabled>
                <label for="">Hora</label>
                <input type="time" name="" id="hora" value="${fila.children[2].innerHTML}" disabled>
                <label for="">Asunto</label>
                <input type="text" name="" id="asunto" value="${fila.children[3].innerHTML}" disabled>`;
                cita.innerHTML=citaSave;
            }

        })
    </script>
</body>
</html>