<?php include("config.php");

echo $id = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM contact_us WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: contact_us.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
