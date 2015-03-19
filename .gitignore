<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Bordel visuel - Morgane Desmidts - 3TI D2</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="styles/styles.css">
</head>
<body>

<h1>Un bordel visuel, construis le tien</h1>
	<h2>Upload tes fichiers</h2>
	<form method="post" action="upload.two.php" enctype="multipart/form-data">
		<label for="username">Username *:</label>
		<input type="text" name="username" id="username" required="required"/>
		<input type="file" name="file" required="required"/>
		<input type="submit" />
	</form>

<?php 
$dossier = "fichiers";
$files = scandir('./'.$dossier);
?>

<ol>
	<?php 
	foreach ($files as $element) {
		if($element !='.' && $element !=".." && $element != '.DS_Store') # code...
		{
			echo '<li><a href="fichiers-grand/'.$element.'" target="_blank"><img src="fichiers/'.$element.'"/></a></li>';
		}
	}
    ?>
</ol>

</body>
</html>

