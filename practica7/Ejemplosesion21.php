<?php
    session_start();
    echo 'Bienvenido a la página #1';
    $_SESSION['color'] = 'verde';
    $_SESSION['animal'] = 'gato';
    $_SESSION['instante'] = time();
    
    echo '<br /><a href="ejemplosesion2.php">pagina 2 </a>';
?>