<!--connection-->

<!--?php
$servername="localhost";
$username="root";
$password="";
$db="db_products";


// Create connection
$con = new mysqli($servername, $username, $password,$db);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}



/*if (mysqli_connect_error()) {
    die("Database connection failed: " . mysqli_connect_error());
}

*/

/*
$con = new mysqli("localhost" ,"root","","db_products");
if($con->connect_error){
    die("Connection failed!".$con->connect_error);
}
*/
?-->


<?php
$servername="localhost";
$username="root";
$password="";
$db="db_products";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>