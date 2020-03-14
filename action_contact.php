<!DOCTYPE html>
<html lang="en">`

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Propremium</title>

    <!-- Font Awesome Icons -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic'
        rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS - Includes Bootstrap -->
    <link href="css/creative.min.css" rel="stylesheet">

    <link href="css/animate.min.css" rel="stylesheet">

<body>
    <?php
   
if (isset($_POST['submit'])){

 include_once("db.php");
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$subject= $_POST['subject'];
$message = $_POST['message'];

$mailTo = "akashimaruku@gmail.com";
$headers = "From: ".$email;
$txt = "You have received an e-mail from ".$fullname.".\n\n".$message;

mail($mailTo, $subject, $txt, $headers);

$sql = "SELECT email FROM contacts WHERE email='$email'";
$resultset = mysqli_query($con, $sql) or die("database error:". mysqli_error($con));
$row = mysqli_fetch_assoc($resultset);
if(!$row['email']){
$sql = mysqli_query($con,"INSERT INTO contacts(`name`, `email`, `subject`, `message`) VALUES ( '$fullname', '$email', '$subject', '$message')");
if($sql){
    echo "<script>alert('sent!')</script>" ;
    header("Location: index.php?sent");
}else{
    echo "error";
}
} 
else{
   echo "something went wrong, please try again."; 
}
}


/*$toEmail = "info@gomecogroup.com";
    $mailHeaders = "From: " . $_POST["name"] . "<". $_POST["email"] .">\r\n";
    if(mail($toEmail, $_POST["subject"], $_POST["msg"], $mailHeaders)) {
        print "<p class='success'>Mail Sent.</p>";
    } else {
        print "<p class='Error'>Problem in Sending Mail.</p>";
    }
*/

?>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/creative.min.js"> </script>
</body>

</html>