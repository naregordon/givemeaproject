<?php
require("models/projet.class.php");

if (isset($_POST['idp'], $_POST['voirFicheProjet'])){
	$idp=$_POST['idp'];
	$tab=array();
	$res = mysqli_query($db, "SELECT * FROM project WHERE id='".$idp."'");
	$data = mysqli_fetch_object($res, 'Projet');
	require("views/pp-fiche-projet.phtml");
}