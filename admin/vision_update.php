<?php include("config.php");

echo $id        = $_GET['id'];
echo $vision    = ($_REQUEST['vision']);

$sql = "UPDATE mission_vision SET vision='$vision' WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: vision.php");
} else {
    echo "Error updating record: " . $conn->error;
}
