<?php
    $datosPersonales = array ("nombre", "apellidos", "email");
    function clearData($cadena){
        $cadena_limpia = trim($cadena);
        $cadena_limpia = htmlspecialchars($cadena_limpia);
        $cadena_limpia = stripslashes($cadena_limpia);
        return $cadena_limpia;
    }
    // Datos iniciales
    $nombre=$apellidos=$email = "";
    $msgErrorNombre=$msgErrorApellidos=$msgErrorEmail = "";
    $ProcesaFormulario = false;

    // Validación
    if (isset($_POST['enviar'])){
        $nombre=clearData($_POST['nombre']);
        $apellidos=clearData($_POST['apellidos']);
        $email=clearData($_POST['email']);
        $ProcesaFormulario = true;
        $correo = $_POST['email'];
        //Validación nombre
        if (empty ($nombre)){
            $msgErrorNombre= "Nombre requerido";
            $nombre="";
            $ProcesaFormulario = false;
        }
        // Validación apellidos
        if (empty($apellidos)) {
            $msgErrorApellidos = "Apellido requerido";
            $apellidos= "";
            $ProcesaFormulario = false;
        }
        // Validación email
        if (!(filter_var ($correo, FILTER_VALIDATE_EMAIL))){
            $msgErrorEmail = "Email incorrecto";
            $email = "";
            $ProcesaFormulario = false;
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
    <title>Document</title>
</head>
<body>
    <div class="form">
    <?php

        if ($ProcesaFormulario){
        // muestra los datos
            foreach ($_POST as $valor) {
                if ($valor != "Enviar") echo $valor.'</br>';
            }
        } else {
            if (isset($_POST['enviar'])){
                echo '<div class="form__group form__label">';
                echo 'Ha ocurrido un error:'.$msgErrorNombre.' '.$msgErrorApellidos.' '.$msgErrorEmail;
                echo '</div>';
            }
            echo '<form action="'.htmlspecialchars($_SERVER["PHP_SELF"]).'" method="post">';
            foreach ($datosPersonales as $datos) {
                echo '<div class="form__group">';
                echo '<input type="text" name="'.$datos.'" placeholder="'.$datos.'" value="'.$$datos.'" />';
                echo '</div>';
            }
            echo "<input type=\"submit\" name=\"enviar\" placeholder=\"Send\" value=\"Enviar\" />";
        }
    ?>
    </div>
</body>

</html>