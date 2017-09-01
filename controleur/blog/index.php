<?php

// On calcul la page voulu et on demande les billets
include_once('modele/blog/get_billets.php');
if(isset($_GET['page']) AND ctype_digit($_GET['page']))
{
    $page = ($_GET['page'] * 5) - 5;
}    
else
{
    $page = 0;
}
$billets = get_billets($page, 5);

//ajout du calcul du nombre de pages
include_once('modele/blog/pagination.php');

// On effectue du traitement sur les données (controleur)
// Ici, on doit surtout sécuriser l'affichage
foreach($billets as $cle => $billet)
{
    $billets[$cle]['titre'] = htmlspecialchars($billet['titre']);
    $billets[$cle]['contenu'] = nl2br(htmlspecialchars($billet['contenu']));
}

// On affiche la page (vue)
include_once('vue/blog/index.php');

