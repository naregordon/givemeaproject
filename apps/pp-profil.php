<?php
require("models/projet.class.php");

$id=$_SESSION['username'];


function getProjetsEncours($db,$id)
{	
	$tab=array();
	$res = mysqli_query($db, "SELECT * FROM project WHERE statut='en cours' AND username='".$id."' ORDER BY projetdate DESC");
	while ($data = mysqli_fetch_object($res, 'Projet'))
		$tab[] = $data;
	return $tab;
}

$listeProjetEncours=getProjetsEncours($db,$id);

function getProjetsSelection($db,$id)
{
	$tab=array();
	$res = mysqli_query($db, "SELECT * FROM project WHERE statut='selection' AND username='".$id."' ORDER BY projetdate DESC");
	while ($data = mysqli_fetch_object($res, 'Projet'))
		$tab[] = $data;
	return $tab;
}

$listeProjetSelection=getProjetsSelection($db,$id);

function getProjetsTermine($db,$id)
{
	$tab=array();
	$res = mysqli_query($db, "SELECT * FROM project WHERE statut='termine' AND username='".$id."' ORDER BY projetdate DESC");
	while ($data = mysqli_fetch_object($res, 'Projet'))
		$tab[] = $data;
	return $tab;
}

$listeProjetTermine=getProjetsTermine($db,$id);





require("views/pp-profil.phtml");