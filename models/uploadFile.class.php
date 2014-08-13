<?php
class upLoadFile
{
	function upload($tmp_name,$name)
	{
		move_uploaded_file($tmp_name,'sources/images/photo_pp_dev/'.$name);
	}

	function uploadProject($tmp_name,$name)
	{
		move_uploaded_file($tmp_name,'sources/images/photo_project/'.$name);
	}			
}
?>