<?php include("config.php");

echo  $name         = ($_REQUEST['name']);
echo  $email        = ($_REQUEST['email']);
echo  $subject      = ($_REQUEST['subject']);
echo  $message      = ($_REQUEST['message']);

$sql = "INSERT INTO contact_us (name, email, subject, message) VALUES ('$name','$email', '$subject', '$message')";

if (mysqli_query($conn, $sql)) {
    header("Location: ../contact_us.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
