<?php

$res2 = mysqli_query($db, "SELECT * FROM user WHERE username = '".$_SESSION['username']."'");
$content = mysqli_fetch_assoc($res2);

if(isset($_POST['submitModifProfil'])) {
	$username = $_POST['modifUsername'];
	$email = $_POST['modifEmail'];
	$nom = $_POST['modifNom'];
	$prenom = $_POST['modifPrenom'];
	$presentation = $_POST['modifPresentation'];
	$paypal = $_POST['modifPaypal'];
	$competences = $_POST['modifCompetences'];
	require ('models/uploadFile.class.php');
			$upload = new upLoadFile();
			$tmp_name=$_FILES['photo_pp_dev']['tmp_name'];
			$name=$_FILES['photo_pp_dev']['name'];
			$upload->upload($tmp_name,$name);

	mysqli_query($db, "UPDATE user SET username = '".$username."', email = '".$email."', photo = '".$name."', nom ='".$nom."', prenom = '".$prenom."', presentation = '".$presentation."', paypal = '".$paypal."', competences = '".$competences."' WHERE username = '".$_SESSION['username']."'");
}

if(isset($_POST['submitModifPassword'], $_POST['modifXPassword'], $_POST['modifPassword'], $_POST['modifConfPassword'])) {
	$xpassword = $_POST['modifXPassword'];
	$newpassword =  $_POST['modifPassword'];
	$confnewpass = $_POST['modifConfPassword'];

	$res = mysqli_query($db, "SELECT password FROM user WHERE username = '".$_SESSION['username']."'");
	$data = mysqli_fetch_assoc($res);
	if($xpassword === $data['password']) {
		if($newpassword === $confnewpass) {
			mysqli_query($db, "UPDATE user SET password = '".$newpassword."' WHERE username = '".$_SESSION['username']."'");
		}
		else {
			echo "Vous n'avez pas correctement confirmé votre mot de passe";
		}
	}
	else {
		echo "Votre mot de passe actuel n'est pas correcte";
	}
}

if(isset($_POST['supprimerCompte'])) {
	mysqli_query($db, "DELETE FROM user WHERE username = '".$_SESSION['username']."'");
	$_SESSION=array();
	session_destroy();
	require("apps/home.php");
}
require("views/dev-modifprofil.phtml");