<?php include("config.php");

echo $id       = $_GET['id'];
echo $mission  = ($_REQUEST['mission']);

$sql = "UPDATE mission_vision SET mission='$mission' WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: mission.php");
} else {
    echo "Error updating record: " . $conn->error;
}
