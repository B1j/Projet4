<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Billet simple pour l'Alaska</title>
    <link href="vue/blog/style.css" rel="stylesheet" /> 
    </head>
        

    <body>
        <h1>Billet simple pour l'Alaska</h1>
        <p><a href="index.php">Retour à la liste des billets</a></p>
 
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

        <!-- formulaire d'ajout de commentaire -->
        <form action="controleur/blog/commentaire_post.php" method="post">
            <p>

                <label for="auteur">Pseudo</label> : <input type="text" name="auteur" id="auteur" /><br />
                <label for="commentaire">Message</label> :  <input type="text" name="commentaire" id="commentaire" /><br />
                <input type="hidden" name="id_billet" value=<?php echo "$id_billet";?> />
                <input type="submit" value="Envoyer" />

            </p>
        </form>
    </body>
</html>