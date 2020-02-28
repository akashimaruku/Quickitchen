<?php
include_once("db.php");

$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$user_email = $_POST['email'];
$user_password = $_POST['pass'];
$sql = "SELECT email FROM user WHERE email='$user_email'";
$resultset = mysqli_query($con, $sql) or die("database error:". mysqli_error($con));
$row = mysqli_fetch_assoc($resultset);
if(!$row['email']){
$sql = mysqli_query($con,"INSERT INTO user(`firstname`, `lastname`, `email`, `password`) VALUES ( '$firstname', '$lastname', '$user_email', '$user_password')");
if($sql){
    echo "registered";
    header("Location: index.php");
    echo "alert('sign up done')";
}else{
    echo "error";
}
} else {
echo "1";
}

?>