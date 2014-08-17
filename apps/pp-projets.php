<?php
require("models/projet.class.php");

if (isset($_POST['idp'], $_POST['voirFicheProjet'])){
	$idp=$_POST['idp'];
	$tab=array();
	$res = mysqli_query($db, "SELECT * FROM project WHERE id='".$idp."'");
	$data = mysqli_fetch_object($res, 'Projet');
	require("views/pp-fiche-projet.phtml");
}

function affichagePostulants($db,$id) {
	$res = mysqli_query($db, "SELECT * FROM user LEFT JOIN candidats ON user.username = candidats.username_candidat WHERE candidats.id_projet='".$id."'");
	$tab = array();
	while($data = mysqli_fetch_assoc($res)) {
		$tab[] = $data;
	}
	return $tab;
}

if(isset($_POST['idp'], $_POST['postulants'])) {
	$id=$_POST['idp'];
	$listePostulants = affichagePostulants($db,$id);
	require("views/pp-postulants.phtml");
}