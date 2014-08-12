<?php
class upLoadFileProject
{
	function uploadProject($tmp_name,$name)
	{
		move_uploaded_file($tmp_name,'sources/images/photo_project/'.$name);
	}		
}
?>