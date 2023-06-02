<?php include("config.php");

echo  $id               = $_GET['id'];
echo  $category         = ($_REQUEST['category']);
echo  $title            = ($_REQUEST['title']);


$sql = "UPDATE photo_gallery_category  SET category='$category', title='$title' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: photoGallery_category.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
