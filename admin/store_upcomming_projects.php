<?php include("config.php");

echo  $title                = ($_REQUEST['title']);
echo  $title    = ($_REQUEST['title']);
echo  $description          = ($_REQUEST['description']);

$msg = "";

// check if the user has clicked the button "UPLOAD" 
if (isset($_POST['uploadfile'])) {

    $filename = $_FILES["choosefile"]["name"];

    $tempname = $_FILES["choosefile"]["tmp_name"];

    $folder = "assets/image/".$filename;

    // Add the image to the "image" folder"
    if (move_uploaded_file($tempname, $folder)) {

        $msg = "Image uploaded successfully";
    } else {

        $msg = "Failed to upload image";
    }
}

echo $filename;


$sql = "INSERT INTO upcomming_projects (image) VALUES ('$filename')";

if (mysqli_query($conn, $sql)) {
    header("Location: upcomming_projects.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
