<?php require_once 'core/handleForms.php'; ?>
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
    <?php $getTattooArtistByID = getTattooArtistByID($pdo, $_GET['artist_id']); ?>
	<h1>Edit the user!</h1>
	<form action="core/handleForms.php?artist_id=<?php echo $_GET['artist_id']; ?>" method="POST">
		<p>
    <label>First Name:</label>
    <input type="text" name="first_name" value="<?php echo $getTattooArtistByID['first_name']; ?>">

    <label>Last Name:</label>
    <input type="text" name="last_name" value="<?php echo $getTattooArtistByID['last_name']; ?>">

    <label>Specialization:</label>
    <input type="text" name="specialization" value="<?php echo $getTattooArtistByID['specialization']; ?>">

    <label>Rating:</label>
    <input type="number" name="rating" step="0.1" max="5.0" value="<?php echo $getTattooArtistByID['rating']; ?>">

    <input type="submit" name="editTattooArtistBtn" value="Update Artist">
</form>
