<?php

include 'db.php';

session_start();

$select = "select * from user where email = '".$_POST["email"]."'
and password = '".$_POST["pass"]."' ";

$result = mysqli_query($con,$select);

if(mysqli_num_rows($result) > 0) {

$_SESSION["sessionemail"] = $_POST["email"];

echo "success";

}

else {
    echo "connection failed";
}


?>


<!--?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    $welcomeMessage = "Welcome to the member's area, " . $_SESSION['username'] . "!";
} else {
    header('Location: login.php');
}
?-->

<!--?php
    if(!empty($welcomeMessage)) echo $welcomeMessage;
?-->