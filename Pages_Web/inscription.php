<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Page Inscription</title>
</head>


<body>
    <div class="logo">
        <h1><a href="index.php"><span>My</span><span>.</span></a>blog</h1>
    </div>
    <form method = "POST" action="index.php?action=add_user" enctype="multipart/form-data">
        <h1>Créer un compte</h1>
            <p>Inscrivez-vous en remplissant les informations suivantes :</p>
                <div class="message">
                    <?php if (isset($_GET['id']) && $_GET['id'] !== ''):?>
                    <p><?=$_GET['id']?></p>
                    <?php endif;?>
                </div>
           
        <div class="input">
            <input type="text" id="e-mail" name="name" placeholder="Nom">
            <input type="text" id="e-mail" name="FirstName" placeholder="Prenom">
            <input type="e-mail" id="e-mail" name="email" placeholder="E-mail">
            <input type="text" id="user" name="Username" placeholder="Username">
            <input type="password" id="passeword" name="passeword" placeholder="Nouveau mot de passe">
            <input type="password" id="passeword" name="passewordChecked" placeholder="Confirmer le mot de passe">
            <input type="file" id="photo-article" name="image">
            <p>Vous avez déjà un compte ? <a href="connexion.php">Connectez-vous</a></p>
        </div>
        <input type="submit" value="S'inscrire" name = "send"> 

        <p><a href="index.php">Retour à l'accueil</a></p>
    </form>
</body>

</html>
