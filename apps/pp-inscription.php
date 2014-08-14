<?php

$msgInscription = '';

if(isset($_POST['username'],$_POST['email'], $_POST['password'], $_POST['confpass'], $_POST['create'])){
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$confpass = mysqli_real_escape_string($db, $_POST['confpass']);
	$res = mysqli_query($db, "SELECT * FROM user WHERE username = '".$username."'");
	$res2 = mysqli_query($db, "SELECT * FROM user WHERE email = '".$email."'");
	$data = mysqli_fetch_assoc($res);
	$data2 = mysqli_fetch_assoc($res2);
	if($data['username'] === $username) {
		$msgInscription = "Votre nom d'utilisateur est déjà pris. Choisissez en un autre.";
		require('views/pp-inscription.phtml');
	}
	elseif($data['email'] === $email) {
		$msgInscription = "Cette adresse email a déjà été enregistré. Vérifiez bien si vous n'avez pas déjà un compte sur Give Me a Project.";
		require('views/pp-inscription.phtml');
	}
	elseif(strlen($username) < 5) {
		$msgInscription = "Votre nom d'utilisateur doit faire au moins 5 caractères.";
		require('views/pp-inscription.phtml');
	}
	elseif($password !== $confpass) {
		$msgInscription = "La confirmation du mot de passe ne correspond pas";
		require('views/pp-inscription.phtml');
	}
	elseif(strlen($password) < 5){
		$msgInscription = "Votre mot de passe doit faire plus de 4 caractères.";
		require('views/pp-inscription.phtml');
	}
	else{
		/*if(isset($_FILES['photo_pp_dev'])) {
		require ('models/uploadFile.class.php');
			$upload = new upLoadFile();
			$tmp_name=$_FILES['photo_pp_dev']['tmp_name'];
			$name=$_FILES['photo_pp_dev']['name'];
			$upload->upload($tmp_name,$name);
		}
		else {*/
			$name = 'user.png';	
		/*}*/
		mysqli_query($db, "INSERT INTO user (username, password, email, type, photo) VALUES ('".$username."','".$password."','".$email."', 'pp','".$name."')");
		echo "Votre compte a bien été crée";
		require("apps/home.php");
	}
}
else
 	require('views/pp-inscription.phtml');
