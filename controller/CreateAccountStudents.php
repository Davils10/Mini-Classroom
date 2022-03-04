<?php
include_once('../model/models.php');
include_once('controllers.php');

$verification = new CreateAccountStudents(5);
$informations = new GetInfoCreateAccountStudents(5);

if(!empty($_POST['firstname']) AND !empty($_POST['lastname']) AND !empty($_POST['email']) AND !empty($_POST['password']) AND !empty($_POST['sex']))
{
    $informations -> setinfo($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['sex'],  $_POST['password'],);
    $donnees = $informations -> getInfo();
    $verification -> remplir_formulaire($donnees);
    
        header('Location:../view/accueilStudents.php');
    
}
else 
{
    header('Location:../view/errors/errorLogin.php');
}

