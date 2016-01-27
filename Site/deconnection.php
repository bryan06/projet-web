<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=cwitter', 'root', '');
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
session_start();
session_unset ();
session_destroy ();
header ('location: index.php');
?>