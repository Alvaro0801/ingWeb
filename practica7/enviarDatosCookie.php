<?php
date_default_timezone_set('America/Lima');
$expira = time() + 10;
$desc_expira = date('Y-M-d h:i:s a', $expira);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $f_name = $_REQUEST['f_name'];
    setcookie("f_name", $f_name, $expira);
}
if (isset($_COOKIE['f_name'])) {
    setcookie("f_name", $_COOKIE['f_name'], $expira);
    $f_name = $_COOKIE['f_name'];
}
echo "<html>";
echo "<head>";
echo "<title>Cookie Script</title>";
echo "</head>";
echo "<body>";
if (isset($f_name)) {
    echo "<h3>Bienvenido: " . $f_name . ", esta sesion expira dentro de " . $desc_expira;
} else {
    echo "<form method='POST'>";
    echo "Ingrese su nombre: <input type='text' name='f_name'>";
    echo "<input type='submit' name='submit' value='Enviar'>";
    echo "</form>";
}
echo "</body>";
echo "</html>";
