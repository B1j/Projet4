<!DOCTYPE html>
<html>
    <head>
        <title>Authentification</title>        
        <?php include_once('head.php');?>    
    </head>
    <body>
        <p>Veuillez entrer le mot de passe pour accéder à la page d'administration :</p>
        <!-- <form action="admin.php" method="post"> -->
        <div id="connexionForm">
            <p>
                <input type="password" name="mot_de_passe" id="mot_de_passe" />
                <button id="boutonValider" class="btn btn-secondary btn-sm">Valider</button>
            </p>
        </div>
        <p>Si vous êtes arrivé ici par erreur : <a href="index.php" class="btn btn-secondary btn-sm">Retour à l'acceuil</a></p>

        <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="./vue/scripts/sha1.js"></script>
        <script src="./vue/scripts/log.js" type="text/javascript"></script>
        <?php include_once('liensBootstrap.php');?>
    </body>
</html>
