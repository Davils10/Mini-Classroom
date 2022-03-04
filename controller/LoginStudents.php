<?php
include_once('../model/models.php');
include_once('controllers.php');

if(!empty($_POST['email']) AND !empty($_POST['password']))
{
    $verification = new LoginStudents(3); 
    $informations = new GetInfoLoginStudents(3);
    $informations -> setinfo($_POST['email'], $_POST['password']);
    $donnees = $informations -> getinfo();
    {
        header('Location:../view/accueilStudents.php');
    }
}
else
{
    header('Location:../view/errors/errorLogin.php');
}
