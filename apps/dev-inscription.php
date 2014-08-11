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
	}
	elseif($data['email'] === $email) {
		$msgInscription = "Cette adresse email a déjà été enregistré. Vérifiez bien si vous n'avez pas déjà un compte sur Give Me a Project.";
	}
	elseif(strlen($username) < 5) {
		$msgInscription = "Votre nom d'utilisateur doit faire au moins 5 caractères.";
	}
	elseif($password !== $confpass) {
		$msgInscription = "La confirmation du mot de passe ne correspond pas";
	}
	elseif(strlen($password) < 5){
		$msgInscription = "Votre mot de passe doit faire plus de 4 caractères.";
	}
	else{
		mysqli_query($db, "INSERT INTO user (username, password, email, type) VALUES ('".$username."','".$password."','".$email."', 'dev')");
		echo "Votre compte a été crée";
		require("apps/home.php");
	}
}
else
	require("views/dev-inscription.phtml");