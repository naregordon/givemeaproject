<?php
require("models/projet.class.php");

// function getProjetsSelectiondev($db)
// {
// 	$tab=array();
// 	$res = mysqli_query($db, "SELECT * FROM project WHERE statut='selection' ORDER BY projetdate DESC");
// 	while ($data = mysqli_fetch_object($res,'Projet'))
// 		$tab[] = $data;
// 	return $tab;
// }

// $listeProjetSelectiondev=getProjetsSelectiondev($db);

if (isset($_POST['idp'])){
	$idp=$_POST['idp'];
	$tab=array();
	$res = mysqli_query($db, "SELECT * FROM project WHERE id='".$idp."'");
	$data = mysqli_fetch_object($res, 'Projet');
}
require("views/dev-fiche-projet.phtml");