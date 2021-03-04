<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M2l</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body id="top">
    <div class="nav">
        <img src="../img/home.jpg" width=100% alt="ta capté">
        <ul>
            <li><a class="tjaune left" href="../index.php">Accueil</a></li>
            <li><a class="right" href="bureaux.php">Correspondance des bureaux</a></li>
            <li><a class="right" href="financement.php">Financement</a></li>
            <li><a class="right" href="missions.php">Missions</a></li>
            <li><a class="right" href="services.php">Services proposés</a></li>
        </ul>
    </div>
    <div class="marge">
        <h1>Contact</h1>
            <div class="contact">
                <form action="#" method="post">
                    <table class="tabarticles">
                        <tr>
                            <td><label for="nom">Votre  Nom : </label></td>
                            <td><input class="left" type="text" name="nom" id="nom"></td>
                        </tr>
                        <tr>
                            <td><label for="prenom">Votre  Prénom : </label></td>
                            <td><input class="left" type="text" name="prenom" id="prenom"></td>
                        </tr>
                        <tr>
                            <td><label for="email">Votre  Email : </label></td>
                            <td><input class="left" type="email" name="email" id="email"></td>
                        </tr>
                        <tr>
                            <td><label for="objet">Votre  Objet : </label></td>
                            <td><input class="left" type="text" name="objet" id="objet"></td>
                        </tr>
                        <tr>
                            <td><label for="message">Message : </label></td>
                            <td><textarea name="message" id="message" cols="80" rows="30"></textarea></td>
                        </tr>
                    </table>
                    <br>
                    <input type="submit" value="Envoyer">
                </form>
            </div>
            <p><h5>Coordonnées du directeur de la ligue</h5> M. Lucien Sapin,<br>lucien.sapin@gmail.com<br>Tél:0615614135</p>
        </div>
    <div class="footer">
        <ul>
            <li><a class="active right" href="contact.php">Contact</a></li>
            <li><a class="left" href="#top">Top</a></li>
        </ul>
    </div>
    
</body>
</html>