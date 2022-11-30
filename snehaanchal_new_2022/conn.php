<html>

<?php

$hostname = "localhost";
$username = "root";
$port = 3307;
$password = "";
$dbname = "snehaanchal";


$conn = mysqli_connect($hostname, $username, $password, $dbname, 3307);

if ($conn) {
    echo "<script>alert('Successfully connected database .!!');</script>";
} else {
    echo "no database connected..";
}

?>


</html>