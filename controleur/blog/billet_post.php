<?php
include_once('../../modele/connexion_sql.php');

session_start();

include_once('../../modele/blog/billet.php');
$envoiBillet = new Billet();

// récupération des variables nécéssaire a l'envoi
$titre = $_POST['titre'];
$contenu = $_POST['contenu'];

$envoiBillet->sendBillet($titre, $contenu);

header('Location: ../../index.php?section=admin');
?>