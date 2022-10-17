<?php
    function clearData($cadena){
        $cadena_limpia = trim($cadena);
        $cadena_limpia = htmlspecialchars($cadena_limpia);
        $cadena_limpia = stripslashes($cadena_limpia);
        return $cadena_limpia;
    }

    function campoVacio($ind){
        print "El campo $ind esta vacío <br>";
    }
    if($_POST){
        foreach ($_POST as $i => $valor) {
            if ($valor != "Enviar"){
                if(empty($valor)){
                    campoVacio($i);
                }
            }
        }
        // $nac=$_POST['nacionalidad'];
        // if(isset($nac)){
        //     echo 'nacionalidad vacio';
        // }
        $nombre=$_POST['nombre'];
        $pass=$_POST['password'];
        $email=$_POST['email'];
        if(!preg_match("/[A-Za-z ]/",$nombre)){
            echo 'Nombre solo debe contener letras<br>';
        }
        if(!preg_match("/$/",$nombre)){
            echo 'Nombre no debe estar relleno con espacios';
        }
        if (!(filter_var ($_POST['email'], FILTER_VALIDATE_EMAIL))){
            echo 'Email Invalido';
        }
    }
    // // Datos iniciales
    // $nombre=$apellidos=$email = "";
    // $msgErrorNombre=$msgErrorApellidos=$msgErrorEmail = "";
    // $ProcesaFormulario = false;

    // // Validación
    // if (isset($_POST['enviar'])){
    //     $nombre=clearData($_POST['nombre']);
    //     $apellidos=clearData($_POST['apellidos']);
    //     $email=clearData($_POST['email']);
    //     $ProcesaFormulario = true;
    //     $correo = $_POST['email'];
    //     //Validación nombre
    //     if (empty ($nombre)){
    //         $msgErrorNombre= "Nombre requerido";
    //         $nombre="";
    //         $ProcesaFormulario = false;
    //     }
    //     // Validación apellidos
    //     if (empty($apellidos)) {
    //         $msgErrorApellidos = "Apellido requerido";
    //         $apellidos= "";
    //         $ProcesaFormulario = false;
    //     }
    //     // Validación email
    //     if (!(filter_var ($correo, FILTER_VALIDATE_EMAIL))){
    //         $msgErrorEmail = "Email incorrecto";
    //         $email = "";
    //         $ProcesaFormulario = false;
    //     }
    // }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <table cellspacing=2 cellpadding=2>
            <tr>
                <td>Nombre:</td>
                <td><input type="text" name="nombre" maxlength="50"></td>
            </tr>
            <tr>
                <td>Contraseña:</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td>Educacion:</td>
                <td><select name="educacion">
                        <option value="sin-estudios">Sin estudios</option>
                        <option value="educacion-obligatoria" selected="selected">Educación Obligatoria</option>
                        <option value="formacion-profesional">Formación profesional</option>
                        <option value="universidad">Universidad</option>
                    </select> </td>
            </tr>
            <tr>
                <td>Nacionalidad:</td>
                <td>
                    <input type="radio" name="nacionalidad" value="argentino">Argentino</input>
                    <input type="radio" name="nacionalidad" value="peruano">Peruana</input>
                    <input type="radio" name="nacionalidad" value="chileno">Chileno</input>
                    <input type="radio" name="nacionalidad" value="ecuatoriano">Ecuatoriano</input>
                    <input type="radio" name="nacionalidad" value="colombiano">Colombiano</input>
                    <input type="radio" name="nacionalidad" value="otra">Otra</input><br>
                </td>
            </tr>
            <tr>
                <td>Idiomas:</td>
                <td>
                    <input type="checkbox" name="idiomas[]" value="español" checked="checked">Español</input>
                    <input type="checkbox" name="idiomas[]" value="inglés">Inglés</input>
                    <input type="checkbox" name="idiomas[]" value="francés">Francés</input>
                    <input type="checkbox" name="idiomas[]" value="aleman">Alemán</input><br>
                </td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td colspan=2><input type="submit" name="submit" value="Enviar"></td>
            </tr>
        </table>
    </form>

</body>

</html>