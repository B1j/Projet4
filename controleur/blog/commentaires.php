<?php
//ajout de l'objet billet
include_once('modele/blog/billet.php');
$billet = new Billet();
//recupération du billet
$billet->getById($_GET['billet']);

//recuperation des commentaires
include_once('modele/blog/get_commentaires.php');
$commentaires = get_commentaires($_GET['billet']);
//on affiche la vue
include_once('vue/blog/commentaires.php');