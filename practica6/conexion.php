<?php
    $host="localhost";
    $db="agenda";
    $user="root";
    $pass="";
    try {
        $db=new PDO("mysql:host=$host;dbname=$db",$user,$pass);
    } catch (Exception $e) {
        die('Error connection: '. $e->getMessage());
    }
?>