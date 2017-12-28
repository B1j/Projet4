<?php
include_once('../../modele/connexion_sql.php');

session_start();

include_once('../../modele/blog/billet.php');
$editedBillet = new Billet();

// récupération des variables nécéssaire a l'envoi
$id = $_POST['id'];
$titre = $_POST['titre'];
$contenu = $_POST['contenu'];


$editedBillet->editBillet($id, $titre, $contenu);

header('Location: ../../index.php?section=admin');
?>