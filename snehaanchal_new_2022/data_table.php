<?php
include_once 'conn.php';
$result = mysqli_query($conn, "SELECT * FROM mytable ");




?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./index.css">

    <title> SNEHAANCHAL REGISTRATION DATA </title>
</head>

<body>
    <div class="container">

        <h2 class="text-center mt-5 mb-5 text-primary h">
            SNEHAANCHAL REGISTRATION DATA
        </h2>
    </div>
    <table class="table table-bordered border-primary">
        <?php
        if (mysqli_num_rows($result) > 0) {
        ?>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NAME</th>
                <th scope="col">AGE</th>
                <th scope="col">GENDER</th>
                <th scope="col">REG TYPE</th>
                <th scope="col">REG DATE </th>
                <th scope="col">REG ID</th>
                <th scope="col">ADHAR</th>
                <th scope="col">IMAGE </th>
                <th scope="col">REFERENCE BY</th>
                <th scope="col">LOCAL ADDRESS</th>
                <th scope="col">LOCAL CITY</th>
                <th scope="col">LOCAL LANDMARK</th>
                <th scope="col">LOCAL PHONE 1</th>
                <th scope="col">LOCAL PHONE 2</th>
                <th scope="col">PERMANENT ADDRESS</th>
                <th scope="col">PERMANENT CITY</th>
                <th scope="col">PERMANENT LANDMARK</th>
                <th scope="col">PERMANENT PHONE 1</th>
                <th scope="col">PERMANENT PHONE 2</th>
                <th scope="col">FATHERS NAME</th>
                <th scope="col">MOTHERS NAME</th>
                <th scope="col">SPOUSE NAME</th>
                <th scope="col">RELIGION</th>
                <th scope="col">LANGUAGE</th>
                <th scope="col">OCCUPATION</th>
                <th scope="col">FAMILY OCCUPATION</th>
                <th scope="col">FAMILY EARNING</th>
                <th scope="col">REMARKS</th>
                <th scope="col">BUDDY NAME</th>
                <th scope="col">BUDDY RELATION</th>
                <th scope="col">BUDDY ADDRESS</th>
                <th scope="col">BUDDY CITY</th>
                <th scope="col">BUDDY PHONE</th>
                <th scope="col">BUDDY NAME 2</th>
                <th scope="col">BUDDY RELATION 2</th>
                <th scope="col">BUDDY ADDRESS 2</th>
                <th scope="col">BUDDY CITY 2</th>
                <th scope="col">BUDDY PHONE 2</th>
                <th scope="col">ADMIT NAME</th>
                <th scope="col">ADMIT RELATION</th>
                <th scope="col">ADMIT ADDRESS</th>
                <th scope="col">ADMIT PHONE</th>
                <th scope="col">ADMIT AGE</th>
                <th scope="col">ADMIT GENDER</th>
                <th scope="col">STATUS</th>
                <th scope="col">DOD STATUS</th>
                <th scope="col">CREATED AT </th>
                <th scope="col">UPDATED AT</th>
                <th scope="col">IP ADDRESS</th>
                <th scope="col">PATIENT TYPE ID</th>
                <th scope="col">ACTION</th>

            </tr>
        </thead>
        <?php
            $i = 0;
            while ($row = mysqli_fetch_array($result)) {
            ?>
        <tbody>
            <tr>
                <td><?php echo $row["id"]; ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["age"]; ?></td>
                <td><?php echo $row["gender"]; ?></td>
                <td><?php echo $row["reg_type"]; ?></td>
                <td><?php echo $row["reg_date"]; ?></td>
                <td><?php echo $row["reg_id"]; ?></td>
                <td><?php echo $row["aadhar"]; ?></td>
                <td><img src="<?php echo $row['pic_filename'] ?>" style=" width:100px; height:100px;"></td>
                <td><?php echo $row["ref_by"]; ?></td>
                <td><?php echo $row["local_address"]; ?></td>
                <td><?php echo $row["local_city"]; ?></td>
                <td><?php echo $row["local_landmark"]; ?></td>
                <td><?php echo $row["local_phone1"]; ?></td>
                <td><?php echo $row["local_phone2"]; ?></td>
                <td><?php echo $row["permanent_address"]; ?></td>
                <td><?php echo $row["permanent_city"]; ?></td>
                <td><?php echo $row["permanent_landmark"]; ?></td>
                <td><?php echo $row["permanent_phone1"]; ?></td>
                <td><?php echo $row["permanent_phone2"]; ?></td>
                <td><?php echo $row["fathers_name"]; ?></td>
                <td><?php echo $row["mothers_name"]; ?></td>
                <td><?php echo $row["spouse_name"]; ?></td>
                <td><?php echo $row["religion"]; ?></td>
                <td><?php echo $row["language"]; ?></td>
                <td><?php echo $row["occupation"]; ?></td>
                <td><?php echo $row["family_occupation"]; ?></td>
                <td><?php echo $row["family_earning"]; ?></td>
                <td><?php echo $row["remarks"]; ?></td>
                <td><?php echo $row["buddy_name"]; ?></td>
                <td><?php echo $row["buddy_relation"]; ?></td>
                <td><?php echo $row["buddy_address"]; ?></td>
                <td><?php echo $row["buddy_city"]; ?></td>
                <td><?php echo $row["buddy_phone"]; ?></td>
                <td><?php echo $row["buddy1_name"]; ?></td>
                <td><?php echo $row["buddy1_relation"]; ?></td>
                <td><?php echo $row["buddy1_address"]; ?></td>
                <td><?php echo $row["buddy1_city"]; ?></td>
                <td><?php echo $row["buddy1_phone"]; ?></td>
                <td><?php echo $row["admit_name"]; ?></td>
                <td><?php echo $row["admit_relation"]; ?></td>
                <td><?php echo $row["admit_address"]; ?></td>
                <td><?php echo $row["admit_phone"]; ?></td>
                <td><?php echo $row["admit_age"]; ?></td>
                <td><?php echo $row["admit_gender"]; ?></td>
                <td><?php echo $row["is_active"]; ?></td>
                <td><?php echo $row["dod"]; ?></td>
                <td><?php echo $row["created_at"]; ?></td>
                <td><?php echo $row["updated_at"]; ?></td>
                <td><?php echo $row["ip_addr"]; ?></td>
                <td><?php echo $row["patient_type_id"]; ?></td>
                <td>
                    <div class=" btn-group btn-group-sm" role="group"><a
                            href="update_data.php?id=<?php echo $row["id"]; ?>" class="btn btn-success"
                            onclick="up()">Update</a><a href="delete_data.php?id=<?php echo $row["id"]; ?>"
                            onclick="delet_e()" class="btn btn-danger">Delete</a>
                    </div>
                </td>

            </tr>
        </tbody>
        <?php
                $i++;
            }
            ?>

        <?php

        } else {
        ?>

        <tr>

            <td colspan="50" class="text-center  table-bordered">No data found..</td>

        </tr>

        <?php

        }

        ?>

    </table>

    <div class="container">
        <div class="mt-5">
            <a href="./registerPatient.php" class="btn btn-primary text-center">Register Again</a>
        </div>
    </div>

    <br><br>
    <!-- <a href="./registerPatient.php" class="btn btn-info">insert data</a> -->

    <script>
    function delet_e() {
        alert("successfully delete data plese click on okk");
    }

    function up() {
        window.alert("continue update your registration .!!");
    }
    </script>

</body>

</html>