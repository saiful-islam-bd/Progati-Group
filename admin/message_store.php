<?php include("config.php");

echo  $whos_message = ($_REQUEST['whos_message']);
echo  $name         = ($_REQUEST['name']);
echo  $description  = ($_REQUEST['description']);

$msg = "";

// check if the user has clicked the button "UPLOAD" 
if (isset($_POST['uploadfile'])) {

    $filename = $_FILES["choosefile"]["name"];

    $tempname = $_FILES["choosefile"]["tmp_name"];

    $folder = "assets/image/" . $filename;

    // Add the image to the "image" folder"
    if (move_uploaded_file($tempname, $folder)) {

        $msg = "Image uploaded successfully";
    } else {

        $msg = "Failed to upload image";
    }
}

echo $filename;


$sql = "INSERT INTO about_us (image, whos_message, name, description) VALUES ('$filename','$whos_message', '$name', '$description')";

if (mysqli_query($conn, $sql)) {
    header("Location: message.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
