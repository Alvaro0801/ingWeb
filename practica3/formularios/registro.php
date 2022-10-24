<?php
    function clearData($cadena){
        $cadena_limpia = htmlspecialchars($cadena);
        return $cadena_limpia;
    }

    function campoVacio($ind){
        print "<p class=\"msg__error\">El campo $ind esta vacío.</p>";
    }
    
    function validarEspacio($valor,$i){
        if(preg_match("/^\s+$/",$valor)){
            print "<p class\"msg__error\">$i no debe estar llenado con espacios<\p>";
            $GLOBALS["error"]=true;
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registro</title>
</head>

<body>
    <div class="form">
        <?php
            $error=false;
            if($_POST){
                $nombre=clearData($_POST['nombre']);
                $email=clearData($_POST['email']);
                $educacion=clearData($_POST['educacion']);
                $nac= isset($_POST['nacionalidad'])? clearData($_POST['nacionalidad']) : '';
                $idioma= isset($_POST['idiomas'])? $_POST['idiomas']: '';
                $pass=$_POST['password'];
                $datos=[
                    "nombre" => $nombre,
                    "password" => $pass,
                    "educacion" => $educacion,
                    "nacionalidad" => $nac,
                    "idioma" => $idioma, 
                    "email" => $email
                ];
                foreach ($datos as $i => $valor) {
                    if(empty($valor)){
                        campoVacio($i);
                        $error=true;
                        continue;
                    }
                    if($i!="idioma"){
                        validarEspacio($valor,$i);
                    }
                }
                if(!empty($nombre)){
                    if(!preg_match("/^[A-Za-z ]+$/",$nombre)){
                        echo '<p class="msg__error">Nombre solo debe contener letras</p>';
                    }
                }
                if (!(filter_var ($_POST['email'], FILTER_VALIDATE_EMAIL))){
                    echo '<p class="msg__error">Email Invalido.</p>';
                }
                if(!$error){
                    echo '<p class="msg_success">Los datos fueron enviados correctamente.</p>';
                }
            }
        ?>
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
    </div>

</body>

</html>