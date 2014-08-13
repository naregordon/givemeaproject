<?php

if(isset($_POST['projetpost'], $_POST['projetnom'], $_POST['projetdescription'], $_POST['profilrecherche'], $_POST['projetwords'])) {
	require ('models/uploadFile.class.php');
		$upload = new upLoadFile();

		$tmp_name=$_FILES['photo_project']['tmp_name'];
		$name=$_FILES['photo_project']['name'];
		$upload->uploadProject($tmp_name,$name);
		
	$projetnom = $_POST['projetnom'];
	$projetdescription = $_POST['projetdescription'];
	$projetwords = $_POST['projetwords'];
	$profilrecherche = $_POST['profilrecherche'];
	$tempstravail = $_POST['tempstravail'];
	$username = $_SESSION['username'];


	mysqli_query($db, "INSERT INTO `givemeaproject`.`project` (`projetnom`, `projetdescription`, `projetwords`, `profilrecherche`, `projetdate`, `tempstravail`, `username` , `statut`, `photo`) VALUES ('".$projetnom."', '".$projetdescription."','".$projetwords."','".$profilrecherche."',NOW(),'".$tempstravail."','".$username."','selection','".$name."')");

	require("apps/pp-profil.php");
}
else
	require("views/pp-post.phtml");