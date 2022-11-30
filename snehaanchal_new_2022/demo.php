<html>
<?php

// include 'conn.php';

// if (count($_POST) > 0) {
//     $sql =    mysqli_query($conn, "UPDATE mytable set id='" . $_GET['id'] . "', name='" . $_POST['name'] . "', age='" . $_POST['age'] . "', gender='" . $_POST['gender'] . "'
//     ,reg_type='" . $_POST['reg_type'] . "',reg_date='" . $_POST['reg_date'] . "',reg_id='" . $_POST['reg_id'] . "',aadhar='" . $_POST['aadhar'] . "'
//     ,pic_filename='" . $_POST['pic_filename'] . "',ref_by='" . $_POST['ref_by'] . "',local_address='" . $_POST['local_address'] . "',local_city='" . $_POST['local_city'] . "',
//     local_landmark='" . $_POST['local_landmark'] . "',local_phone1='" . $_POST['local_phone1'] . "',local_phone2='" . $_POST['local_phone2'] . "',permanent_address='" . $_POST['permanent_address'] . "',permanent_city='" . $_POST['permanent_city'] . "'
//     , permanent_landmark='" . $_POST['permanent_landmark'] . "', permanent_phone1='" . $_POST['permanent_phone2'] . "', fathers_name='" . $_POST['fathers_name'] . "', mothers_name='" . $_POST['mothers_name'] . "',
//     spouse_name='" . $_POST['spouse_name'] . "',religion='" . $_POST['religion'] . "',language='" . $_POST['language'] . "',occupation='" . $_POST['occupation'] . "',
//     family_occupation='" . $_POST['family_occupation'] . "',family_earning='" . $_POST['family_earning'] . "',remarks='" . $_POST['remarks'] . "', buddy_name='" . $_POST['buddy_name'] . "',
//     buddy_relation='" . $_POST['buddy_relation'] . "',buddy_address='" . $_POST['buddy_address'] . "',buddy_city='" . $_POST['buddy_city'] . "',buddy_phone='" . $_POST['buddy_phone'] . "',buddy1_name='" . $_POST['buddy1_name'] . "',
//     buddy1_relation='" . $_POST['buddy1_relation'] . "',buddy1_address='" . $_POST['buddy1_address'] . "',buddy1_city='" . $_POST['buddy1_city'] . "',buddy1_phone='" . $_POST['buddy1_phone'] . "',admit_name='" . $_POST['admit_name'] . "',admit_relation='" . $_POST['admit_relation'] . "',
//     admit_address='" . $_POST['admit_address'] . "',admit_phone='" . $_POST['admit_phone'] . "',admit_age='" . $_POST['admit_age'] . "',admit_gender='" . $_POST['admit_gender'] . "' WHERE id='" . $_POST['id'] . "'");


//     if ($sql) {
//         header('location:data_table.php');
//     } else {
//         header('location:update_data.php');
//         echo "error found....!!";
//     }
// }

// include 'update.php';

// $result = mysqli_query($conn, "SELECT * FROM mytable WHERE id='" . $_GET['id'] . "'");
// $row = mysqli_fetch_array($result);



// for ($x = 1; $x <= 5; $x++) {
//     for ($y = 1; $y <= $x; $y++) {
//         echo " *";
//         if ($y < $x) {
//             echo " ";
//         }
//     }
//     echo "\n";
// }



require_once 'conn.php';
if (isset($_POST['edit'])) {
    $user_id = $_POST['user_id'];
    $image_name = $_FILES['photo']['name'];
    $image_temp = $_FILES['photo']['tmp_name'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $previous = $_POST['previous'];
    $exp = explode(".", $image_name);
    $end = end($exp);
    $name = time() . "." . $end;
    if (!is_dir("./upload"))
        mkdir("upload");
    $path = "upload/" . $name;
    $allowed_ext = array("gif", "jpg", "jpeg", "png");
    if (in_array($end, $allowed_ext)) {
        if (unlink($previous)) {
            if (move_uploaded_file($image_temp, $path)) {
                mysqli_query($conn, "UPDATE `user` set `firstname` = '$firstname', `lastname` = '$lastname', `photo` = '$path' WHERE `user_id` = '$user_id'") or die(mysqli_error());
                echo "<script>alert('User account updated!')</script>";
                header("location: index.php");
            }
        }
    } else {
        echo "<script>alert('Image only')</script>";
    }
}


?>

</html>