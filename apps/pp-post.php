<?php

if(isset($_POST['postprojet'])) {
	$projetnom = $_POST['projetnom'];
	$projetdescription = $_POST['projetdescription'];
	$projetwords = $_POST['projetwords'];
	$profilrecherche = $_POST['profilrecherche'];
	$tempstravail = $_POST['tempstravail'];
	$username = $_SESSION['username'];

	echo 'titi';

	mysqli_query($db, "INSERT INTO `givemeaproject`.`project` (`projetnom`, `projetdescription`, `projetwords`, `profilrecherche`, `projetdate`, `tempstravail`, `username`) VALUES ('".$projetnom."', '".$projetdescription."','".$projetwords."','".$profilrecherche."',NOW(),'".$tempstravail."','".$username."')");

	require("apps/pp-profil.php");
}
else
	require("views/pp-post.phtml");