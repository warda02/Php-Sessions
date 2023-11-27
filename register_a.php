<?php
extract($_POST);
include("database.php");
$sql = mysqli_query($conn, "SELECT * FROM register where Email='$email'");
if (mysqli_num_rows($sql) > 0) {
    echo "Email Id Already Exists"; 
    exit;
} elseif (isset($_POST['save'])) {
    $hashed_password = md5($pass); // Hash the password using md5

    $query = "INSERT INTO register (First_Name, Last_Name, Email, Password)
              VALUES ('$first_name', '$last_name', '$email', '$hashed_password')";
              
    $sql = mysqli_query($conn, $query) or die("Could Not Perform the Query");
    
    header("Location: login.php?status=success");
} else {
    echo "Error. Please try again";
}
?>
