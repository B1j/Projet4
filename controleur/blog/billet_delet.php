<?php
include_once('../../modele/connexion_sql.php');

session_start();

include_once('../../modele/blog/billet.php');
$deletBillet = new Billet();

// récupération de variable nécéssaire à la suppression
$id = $_POST['id'];

$deletBillet->deletBilletById ($id);

header('Location: ../../index.php?section=admin');
?>