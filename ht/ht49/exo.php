<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HT - 49</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body id="top">
    <h1>HT - 49</h1>
    <form action="verif.php" method="POST">
        <label for="sexe">Sexe : </label>
        <select name="sexe" id="sexe">
            <option value="h" selected="selected">Homme</option>
            <option value="f">Femme</option>
        </select>
        <br>
        <label for="nom">Nom : </label>
        <input type="text" name="nom" id="nom" value="Du pont">
        <br>
        <label for="prenom">Prénom : </label>
        <input type="text" name="prenom" id="prenom" value="Jack">
        <br>
        <label for="urgent">Urgent ?</label>
        <input type="checkbox" name="urgent" id="urgent" value="oui" checked>
        <br>
        <label for="message">Message : </label><br>
        <textarea name="message" id="message" cols="30" rows="10">Votre message</textarea>
        <br>
        <input type="submit" value="Envoyer" name="submit">&nbsp;<input type="reset" value="Réinitisaliser">
    </form>
    <p>Aller au <a href="#top">Top</a></p>
    <p><a href="/git/test1/index.php">Home</a></p>
</body>
</html>