<?php include("config.php");

echo  $video_title      = ($_REQUEST['video_title']);
echo  $youtube_link     = ($_REQUEST['youtube_link']);
// echo  $category         = ($_REQUEST['category']);


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


$sql = "INSERT INTO media (youtube_link, uploaded_video	, video_title) VALUES ('$youtube_link','$filename', '$video_title')";

if (mysqli_query($conn, $sql)) {
    header("Location: media.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
