<?php
require_once $_SERVER['DOCUMENT_ROOT']."/1/include/autoload.php";
/**
 * Created by PhpStorm.
 * User: Gun
 * Date: 26/09/2017
 * Time: 12:12
 */
//var_dump($_POST);

$email=isset($_POST['mail'])?$_POST['mail']:null;
$mdp=isset($_POST['mdp'])?$_POST['mdp']:null;
$confirm_mdp=isset($_POST['confirm_mdp'])?$_POST['confirm_mdp']:null;
$name=isset($_POST['name'])?$_POST['name']:null;
$pname=isset($_POST['pname'])?$_POST['pname']:null;
$dtb=isset($_POST['dtb'])?$_POST['dtb']:null;
$adress=isset($_POST['adress'])?$_POST['adress']:null;
$cp=isset($_POST['cp'])?$_POST['cp']:null;
$city=isset($_POST['city'])?$_POST['city']:null;
$country=isset($_POST['country'])?$_POST['country']:null;

$cust_rManager = new Manager\UtilisateurManager();
//test sur les champs
$errorMsg = array();

if(!isset($email) || $email==''){
$errorMsg[] ='Probleme d\'email';
}

if ($cust_rManager->emailExiste($email)){
    $errorMsg[]="Cet email existe déjà";
}

if (!isset($mdp) || $mdp==''){
    $errorMsg[] = "Saisir votre mot de passe";
}

if(!isset($confirm_mdp) || $confirm_mdp=="") {
    $errorMsg[] = "Saisir votre confirmation de mot de passe";
}

if (!isset($name) || $name==''){
    $errorMsg[] ="Saisir nom";
}

if (!isset($pname) || $pname==''){
    $errorMsg[] ="Saisir nom";
}

if (!isset($dtb) || $dtb==''){
    $errorMsg[] ="Date anniversaire";
}

if (!isset($adress) || $adress==''){
    $errorMsg[] ="Saisir adresse";
}

if (!isset($cp) || $cp==''){
    $errorMsg[] ="Saisir code postal";
}

if (!isset($city) || $city==''){
    $errorMsg[] ="Saisir ville";
}

if (!isset($country) || $country==''){
    $errorMsg[] ="Saisir pays";
}

//verif mdp et confirm_mdp
if($mdp!=$confirm_mdp){
    $errorMsg[] = "Le mot de passe et sa confirmation sont différents";
}

//si il y a des erreurs redirection
if (count($errorMsg)>0){
    $msg = implode("<br />", $errorMsg);
    $sessionManager = new Manager\SessionManager();
    $sessionManager->errorMessage = $msg;
    header("location: index.php");
    die();
}

//traitement
$cust_r =new Entity\Cust_r();
$cust_r->SetMail($email);
$cust_r->Setmdp($mdp);
$cust_r->SetName($name);
$cust_r->SetPname($pname);
$cust_r->SetDtb($dtb);
$cust_r->SetAdress($adress);
$cust_r->SetCp($cp);
$cust_r->SetCity($city);
$cust_r->SetCountry($country);

$cust_rManager->insert($cust_r);

echo "id_utilisateur: " .$utilisateur->getId_utilisateur();