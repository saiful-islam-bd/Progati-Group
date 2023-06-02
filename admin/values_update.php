<?php include("config.php");

echo $id        = $_GET['id'];
echo $values    = ($_REQUEST['values']);

$sql = "UPDATE mission_vision SET values='$values' WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: values.php");
} else {
    echo "Error updating record: " . $conn->error;
}
