<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //inicia la sesión
    session_start();
    if (isset($_POST['envio'])) {
        $_SESSION["registro"]['id'] = 0;
        $_SESSION['registro']['name'] = "<b>No ha usuario, recargar pagina</b>";
        session_destroy();
    }
    if (!isset($_SESSION['registro'])) {
        $_SESSION['registro'] = array(
            "id" => 001,
            "name" => "Alex Sanchez"
        );
    }
    echo "Valor de Sesion de usuario " . $_SESSION['registro']['id'] . " " . $_SESSION['registro']['name'] . "
se mantendra incluso si recargamos el sitio web.<br>";
    ?>
    <form method="post" action="">
        <input name="envio" type="submit" value="Eliminar sesion" />
    </form>
</body>

</html>