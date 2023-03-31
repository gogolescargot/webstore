<?php

try {
    $db = new PDO('mysql:host=mysql;dbname=gfuele;port=3306;charset=utf8','gauthier.galon','');
} 
catch (Exception $e) {
    die('Error : '. $e -> getMessage());
}

?>