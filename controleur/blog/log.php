<?php 
//on efface un précédent mot de passe
session_start();
session_destroy();
//on affiche la page
include_once('vue/blog/log.php');