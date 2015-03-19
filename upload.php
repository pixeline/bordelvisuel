<?php 
print_r($_FILES);

if($_FILES)
{
	if($_FILES['file']['error'] == 0)
	{
		move_uploaded_file($_FILES["file"]["tmp_name"], "./fichiers/".$_FILES["file"]["name"]);
		echo("Fichier envoyé");
		header('Location: index.php')
	}
}
?>
