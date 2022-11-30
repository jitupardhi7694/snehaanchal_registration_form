<html>
<?php

include 'conn.php';


if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $age  = $_POST['age'];
    $gender = $_POST['gender'];
    $reg_type = $_POST['reg_type'];
    // $reg_date = $_POST['reg_date'];
    $reg_id = $_POST['reg_id'];
    $reg_date = $_POST['reg_date'];
    $aadhar = $_POST['aadhar'];
    $pic_filename = $_POST['pic_filename'];

    $image  = $_FILES['pic_filename'];
    $image_name = $image['name'];                   // image name
    $image_tmp_name = $image['tmp_name'];          // temp file path
    $destination = "uploads/" . $image_name;       // Folder path Where Image saved
    move_uploaded_file($image_tmp_name, $destination);
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

    $sql = "INSERT INTO `mytable`(`name`, `age`, `gender`, `reg_type`, `reg_date`, `reg_id`, `aadhar`, `pic_filename`, `ref_by`, `local_address`, `local_city`, `local_landmark`, `local_phone1`, `local_phone2`,
     `permanent_address`, `permanent_city`, `permanent_landmark`, `permanent_phone1`, `permanent_phone2`, `fathers_name`, `mothers_name`, `spouse_name`, `religion`, `language`, `occupation`, `family_occupation`, `family_earning`, `remarks`, `buddy_name`, `buddy_relation`, `buddy_address`, `buddy_city`, `buddy_phone`, `buddy1_name`, `buddy1_relation`
     , `buddy1_address`, `buddy1_city`, `buddy1_phone`, `admit_name`, `admit_relation`, `admit_address`,`admit_age`, `admit_gender`) VALUES  ('$name', '$age','$gender', '$reg_type', '$reg_date', '$reg_id', '$aadhar', '$destination','$ref_by','$local_address','$local_city','$local_landmark','$local_phone1','$local_phone2','$permanent_address','$permanent_city',
     '$permanent_landmark','$permanent_phone1','$permanent_phone2','$fathers_name','$mothers_name','$spouse_name','$religion','$language','$occupation','$family_occupation',
     '$family_earning','$remarks','$buddy_name','$buddy_relation','$buddy_address','$buddy_city','$buddy_phone','$buddy1_name','$buddy1_relation','$buddy1_address','$buddy1_city','$buddy1_phone','$admit_name','$admit_relation','$admit_address','$admit_age','$admit_gender')";


    $query = mysqli_query($conn, $sql);
    if ($query) {
        echo "New record created successfully !";
        header('location:registerPatient.php');
    } else {
        echo "Error: " . $sql . ";
" . mysqli_error($conn);
    }
    mysqli_close($conn);
}

?>


</html>