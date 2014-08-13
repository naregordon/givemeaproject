<?php

$res2 = mysqli_query($db, "SELECT * FROM user WHERE username = '".$_SESSION['username']."'");
$content = mysqli_fetch_assoc($res2);

if(isset($_POST['submitModifProfil'])) {
	$username = $_POST['modifUsername'];
	$email = $_POST['modifEmail'];
	$nom = $_POST['modifNom'];
	$prenom = $_POST['modifPrenom'];
	$presentation = $_POST['modifPresentation'];

	mysqli_query($db, "UPDATE user SET username = '".$username."', email = '".$email."', nom ='".$nom."', prenom = '".$prenom."', presentation = '".$presentation."' WHERE username = '".$_SESSION['username']."'");
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
}

require("views/pp-modifprofil.phtml");