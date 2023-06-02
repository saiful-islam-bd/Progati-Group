<?php include("config.php");

echo  $product_name     = ($_REQUEST['product_name']);
echo  $price            = ($_REQUEST['price']);
echo  $company_name     = ($_REQUEST['company_name']);

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


$sql = "INSERT INTO product (image, product_name,price, company_name) VALUES ('$filename','$product_name', '$price', '$company_name')";

if (mysqli_query($conn, $sql)) {
    header("Location: product.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
