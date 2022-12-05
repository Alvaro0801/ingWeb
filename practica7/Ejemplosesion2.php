<?php
    session_start();
    echo 'Bienvenido a la página #2<br />';
    echo $_SESSION['color']; // verde
    echo "<br>";
    echo $_SESSION['animal']; // gato
    echo "<br>";
    echo date('Y m d H:i:s', $_SESSION['instante']);
    echo "<br>";
    echo "<br>";
    echo 'session_id(): ' . session_id();
    echo "<br />\n";
    echo 'session_name(): ' . session_name();
    echo '<br /><a href="ejemplosesion21.php">página 1</a>';
?>