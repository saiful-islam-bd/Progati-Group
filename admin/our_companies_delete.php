<?php include("config.php");

echo $id = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM our_companies WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: our_companies.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
