<?php
//recupération du billet
include_once('modele/blog/get_billet.php');
$billet = get_billet($_GET['billet']);
//recuperation des commentaires
include_once('modele/blog/get_commentaires.php');
$commentaires = get_commentaires($_GET['billet']);
//on affiche la vue
include_once('vue/blog/commentaires.php');