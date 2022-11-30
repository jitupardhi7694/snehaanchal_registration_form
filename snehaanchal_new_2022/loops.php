<html>
<?php
// echo "program <br>";

// for ($x = 1; $x <= 5; $x++) {
//     for ($y = 1; $y <= $x; $y++) {
//         echo " *";
//         if ($y < $x) {
//             echo " ";
//         }
//     }
//     echo "\n";
// }

$employee = array(
    "name" => "Robert",
    "email" => "robert112233@mail.com",
    "age" => 18,
    "gender" => "male"

);

// Loop through employee array 
foreach ($employee as $key => $element) {
    echo $key . ": " . $element . "<br>";
}



$student = array(

    "name" => "jitendra pardhi",
    "age" => "22",
    "address" => "nagpur"

);

foreach ($student as $std => $s_data) {
    echo $std . ":" . $s_data . "<br>";
}

?>

</html>