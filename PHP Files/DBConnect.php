<?php
$database = "";
$message = "";
if ($database = new PDO('mysql:host=localhost;dbname=military_equipment_ukraine', 'root', '')) {
    $message = "Добридень and welcome to this page.";
} else {
    $message = "You're not connected to our database, please connect to our database!";
}
?>
