<?php
require("class.upload.php");

if($_FILES)
{
	$fichier = new Upload($_FILES['file']);

	if($fichier->uploaded)
	{
		$fichier->image_resize = true;
		$fichier->image_x = 10;
		$fichier->image_y = 10;
		$fichier->Process('./fichiers');
		if ($fichier->processed) {
			//header('Location: index.php');

			if($fichier->uploaded)
			{
				$fichier->Process('./fichiers-grand');
				if ($fichier->processed) {
					header('Location: index.php');
				}
				else {
					die('error: '.$fichier->error);
				}
			}
		}
		else {
			die('error: '.$fichier->error);
		}
	}
}
?>
