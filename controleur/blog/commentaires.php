<?php
//ajout de l'objet billet
include_once('modele/blog/billet.php');
$billet = new Billet();
//recupération du billet
$id_billet = $_GET['billet'];
$billet->getById($id_billet);

//recuperation des commentaires
include_once('modele/blog/commentaire.php');
$commentaire = new Commentaire();
$commentaires = $commentaire->getForId($_GET['billet']);
//on affiche la vue
include_once('vue/blog/commentaires.php');