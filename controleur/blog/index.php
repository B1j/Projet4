<?php

//on inclu la class et on créé l'objet billet nécéssaire au calcul
include_once('modele/blog/billet.php');
$billet = new Billet();
$nbPage = $billet->getPageNb();

// On calcul la page voulu
if(array_key_exists("page", $_GET) && isset($_GET['page']) && ctype_digit($_GET['page']))
{
    $page = ($_GET['page'] * 5) - 5;
    $ixPage = $_GET['page'];

    // Si on a dépassé la limite max => limite max
    if($_GET['page'] > $nbPage) 
    {
        $page = ($nbPage*5) -5;
        $ixPage = $nbPage;
    }
    // Si on a dépassé la limite min => limite min
    if($_GET['page'] < 1)
    {
        $page = 0;
        $ixPage = 1;
    }
}    
else
{
    $page = 0;
    $ixPage = 1;
}


//on demande les billets
$billets = $billet->getByPage($page, 5);


// On effectue du traitement sur les données, on doit surtout sécuriser l'affichage
foreach($billets as $cle => $billet)
{
    $billets[$cle]['titre'] = htmlspecialchars($billet['titre']);
    $billets[$cle]['contenu'] = nl2br(htmlspecialchars($billet['contenu']));
}

// On affiche la page (vue)
include_once('vue/blog/index.php');

