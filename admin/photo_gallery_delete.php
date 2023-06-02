<?php include("config.php");

echo $id = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM photo_gallery WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: photo_gallery.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
