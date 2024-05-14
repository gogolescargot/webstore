<?php

try {
    $db = new PDO('mysql:host=template;dbname=template;port=template;charset=utf8','template','');
} 
catch (Exception $e) {
    die('Error : '. $e -> getMessage());
}

?>
