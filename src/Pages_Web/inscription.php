<?php 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Page Inscription</title>
</head>


<body>
    <div class="logo">
        <h1><a href="index.php"><span>My</span><span>.</span></a>blog</h1>
    </div>
    <form>
        <h1>Créer un compte</h1>
            <p>Inscrivez-vous en remplissant les informations suivantes :</p>
        <div class="input">
            <input type="text" id="e-mail" name="name" placeholder="Nom">
            <input type="text" id="e-mail" name="First-Name" placeholder="Prenom">
            <input type="text" id="e-mail" name="e-mail" placeholder="E-mail">
            <input type="text" id="user" name="Username" placeholder="Username">
            <input type="text" id="passeword" name="passeword" placeholder="Nouveau mot de passe">
            <input type="text" id="passeword" name="passeword" placeholder="Confirmer le mot de passe">
            <label>
                <input type="date" name="brtday">
            </label>
            <input type="file" id="photo-article" name="photo-article" accept="image/png, image/jpeg">
            <p>Vous avez déjà un compte ? <a href="connexion.php">Connectez-vous</a></p>
             </div>

        <input type="submit" value="S'inscrire"> 
        <p><a href="index.php">Retour à l'accueil</a></p>
    </form>
</body>

</html>
