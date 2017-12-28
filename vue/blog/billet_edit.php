<!DOCTYPE html>
<html>
    <head>
        <title>Administration du blog</title> 
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">         
        <link href="../../vue/blog/style.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <?php
        if ($est_connecte) // Si le mot de passe est bon
        {
        // On affiche la page
            ?>
            <form action="../../controleur/blog/billet_edit_post.php" method="post">
                <p>
                    <label for="titre">Titre</label> : <input type="text" name="titre" id="titre" value="<?php echo $editBillet->getTitre();?>"/><br />
                    <label for="contenu">Contenu</label> : <textarea name="contenu" id="contenu"><?php echo $editBillet->getContenu();?></textarea><br />            
                    <input type="hidden" name="id" value="<?php echo $editBillet->getId();?>" />
                    <input type="submit" value="Sauvegarder les modifications" class="btn btn-secondary btn-sm"/>
                </p>
            </form>            

            <form action="../../controleur/blog/billet_delet.php" method="post" onsubmit="return confirmation();">
                <p>   
                    <input type="hidden" name="id" value="<?php echo $editBillet->getId();?>" />       
                    <input type="submit" name="boutonEffacer" value="Supprimer le billet" class="btn btn-secondary btn-sm">
                </p>
            </form>   

            <a href="../../index.php?section=admin" class="btn btn-secondary btn-sm" id="lienAdmin">Retour à la page d'administration sans sauvegarder</a>

            <?php
        }
        else // Message d'erreur si le mot de passe est incorrect
        {
            echo '<p>Vous n\'êtes pas connecté</p>';
        }
        ?>  

    <script type="text/javascript" src='https://cloud.tinymce.com/stable/tinymce.min.js'></script>
    <script type="text/javascript" src="../../vue/scripts/tinyMCE.js"></script>  
    <script type="text/javascript" src="../../vue/scripts/confirmation.js"></script>  

    <?php include_once('liensBootstrap.php');?>

    </body>
</html>