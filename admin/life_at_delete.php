<?php include("config.php");

echo $id = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM life_at WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: life_at.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
