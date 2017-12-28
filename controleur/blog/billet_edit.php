<?php
include_once('../../modele/connexion_sql.php');

session_start();

if (isset($_SESSION['encodedPassword'])) 
{
    $est_connecte = true;
}
else 
{
    $est_connecte = false;
}
if ($est_connecte) 
{
    include_once('../../modele/blog/billet.php');
    $editBillet = new Billet();

    // récupération des variables nécéssaire a l'édition'
    $id = $_POST['modifierBillet'];

    $editBillet->getById($id);

    include_once("../../vue/blog/billet_edit.php");
}
?>