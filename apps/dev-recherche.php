<?php

require("models/projet.class.php");

if(isset($_POST['searchProject'], $_POST['searchSubmit'])) {
	$tab=array();
	$res = mysqli_query($db, "SELECT * FROM project WHERE statut='selection' ORDER BY projetdate DESC");
	while ($data = mysqli_fetch_object($res, 'Projet'))
		$tab[] = $data;
	return $tab;
}

require("views/dev-recherche.phtml");
?>