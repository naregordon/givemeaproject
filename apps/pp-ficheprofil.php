<?php

require('models/user.class.php');

function affichageProfil($db) {
	$res = mysqli_query($db, "SELECT * FROM user WHERE username = '".$_SESSION['username']."'");
	$data = mysqli_fetch_object($res, 'User');
	return $data;
}

$currentProfile = affichageProfil($db);


require("views/pp-ficheprofil.phtml");