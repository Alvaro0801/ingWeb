<?php
session_start();
if (isset($_SESSION['contador'])) {
    $_SESSION['contador'] = $_SESSION['contador'] + 1;
    $mensaje = 'Número de visitas: ' . $_SESSION['contador'];
} else {
    $_SESSION['contador'] = 1;
    $mensaje = 'Bienvenido a nuestra página web';
}
?>
<html>
<head>
    <title>Prueba de sesion</title>
</head>
<body>
    <p><?php echo $mensaje; ?></p>
    <?php
    if ($_SESSION['contador'] > 1) {
        echo "<form method='post'>";
        echo "<input type='submit' value='Borrar sesion' onclick='submit();'>";
        echo "<input type='hidden' name='opt' value='del'>";
        echo "</form>";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if ($_REQUEST['opt'] == "del") {
                // Borra todas las variables de sesión
                $_SESSION = array();
                // Borra la cookie que almacena la sesión
                if (isset($_COOKIE[session_name()])) {
                    setcookie(session_name(), '', time() - 42000, '/');
                }
                // Finalmente, destruye la sesión
                session_destroy();
            }
    ?>
        <script language="JavaScript">
        document.location.href = "autenticar_sesion.php";
        </script>
    <?php
        }
    }
    ?>
</body>

</html>