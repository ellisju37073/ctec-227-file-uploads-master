<?php require "inc/functions.inc.php" ?>
<!DOCTYPE html>
<html lang="en">
<!-- CTEC 127 / Bruce Elgort / February 2015 -->
<head>
	<meta charset="UTF-8">
	<title>File Uploads Part 4</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<h1>File Upload Demo - Part 4</h1>
	<h2>Moving the File to a New Folder</h2>
	<h3>Create an "uploads" folder in the folder you are working with this code in</h3>

	<?php 
	//check to see if file was uploaded
	$message = processSubmittedFile();
	//checks the error message for the file uploads
	displayErrorMessage($message);
	// Delete the file if the URL contains ?file=
	deleteImage();

	require "inc/form.inc.html";


	?>
	<div class="container">
	<?php 
	showImages('uploads');
	showImages('vacation');
	showImages('pets');
	?>
	
	</div>


</body>
</html>