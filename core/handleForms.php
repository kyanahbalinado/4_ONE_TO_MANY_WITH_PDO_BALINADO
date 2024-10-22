<?php 

require_once 'dbConfig.php'; 
require_once 'models.php';

if (isset($_POST['insertTattooBtn'])) {
    $query = insertWebDev($pdo, $_POST['first_name'], $_POST['last_name'], $_POST['specialization'], $_POST['rating']);
    if ($query) {
        header("Location: ../index.php");
        exit(); 
    } else {
        echo "Insertion failed";
    }
}

if (isset($_POST['editTattooArtistBtn'])) {
    $query = updateWebDev($pdo, $_POST['first_name'], $_POST['last_name'], $_POST['specialization'], $_POST['rating'], $_GET['artist_id']);
    if ($query) {
		header("Location: ../index.php");
	}

	else {
		echo "Edit failed";;
	}

}


if (isset($_POST['deleteTattooArtistBtn'])) {
    $query = deleteWebDev($pdo, $_GET['artist_id']);
    if ($query) {
        header("Location: ../index.php"); 
        exit();
    } else {
        echo "Deletion failed";
    }
}

if (isset($_POST['insertNewProjectBtn'])) {
    $query = insertProject($pdo, $_POST['tattoo_name'], $_POST['tattoo_style'], $_POST['date_done'], $_POST['cost'], $_GET['artist_id']);
    if ($query) {
        header("Location: ../viewprojects.php?artist_id=" . $_GET['artist_id']);
        exit();
    } else {
        echo "Insertion failed";
    }
}

if (isset($_POST['editTattooBtn'])) {
    $query = updateProject($pdo, $_POST['tattoo_name'], $_POST['tattoo_style'], $_POST['date_done'], $_POST['cost'], $_GET['tattoo_id']);
    if ($query) {
        header("Location: ../viewprojects.php?artist_id=" . $_GET['artist_id']);
        exit();
    } else {
        echo "Update failed";
    }
}

if (isset($_POST['deleteTattooProjectBtn'])) {
    $query = deleteProject($pdo, $_GET['tattoo_id']);
    if ($query) {
        header("Location: ../viewprojects.php?artist_id=" . $_GET['artist_id']);
        exit();
    } else {
        echo "Deletion failed";
    }
}
?>
