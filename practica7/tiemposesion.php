<?php
session_start();
$array = array(
    1 => "sesionjavascript.php",
    2 => "sesionjavascriptfecha.php",
    3 => "contadorVisitasCookies.php",
    4 => "enviarDatosCookie.php",
    5 => "Ejemplosesion21.php",
    6 => "contadorVisitasSesiones.php",
    7 => "formulariosesion.php",
    8 => "sesionusuario.php",
);
$direccion_aleatoria = $array[mt_rand(1, count($array))];
// establecer el tiempo de espera (en segundos)
$inactive = 2;
// compruebe si $ _SESSION ["timeout"] está configurado
if (isset($_SESSION["timeout"])) {
 // Calcula el "tiempo de vida" de la sesión.
 $sessionTTL = time() - $_SESSION["timeout"];
 if ($sessionTTL > $inactive) {
 session_destroy();
 header("Location: http://localhost/ingweb/practica7/".$direccion_aleatoria);
 }
}
$_SESSION["timeout"] = time();
echo $direccion_aleatoria;
