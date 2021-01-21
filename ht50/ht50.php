<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ht2</title>
    <link rel="stylesheet" href="css/mainht50.css">
</head>
<body id="top">
    <h1>ht50 : form</h1>

    <form action="verif.php" method="POST">
        <label for="nom">Nom :</label><br>
        <input type="text" name="nom" id="nom">
        <br>
        <label for="prenom">Prénom :</label><br>
        <input type="text" name="prenom" id="prenom">
        <p>J'aime :</p>
        <label for="biere">La bière</label>
        <input type="checkbox" name="biere" id="biere">
        <br>
        <label for="aligot">L'aligot</label>
        <input type="checkbox" name="aligot" id="aligot" selected>
        <br>
        <label for="chou">La choucroute</label>
        <input type="checkbox" name="chou" id="chou">
        <br>
        <p>Je suis un/une :</p>
        <label for="garcon">Garçon</label>
        <input type="radio" name="g" id="garcon" value="g">
        <label for="fille">Fille</label>
        <input type="radio" name="g" id="fille" value="f">        
        <br>
        <button>Envoyer</button>&nbsp;<button>Réinitialiser</button>
    </form>
    
    <p>Aller au <a href="#top">Top</a></p>
    <p><a href="/git/test1/index.php">Home</a></p>
</body>
</html>