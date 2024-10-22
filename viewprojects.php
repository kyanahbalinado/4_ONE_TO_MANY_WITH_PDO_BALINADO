<?php 
require_once 'core/models.php'; 
require_once 'core/dbConfig.php'; 

// Ensure artist_id is provided
if (!isset($_GET['artist_id'])) {
    die("No artist ID provided.");
}

$artist_id = $_GET['artist_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects by Artist</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <a href="index.php">Return to home</a>
    <h1>Add New Project</h1>
    <form action="core/handleForms.php?artist_id=<?php echo $artist_id; ?>" method="POST">
        <p>
            <label for="tattoo_name">Tattoo Name</label> 
            <input type="text" name="tattoo_name" required>
        </p>
        <p>
            <label for="tattoo_style">Tattoo Style</label> 
            <input type="text" name="tattoo_style" required>
        </p>
        <p>
            <label for="date_done">Date Done</label> 
            <input type="date" name="date_done" required>
        </p>
        <p>
            <label for="cost">Cost</label> 
            <input type="number" name="cost" step="0.01" required>
            <input type="submit" name="insertNewProjectBtn" value="Add Project">
        </p>
    </form>

    <table style="width:100%; margin-top: 50px;">
        <tr>
            <th>Tattoo ID</th>
            <th>Tattoo Name</th>
            <th>Tattoo Style</th>
            <th>Date Done</th>
            <th>Cost</th>
            <th>Action</th>
        </tr>
        <?php 
        $getProjectsByWebDev = getTattoosByArtist($pdo, $artist_id); 
        if ($getProjectsByWebDev) {
            foreach ($getProjectsByWebDev as $row) { 
        ?>
        <tr>
            <td><?php echo htmlspecialchars($row['tattoo_id']); ?></td>	  	
            <td><?php echo htmlspecialchars($row['tattoo_name']); ?></td>	  	
            <td><?php echo htmlspecialchars($row['tattoo_style']); ?></td>	  	
            <td><?php echo htmlspecialchars($row['date_done']); ?></td>	  	
            <td><?php echo htmlspecialchars($row['cost']); ?></td>
            <td>
                <a href="edittattoo.php?tattoo_id=<?php echo $row['tattoo_id']; ?>&artist_id=<?php echo $artist_id; ?>">Edit</a>
                <a href="deletetattoo.php?tattoo_id=<?php echo $row['tattoo_id']; ?>&artist_id=<?php echo $artist_id; ?>">Delete</a>
            </td>	  	
        </tr>
        <?php 
            } 
        } else {
            echo "<tr><td colspan='6'>No tattoos found for this artist.</td></tr>";
        }
        ?>
    </table>
</body>
</html>
