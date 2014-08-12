<?php
require("models/projet.class.php");

function getProjetsEncours($db)
{
	$tab=array();
	$res = mysqli_query($db, "SELECT * FROM project WHERE statut='en cours' ORDER BY projetdate DESC");
	while ($data = mysqli_fetch_object($res, 'Projet'))
		$tab[] = $data;
	return $tab;
}

$listeProjetEncours=getProjetsEncours($db);

function getProjetsSelection($db)
{
	$tab=array();
	$res = mysqli_query($db, "SELECT * FROM project WHERE statut='selection' ORDER BY projetdate DESC");
	while ($data = mysqli_fetch_object($res, 'Projet'))
		$tab[] = $data;
	return $tab;
}

$listeProjetSelection=getProjetsSelection($db);

function getProjetsTermine($db)
{
	$tab=array();
	$res = mysqli_query($db, "SELECT * FROM project WHERE statut='termine' ORDER BY projetdate DESC");
	while ($data = mysqli_fetch_object($res, 'Projet'))
		$tab[] = $data;
	return $tab;
}

$listeProjetTermine=getProjetsTermine($db);





require("views/pp-profil.phtml");