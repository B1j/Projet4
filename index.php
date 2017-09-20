<?php

include_once('modele/connexion_sql.php');

if (!isset($_GET['section']) OR $_GET['section'] == 'index')
{
    include_once('controleur/blog/index.php');
}

if (isset($_GET['section']) && $_GET['section'] == 'commentaires')
{
    include_once('controleur/blog/commentaires.php');
}

if (isset($_GET['section']) && $_GET['section'] == 'log')
{
    include_once('controleur/blog/log.php');
}

if (isset($_GET['section']) && $_GET['section'] == 'admin')
{
    include_once('controleur/blog/admin.php');
}