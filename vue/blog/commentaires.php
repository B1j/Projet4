<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Billet simple pour l'Alaska</title>
    <link href="vue/blog/style.css" rel="stylesheet" /> 
    </head>
        

    <body>
        <h1>Mon super blog !</h1>
        <p><a href="blog.php">Retour à la liste des billets</a></p>
 
        <!-- affichage du billet -->
        <div class="news">
            <h3>
                <?php echo htmlspecialchars($billet->getTitre()); ?>
                <em>le <?php echo $billet->getDate_creation_fr(); ?></em>
            </h3>
            

            <p>
            <?php
            echo nl2br(htmlspecialchars($billet->getContenu()));
            ?>
            </p>
        </div>

        <h2>Commentaires</h2>

        <?php
        
        // Récupération des commentaires
        foreach ($commentaires as $commentaire)
        {
        ?>
        <p><strong><?php echo htmlspecialchars($commentaire['auteur']); ?></strong> le <?php echo $commentaire['date_commentaire_fr']; ?></p>
        <p><?php echo nl2br(htmlspecialchars($commentaire['commentaire'])); ?></p>
        <?php
        } // Fin de la boucle des commentaires
        ?>
    </body>
</html>