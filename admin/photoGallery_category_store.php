<?php include("config.php");

echo  $category     = ($_REQUEST['category']);
echo  $title        = ($_REQUEST['title']);

$sql = "INSERT INTO  photo_gallery_category (category,  title) VALUES ('$category','$title')";

if (mysqli_query($conn, $sql)) {
    header("Location: photoGallery_category.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
