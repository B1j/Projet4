<!DOCTYPE html>
<html>
    <head>
        <title>Billet simple pour l'Alaska</title>
        <?php include_once('head.php');?>
    </head>
        
    <body>
        <h1>Billet simple pour l'Alaska</h1>

        <!-- Boutons pagination-->    
        

        <?php if ($ixPage != 1) { ?>
            <a href="index.php?section=index&page=<?php echo ($ixPage - 1); ?>" class="btn btn-secondary btn-sm">Précédent</a>
        <?php } ?>

        <?php if ($ixPage != $nbPage) { ?>
            <a href="index.php?section=index&page=<?php echo ($ixPage + 1); ?>" class="btn btn-secondary btn-sm">Suivant</a>
        <?php } ?>
        <br />
        <?php if ($ixPage == $nbPage) { ?>
            <a href="index.php?section=index&page=<?php echo (1); ?>" class="btn btn-secondary btn-sm">Permière page</a>
        <?php } ?>
        <?php if ($ixPage == 1) { ?>
            <a href="index.php?section=index&page=<?php echo ($nbPage); ?>" class="btn btn-secondary btn-sm">Dernière page</a>
        <?php } ?>
        
        <!-- chargement des billets -->
        <?php
        foreach($billets as $billet)
        {
        ?>
        <div class="news">
            <h3>
                <?php echo $billet->getTitre(); ?>
            </h3>
            
            
                <div><?php echo $billet->getContenu(); ?></div>
            <p>
                <em class="datePublication">Publié le <?php echo $billet->getDate_creation_fr(); ?></em>
                <br />
                <em><a href="index.php?section=commentaires&billet=<?php echo $billet->getId(); ?>" class="btn btn-secondary btn-sm">Commentaires</a></em>
            <p>
        </div>
        <?php
        }
        ?>
        <p><a href="index.php?section=log" class="btn btn-secondary btn-sm" id="administration">Administration</a></p>

        <?php include_once('liensBootstrap.php');?>
    </body>
</html>
