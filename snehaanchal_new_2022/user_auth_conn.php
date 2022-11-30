<html>
<?php

$hostname = "localhost";
$username = "root";
$port = 3307;
$password = "";
$dbname = "user_auth_php";


$conn = mysqli_connect($hostname, $username, $password, $dbname, $port);


if ($conn) {
    echo "database connected successfully...!!";
} else {
    echo "database not connected..!!";
}

?>

</html>