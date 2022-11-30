<html>
<?php

include 'conn.php';

if (isset($_POST['update'])) {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $reg_type = $_POST['reg_type'];
    // $reg_date = $_POST['reg_date'];
    $reg_id = $_POST['reg_id'];
    $reg_date = $_POST['reg_date'];
    $aadhar = $_POST['aadhar'];
    // $pic_filename = $_POST['pic_filename'];
    $image_name = $_FILES['pic_filename']['name'];
    $image_temp = $_FILES['pic_filename']['tmp_name'];
    $ref_by = $_POST['ref_by'];
    $local_address = $_POST['local_address'];
    $local_city = $_POST['local_city'];
    $local_landmark = $_POST['local_landmark'];
    $local_phone1 = $_POST['local_phone1'];
    $local_phone2 = $_POST['local_phone2'];
    $permanent_address = $_POST['permanent_address'];
    $permanent_city = $_POST['permanent_city'];
    $permanent_landmark = $_POST['permanent_landmark'];
    $permanent_phone1 = $_POST['permanent_phone1'];
    $permanent_phone2 = $_POST['permanent_phone2'];
    $fathers_name = $_POST['fathers_name'];
    $mothers_name = $_POST['mothers_name'];
    $spouse_name = $_POST['spouse_name'];
    $religion = $_POST['religion'];
    $language = $_POST['language'];
    $occupation = $_POST['occupation'];
    $family_occupation = $_POST['family_occupation'];
    $family_earning = $_POST['family_earning'];
    $remarks = $_POST['remarks'];
    $buddy_name = $_POST['buddy_name'];
    $buddy_relation = $_POST['buddy_relation'];
    $buddy_address = $_POST['buddy_address'];
    $buddy_city = $_POST['buddy_city'];
    $buddy_phone = $_POST['buddy_phone'];
    $buddy1_name = $_POST['buddy1_name'];
    $buddy1_relation = $_POST['buddy1_relation'];
    $buddy1_address = $_POST['buddy1_address'];
    $buddy1_city = $_POST['buddy1_city'];
    $buddy1_phone = $_POST['buddy1_phone'];
    $admit_name = $_POST['admit_name'];
    $admit_relation = $_POST['admit_relation'];
    $admit_address = $_POST['admit_address'];
    // $admit_phone = $_POST['admit_phone'];
    $admit_age = $_POST['admit_age'];
    $admit_gender = $_POST['admit_gender'];

    // $sql = " UPDATE `mytable` SET `id`='$id',`name`='$name',`age`='$age',`gender`='$gender',`reg_type`='$reg_type',`reg_date`='$reg_date',`reg_id`='$reg_id',`aadhar`='$aadhar',`pic_filename`='$pic_filename',`ref_by`='$ref_by',`local_address`='$local_address',`local_city`='$local_city',`local_landmark`='$local_landmark',`local_phone1`='$local_phone1',`local_phone2`='$local_phone2',`permanent_address`='$permanent_address',`permanent_city`='$permanent_city',`permanent_landmark`='$permanent_landmark',`permanent_phone1`='$permanent_phone1',`permanent_phone2`='$permanent_phone2',`fathers_name`='$fathers_name',`mothers_name`='$mothers_name',`spouse_name`='$spouse_name',`religion`='$religion',`language`='$language',`occupation`='$occupation',`family_occupation`='$family_occupation',`family_earning`='$family_earning',`remarks`='$remarks',`buddy_name`='$buddy_name',`buddy_relation`='$buddy_relation',`buddy_address`='$buddy_address',`buddy_city`='$buddy_city',`buddy_phone`='$buddy_phone',`buddy1_name`='$buddy1_name',`buddy1_relation`='$buddy1_relation',`buddy1_address`='$buddy1_address',`buddy1_city`='$buddy1_city',`buddy1_phone`='$buddy1_phone',`admit_name`='$admit_name',`admit_relation`='$admit_relation',`admit_address`='$admit_address',`admit_age`='$admit_age',`admit_gender`='$admit_gender' WHERE id = $id ";


    $exp = explode(".", $image_name);
    $end = end($exp);
    $name = time() . "." . $end;
    if (!is_dir("./upload")) {
        mkdir("upload");
    }
    $path = "uploads/" . $name;
    $allowed_ext = array("gif", "jpg", "jpeg", "png");
    if (in_array($end, $allowed_ext)) {
        // if () {
        if (move_uploaded_file($image_temp, $path)) {
            mysqli_query($conn, "UPDATE `mytable` SET `id`='$id',`name`='$name',`age`='$age',`gender`='$gender',`reg_type`='$reg_type',`reg_date`='$reg_date',`reg_id`='$reg_id',`aadhar`='$aadhar',`pic_filename`='$path',`ref_by`='$ref_by',`local_address`='$local_address',`local_city`='$local_city',`local_landmark`='$local_landmark',`local_phone1`='$local_phone1',`local_phone2`='$local_phone2',`permanent_address`='$permanent_address',`permanent_city`='$permanent_city',`permanent_landmark`='$permanent_landmark',`permanent_phone1`='$permanent_phone1',`permanent_phone2`='$permanent_phone2',`fathers_name`='$fathers_name',`mothers_name`='$mothers_name',`spouse_name`='$spouse_name',`religion`='$religion',`language`='$language',`occupation`='$occupation',`family_occupation`='$family_occupation',`family_earning`='$family_earning',`remarks`='$remarks',`buddy_name`='$buddy_name',`buddy_relation`='$buddy_relation',`buddy_address`='$buddy_address',`buddy_city`='$buddy_city',`buddy_phone`='$buddy_phone',`buddy1_name`='$buddy1_name',`buddy1_relation`='$buddy1_relation',`buddy1_address`='$buddy1_address',`buddy1_city`='$buddy1_city',`buddy1_phone`='$buddy1_phone',`admit_name`='$admit_name',`admit_relation`='$admit_relation',`admit_address`='$admit_address',`admit_age`='$admit_age',`admit_gender`='$admit_gender' WHERE id = $id");
            echo "<script>alert('User account updated!')</script>";
            header("location: data_table.php");
        }
        // }





        // $query = mysqli_query($conn, $sql);

        // if ($query) {
        //     header('location:data_table.php');
        // }
        else {
            echo "<script>alert('error in your data query please check ..')</script> ";
        }
    }
}
?>

</html>