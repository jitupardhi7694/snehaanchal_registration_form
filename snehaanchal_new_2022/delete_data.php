<html>

<?php
include_once 'conn.php';
$sql = "DELETE FROM mytable WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    header('location:data_table.php');
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);

?>

</html>