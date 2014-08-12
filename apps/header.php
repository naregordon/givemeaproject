<?php

if(isset($_POST['logmail'], $_POST['logpass'], $_POST['logsubmit'])) {
	$email = $_POST['logmail'];
	$password = $_POST['logpass'];
	$res = mysqli_query($db, "SELECT * FROM user WHERE email = '".$email."'");
	$data = mysqli_fetch_assoc($res);
	if($data['email'] !== $email) {
		$msgLogin = "Ce compte n'existe pas.";
	}
	elseif($data['email'] === $email && $data['password'] !== $password) {
		$msgLogin = "Votre mot de passe n'est pas correcte.";
	}
	elseif($data['email'] === $email && $data['password'] === $password && $data['type'] === 'dev') {
		$_SESSION['username'] = $data['username'];
		$page="dev-profil";
	}
	elseif($data['email'] === $email && $data['password'] === $password && $data['type'] === 'pp') {
		$_SESSION['username'] = $data['username'];
		$photo_user = '';
		$res = mysqli_query($db,"SELECT photo FROM user WHERE username = '".$_SESSION['username']."'");
		$photo_user = mysqli_fetch_assoc($res);
		$page="pp-profil";
	}
}
require_once("views/header.phtml");