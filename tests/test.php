<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Ceci est une page HTML de test</title>
    </head>
    <body>
        <h2>Page de test</h2>
        
        <p>
            Cette page contient <strong>uniquement</strong> du code HTML.<br />
            Voici quelques petits tests : <br>

            <!-- debut du code PHP -->
            <?php 
                // affichage d'un message de bienvenu
                echo " <strong> Bonjour ! \"Ici il y'a du code PHP\" </strong>";

                // Ici j'affiche l'heure et la date du jour
                echo " Nous sommes le" ;
                echo date(" d/m/y h:i:s");

                phpinfo();
        
            ?>
        </p>


        <ul>
            <li style="color: blue;">Texte en bleu</li>
            <li style="color: red;">Texte en rouge</li>
            <li style="color: green;">Texte en vert</li>
        </ul>
    </body>
</html>