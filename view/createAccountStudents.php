<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/createAccount.css" media="screen" type="text/css" media="screen" type="text/css">
    <title>Créer un compte</title>
</head>
<body>
<div id="container">
    <div id="left">
        <h1>Bienvenue</h1><br>
        <img src="../assets/images/logo.png" alt="Logo" width=300px><br>
        <h2>"Veuillez remplir ce formulaire pour vous inscrire sur la plateforme Mini-Classroom.</h2>
        <h2>Si vous avez déjà un compte, cliquez sur se connecter.</h2>
        <h2>Merci d'avoir utilisé notre plateforme." </h2>
    </div>
    <div id="formulaire">
        <form action="../controller/CreateAccountStudents.php" method="post">
            <h1>S'inscrire</h1>
            <label for="nom"><h3>Votre nom</h3></label>
            <input type="text" placeholder="Entrer votre nom d'utilisateur" name="firstname" required>

            <label for="nom"><h3>Votre prénoms</h3></label>
            <input type="text" placeholder="Entrer votre nom d'utilisateur" name="lastname" required>

            <label for="Email"><h3>Email</h3></label>
            <input type="text" placeholder="Entrer votre adresse Email" name="email" required>
            

            <label for="Mot de passe"><h3>Mot de passe</h3></label>
            <input type="password" placeholder="Entrer votre nouveau mot de passe" name="password" required>

            
            <label for="sexe"><h3>Sexe</h3></label>
            <input type="radio" name="sex" value="masculin" id="masculin">Masculin <br>
            <input type="radio" name="sex" value="feminin" id="feminin">Féminin
            <br><br>
            
            <input type="submit" id='submit' value="SOUMETTRE L'INSCRIPTION" >
            <h4><a href="MdpoEtudiant.php"> Mot de passe oublié ? </a></h4>
            <h4 id="aide"><a href="AideNC.php"> Aide(?) </a></h4>
            <h1 id="login"><a href="../accueilStudents.php"> Se<b>_</b>connecter</a></h1>
        </form>
    </div>
    
</div>
</html>