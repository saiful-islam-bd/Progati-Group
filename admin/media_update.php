<?php include("config.php");

$id             = $_GET['id'];
$video_title    = ($_REQUEST['video_title']);
$youtube_link   = ($_REQUEST['youtube_link']);
// $category       = ($_REQUEST['category']);

$msg = "";

// check if the user has clicked the button "UPLOAD" 
if (isset($_POST['uploadfile'])) {

    $filename = $_FILES["choosefile"]["name"];

    $tempname = $_FILES["choosefile"]["tmp_name"];

    $folder = "assets/video/" . $filename;

    // Add the image to the "image" folder"
    if (move_uploaded_file($tempname, $folder)) {

        $msg = "Image uploaded successfully";
    } else {

        $msg = "Failed to upload image";
    }
}

echo $filename;

$sql = "UPDATE media SET youtube_link='$youtube_link', video_title='$video_title', uploaded_video='$filename' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: media.php");
} else {
    echo "Error updating record: " . $conn->error;
}
