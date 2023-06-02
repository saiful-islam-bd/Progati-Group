<?php include("config.php");

echo  $id               = $_GET['id'];
echo  $title            = ($_REQUEST['title']);
echo  $description      = ($_REQUEST['description']);

$sql = "UPDATE  follow_us  SET title='$title', description='$description' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: follow_us.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
