<?php
$mess='';
if (isset($_POST['selectSubmit'],$_POST['id'])) 
{
	if (isset($_POST['selectPostulant'])) 
	{
		$idpostulant=$_POST['selectPostulant'];
		$id=$_POST['id'];
		$res =mysqli_query($db,"UPDATE project SET selection='".$idpostulant."', statut='en cours' WHERE id=".$id."");
		$mess='Vous avez selectionné <strong>'.$idpostulant.' </strong> pour votre projet';
		require("views/confirmation.phtml");
	}
}
else{
require("views/pp-postulants.phtml");
}