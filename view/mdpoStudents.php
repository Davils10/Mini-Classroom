<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/login.css" media="screen" type="text/css">
    <title>Formulaire login</title>
</head>
<body>
    <div class="left">
        <br><br>
        <img src="../assets/images/logo.png" alt="Logo" width="400px">
        
    </div>
    <div id="container">
        <form action="ModifierMdp.php" method="post">
            <h1>Mot de passe oublié ?</h1>
            <label for="nom"><h3>Email</h3></label>
            <input type="Email" placeholder="Entrer votre nom d'utilisateur" name="nom" required>

            <label for="Mot de passe"><h3>Nouveau mot de passe</h3></label>
            <input type="password" placeholder="Entrer le nouveau mot de passe" name="Mot de passe" required>

            <label for="Mot de passe"><h3>Confirmez le nouveau mot de passe</h3></label>
            <input type="password" placeholder="Confirmer le nouveau mot de passe" name="Mot de passe" required>

            <input type="submit" id='submit' value='VALIDER' >
            
            <h4 id="signup"><a href="createAccountStudents.php"> Créer<b>_</b>un<b>_</b>compte </a></h4>
            <h4 id="aide"><a href="help.php"> Aide(?) </a></h4>

        </form>
    </div>
</body>
</html>