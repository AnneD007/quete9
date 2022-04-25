<?php
try
{
    $db = new PDO('mysql:host=localhost;dbname=pokemon150;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>