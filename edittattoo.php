<?php 
require_once 'core/models.php'; 
require_once 'core/dbConfig.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Tattoo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
	<a href="viewprojects.php?artist_id=<?php echo $_GET['artist_id']; ?>">
	View The Projects</a>
	<h1>Edit the tattoo!</h1>
	<?php $getTattooByID = getTattooByID($pdo, $_GET['artist_id']); ?>
	<form action="core/handleForms.php?tattoo_id=<?php echo $_GET['tattoo_id']; ?>
	&artist_id=<?php echo $_GET['artist_id']; ?>" method="POST">
        <p>
            <label for="tattoo_name">Tattoo Name</label> 
            <input type="text" name="tattoo_name" value="<?php echo htmlspecialchars($getTattooByID['tattoo_name']); ?>" required>
        </p>
        <p>
            <label for="tattoo_style">Tattoo Style</label> 
            <input type="text" name="tattoo_style" value="<?php echo htmlspecialchars($getTattooByID['tattoo_style']); ?>" required>
        </p>
        <p>
            <label for="date_done">Date Done</label> 
            <input type="date" name="date_done" value="<?php echo htmlspecialchars($getTattooByID['date_done']); ?>" required>
        </p>
        <p>
            <label for="cost">Cost</label> 
            <input type="number" name="cost" value="<?php echo htmlspecialchars($getTattooByID['cost']); ?>" step="0.01" required>
        </p>
        <input type="submit" name="editTattooBtn" value="Update Tattoo">
    </form>
</body>
</html>
