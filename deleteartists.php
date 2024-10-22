<?php require_once 'core/models.php'; ?>
<?php require_once 'core/dbConfig.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tattoo Artist Management System</title>
	<link rel="stylesheet" href="styles.css">  
</head>
<body>
	<h1>Are you sure you want to delete this tattoo artist?</h1>
	<?php 
		$getTattooArtistByID = getTattooArtistByID($pdo, $_GET['artist_id']); 

		if ($getTattooArtistByID) {
	?>
	<div class="container" style="border-style: solid; height: 400px;">
		<h2>First Name: <?php echo htmlspecialchars($getTattooArtistByID['first_name']); ?></h2>
		<h2>Last Name: <?php echo htmlspecialchars($getTattooArtistByID['last_name']); ?></h2>
		<h2>Specialization: <?php echo htmlspecialchars($getTattooArtistByID['specialization']); ?></h2>
		<h2>Rating: <?php echo htmlspecialchars($getTattooArtistByID['rating']); ?></h2>

		<div class="deleteBtn" style="float: right; margin-right: 10px;">
			<form action="core/handleForms.php?artist_id=<?php echo urlencode($_GET['artist_id']); ?>" method="POST">
				<input type="submit" name="deleteTattooArtistBtn" value="Delete">
			</form>			
		</div>	
	</div>
	<?php 
		} else {
			echo "<p>Artist not found.</p>";
		}
	?>
</body>
</html>
