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
    if (isset($_POST['submit'])) {
        foreach ($_POST as $campo => $valor) {
            $_SESSION['registro'][$campo] = $valor;
        }
        echo $_SESSION['registro']['name'] . "<br>";
        echo $_SESSION['registro']['email'] . "<br>";
        echo $_SESSION['registro']['clave'] . "<br>";
    }
    ?>
    <form method="post" action="">
        <input type="text" name="name" placeholder="Nombre" />
        <input type="text" name="email" placeholder="Email" />
        <input type="password" name="clave" placeholder="Clave" />
        <input name="submit" type="submit" value="Guardar" />
    </form>
</body>

</html>