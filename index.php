<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<h1>Welcome To Tattoo Management System. Add new tattoo artist!</h1>
	<form action="core/handleForms.php" method="POST">
		<p>
			<label for="first_name">First Name</label> 
			<input type="text" name="first_name">
		</p>
		<p>
			<label for="last_name">Last Name</label> 
			<input type="text" name="last_name">
		</p>
		<p>
			<label for="specialization ">Specialization </label> 
			<input type="text" name="specialization">
		</p>
		<p>
			<label for="rating ">Rating </label> 
			<input type="text" name="rating">
			<input type="submit" name="insertTattooBtn">
		</p>
	</form>
	<?php $getAllWebDevs = getAllWebDevs($pdo); ?>
	<?php foreach ($getAllWebDevs as $row) { ?>
	<div class="container" style="border-style: solid; width: 50%; height: 300px; margin-top: 20px;">
		<h3>FirstName: <?php echo $row['first_name']; ?></h3>
		<h3>LastName: <?php echo $row['last_name']; ?></h3>
		<h3>Specialization: <?php echo $row['specialization']; ?></h3>
		<h3>Date Added: <?php echo $row['rating']; ?></h3>


		<div class="editAndDelete" style="float: right; margin-right: 20px;">
			<a href="viewprojects.php?artist_id=<?php echo $row['artist_id']; ?>">View Projects</a>
			<a href="edittartist.php?artist_id=<?php echo $row['artist_id']; ?>">Edit</a>
			<a href="deleteartists.php?artist_id=<?php echo $row['artist_id']; ?>">Delete</a>
		</div>


	</div> 
	<?php } ?>
</body>
</html>