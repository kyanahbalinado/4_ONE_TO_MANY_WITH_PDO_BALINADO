<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tattoo Project Management</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<?php 
		$getProjectByID = getProjectByID($pdo, $_GET['tattoo_id']); 
	?>
	<h1>Are you sure you want to delete this tattoo project?</h1>
	<div class="container" style="border-style: solid; height: 400px;">
		<h2>Tattoo Name: <?php echo $getProjectByID['tattoo_name'] ?></h2>
		<h2>Tattoo Style: <?php echo $getProjectByID['tattoo_style'] ?></h2>
		<h2>Date done: <?php echo $getProjectByID['date_done'] ?></h2>
		<h2>cost: <?php echo $getProjectByID['cost'] ?></h2>

		<div class="deleteBtn" style="float: right; margin-right: 10px;">
			<form action="core/handleForms.php?tattoo_id=<?php echo $_GET['tattoo_id']; ?>&artist_id=<?php echo $_GET['artist_id']; ?>" method="POST">
				<input type="submit" name="deleteTattooProjectBtn" value="Delete">
			</form>			
		</div>	
	</div>
</body>
</html>
