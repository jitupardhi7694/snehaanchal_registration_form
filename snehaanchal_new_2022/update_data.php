<?php

// include 'conn.php';
include 'update.php';

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

    <title>Registration Form </title>
</head>

<body>

    <!-- <%- include('../../layouts/partials/messages.ejs') %> -->
    <div class="container">
        <div class="row">
            <div class="mt-4">
                <div class="md-2">
                    <!-- form start -->
                    <form class="needs-validation" action="" method="POST" enctype="multipart/form-data" novalidate>

                        <div class="row align-items-center">
                            <div class="col mt-2">
                                <h4 class="text-center">Registration Form</h4>
                            </div>
                        </div>
                        <!-- ********************************************************* -->
                        <?php

                        $result = mysqli_query($conn, "SELECT * FROM `mytable` WHERE id='" . $_GET['id'] . "'");

                        while ($row = mysqli_fetch_array($result)) {

                            $name = $row['name'];
                            $age = $row['age'];
                            $gender = $row['gender'];
                            $reg_type = $row['reg_type'];
                            // $reg_date = $row['reg_date'];
                            $reg_id = $row['reg_id'];
                            $reg_date = $row['reg_date'];
                            $aadhar = $row['aadhar'];
                            $pic_filename = $row['pic_filename'];

                            $ref_by = $row['ref_by'];
                            $local_address = $row['local_address'];
                            $local_city = $row['local_city'];
                            $local_landmark = $row['local_landmark'];
                            $local_phone1 = $row['local_phone1'];
                            $local_phone2 = $row['local_phone2'];
                            $permanent_address = $row['permanent_address'];
                            $permanent_city = $row['permanent_city'];
                            $permanent_landmark = $row['permanent_landmark'];
                            $permanent_phone1 = $row['permanent_phone1'];
                            $permanent_phone2 = $row['permanent_phone2'];
                            $fathers_name = $row['fathers_name'];
                            $mothers_name = $row['mothers_name'];
                            $spouse_name = $row['spouse_name'];
                            $religion = $row['religion'];
                            $language = $row['language'];
                            $occupation = $row['occupation'];
                            $family_occupation = $row['family_occupation'];
                            $family_earning = $row['family_earning'];
                            $remarks = $row['remarks'];
                            $buddy_name = $row['buddy_name'];
                            $buddy_relation = $row['buddy_relation'];
                            $buddy_address = $row['buddy_address'];
                            $buddy_city = $row['buddy_city'];
                            $buddy_phone = $row['buddy_phone'];
                            $buddy1_name = $row['buddy1_name'];
                            $buddy1_relation = $row['buddy1_relation'];
                            $buddy1_address = $row['buddy1_address'];
                            $buddy1_city = $row['buddy1_city'];
                            $buddy1_phone = $row['buddy1_phone'];
                            $admit_name = $row['admit_name'];
                            $admit_relation = $row['admit_relation'];
                            $admit_address = $row['admit_address'];
                            // $admit_phone = $row['admit_phone'];
                            $admit_age = $row['admit_age'];
                            $admit_gender = $row['admit_gender'];



                        ?>
                        <!-- ***************************************** -->
                        <!-- ************************************************ -->
                        <div class="col mt-2">
                            <h5>PERSONAL DETAILS</h5>
                        </div>
                        <!-- <div class="row g-2 mt-2" style="max-width: 100%"> -->
                        <div class="row g-2 mt-4" style="max-width: 100%">
                            <div class="col-md-10">
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" name="reg_id"
                                                value="<?php echo $row['reg_id']; ?>" placeholder="Reg.id"
                                                maxlength="25" />
                                            <label for="reg_id">Reg.No:</label>
                                            <div class="invalid-feedback">Registration Number is required</div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="date" class="form-control" name="reg_date" id="reg_date"
                                                value="<?php echo $row['reg_date']; ?>" />
                                            <label for="reg_date">Date:</label>
                                            <div class="invalid-feedback">Please fill date..</div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <select required aria-required="true" class="form-select mb-2" id="reg_type"
                                                name="reg_type" value="<?php echo $row['reg_type']; ?>">
                                                <option><?php echo $row['reg_type']; ?></option>
                                                <option>IPD</option>
                                                <option>OPD</option>
                                                <option>HC</option>
                                                <option>CMP</option>
                                            </select>
                                            <label for="reg_type">Patient Type:</label>
                                            <div class="invalid-feedback">patient type is required</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input autofocus type="text" class="form-control" name="name" id="name"
                                                value="<?php echo $row['name']; ?>" placeholder="Name" maxlength="75"
                                                required />
                                            <label for="name">Name: </label>
                                            <div class="invalid-feedback">Name is required</div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="age" id="age"
                                                value="<?php echo $row['age']; ?>" placeholder="Age/Sex" required
                                                pattern="^[1-9]\d*$" />
                                            <label for="age">Age:</label>
                                            <div class="invalid-feedback">Age is required</div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-floating">
                                            <select required aria-required="true" class="form-select mb-2" id="gender"
                                                name="gender">
                                                <option><?php echo $row['gender']; ?></option>
                                                <option>M</option>
                                                <option>F</option>
                                                <option>O</option>

                                            </select>
                                            <label for="gender">Gender:</label>
                                            <div class="invalid-feedback">Please gender is required</div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-floating">
                                            <select required aria-required="true" class="form-select mb-2" id="religion"
                                                name="religion">
                                                <option><?php echo $row['religion']; ?></option>
                                                <option>HINDU </option>
                                                <option>MUSLIM </option>
                                                <option>BUDDHIST </option>
                                                <option>CHRISITIAN </option>
                                                <option> SIKH </option>
                                                <option>OTHERS </option>

                                            </select>
                                            <label for="religion">Religion:</label>
                                            <div class="invalid-feedback">Religion is required</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-3">
                                    <div class="col-sm-4">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" name="aadhar" id="aadhar"
                                                value="<?php echo $row['aadhar']; ?>" placeholder="Aadhar"
                                                pattern="[0-9]{12}" required />
                                            <label for="aadhar">Aadhar No:</label>
                                            <div class="invalid-feedback">Aadhar Number is required</div>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-floating">
                                            <select required aria-required="true" class="form-select" id="language"
                                                name="language">
                                                <option><?php echo $row['language']; ?> </option>
                                                <option>ENGLISH </option>
                                                <option>HINDI </option>
                                                <option>MARATHI </option>
                                            </select>
                                            <label for="language">Language:</label>
                                            <div class="invalid-feedback">Please gender is required</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="ref_by" id="ref_by"
                                                value="<?php echo $row['ref_by']; ?>" placeholder="Reference By"
                                                maxlength="65" />
                                            <label for="ref_by">Reference BY:</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-2">
                                        <div class="form-floating">
                                            <!-- <input type="file" class="form-control" name="pic_filename"
                                                value="<?php echo $row['pic_filename']; ?>" id="pic_filename" required
                                                accept="image/*" onchange="previewImage(event)" /> -->


                                            <input type="file" name="pic_filename"
                                                value="<?php echo $row['pic_filename']; ?>" accept="image/*"
                                                onchange="previewImage(event)" />
                                            <!-- <label for="floatingInputGrid">Document:</label> -->
                                            <div class="invalid-feedback">only allows image jpg,png not pdf/word</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="card mx-auto" style="width: 11.5rem; height: 12rem">
                                    <img src="<?php echo $row['pic_filename']; ?>" style="width: 100%; height: 100%;"
                                        class="card-img-top" id='pic_show' alt="image" />
                                </div>
                            </div>
                        </div>

                        <!-- patient address deatails start  -->
                        <!-- LOCAL ADDRESSS START  -->
                        <div class="col mt-4">
                            <h5>LOCAL ADDRESS</h5>
                        </div>
                        <div class="mt-2">
                            <div class="row g-2">

                                <div class="col-md">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="local_address"
                                            placeholder="Please Fill your address" id="local_address"
                                            maxlength="500"> <?php echo $row['local_address']; ?></textarea>
                                        <label for="local_address">Local Address:</label>
                                        <div class="invalid-feedback">It is mandatory field</div>
                                    </div>
                                </div>
                                <div class="col-md">
                                    <div class="form-floating">
                                        <input class="form-control" name="local_city" id="local_city"
                                            value="<?php echo $row['local_city']; ?>"
                                            placeholder="Please Fill your address" maxlength="45" required />
                                        <label for="local_city">City:</label>
                                        <div class="invalid-feedback">It is mandatory field</div>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-3 mt-1">

                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="local_landmark"
                                            value="<?php echo $row['local_landmark']; ?>" id="local_landmark"
                                            placeholder="Please Fill your address"
                                            maxlength="65"><?php echo $row['local_landmark']; ?></textarea>
                                        <label for="local_landmark">Landmarks:</label>
                                        <div class="invalid-feedback">It is mandatory field</div>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" name="local_phone1"
                                            pattern="[0-9]{10}" value="<?php echo $row['local_phone1']; ?>"
                                            id="local_phone1" placeholder="Ph 1:" />
                                        <label for="local_phone1">Ph 1:</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-floating">
                                        <input type="number" class="form-control" name="local_phone2"
                                            pattern="[0-9]{10}" value="<?php echo $row['local_phone2']; ?>"
                                            id="local_phone2" placeholder="Ph 1:" />
                                        <label for="local_phone2">Ph 2:</label>
                                    </div>
                                </div>
                            </div>

                            <!-- LOCAL ADDRESS END  -->
                            <div class="col-12 mt-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="filladdress"
                                        onchange="fillAddress()" id="gridCheck" />
                                    <label class="form-check-label" for="gridCheck"> Local address same as permanent
                                        address. </label>
                                </div>
                            </div>

                            <!-- PERMANENT ADDRESS START  -->

                            <div class="col mt-4">
                                <h5>PERMANENT ADDRESS</h5>
                            </div>
                            <div>
                                <div class="row g-2 mt-2">
                                    <div class="col-md">
                                        <div class="form-floating">
                                            <textarea class="form-control" name="permanent_address"
                                                placeholder="Please Fill your address" id="permanent_address"
                                                maxlength="500"> <?php echo $row['permanent_address']; ?></textarea>
                                            <label for="permanent_address">Permanent Address:</label>
                                        </div>
                                    </div>

                                    <div class="col-md">
                                        <div class="form-floating">
                                            <input class="form-control" name="permanent_city" id="permanent_city"
                                                value="<?php echo $row['permanent_city']; ?>"
                                                placeholder="Please Fill your address" maxlength="45" />
                                            <label for="permanent_city">City:</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3 mt-1">
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <textarea class="form-control" name="permanent_landmark"
                                                value="<?php echo $row['permanent_landmark']; ?>"
                                                id="permanent_landmark" placeholder="Please Fill your address"
                                                maxlength="65"><?php echo $row['permanent_landmark']; ?></textarea>
                                            <label for="permanent_landmark">Landmarks:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" name="permanent_phone1"
                                                pattern="[0-9]{10}" value="<?php echo $row['permanent_phone1']; ?>"
                                                id="permanent_phone1" placeholder="Ph 1:" />
                                            <label for="permanent_phone1">Ph 1:</label>
                                        </div>
                                    </div>

                                    <!-- <div class="row g-2 mt-2"> -->
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" name="permanent_phone2"
                                                pattern="[0-9]{10}" value="<?php echo $row['permanent_phone2']; ?>"
                                                id="permanent_phone2" placeholder="Ph 2:" />
                                            <label for="permanent_phone2">Ph 2:</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- patient address deatails stop -->

                            <!-- family deatails and relatives deatails start -->
                            <div class="col mt-4"></div>

                            <div class="col mt-4">
                                <h5>FAMILY DETAILS</h5>
                            </div>

                            <div>
                                <div class="row g-2 mt-1">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="fathers_name"
                                                value="<?php echo $row['fathers_name']; ?>" id="fathers_name"
                                                placeholder="Father Name" maxlength="45" />
                                            <label for="fathers_name">Father Name: </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="mothers_name"
                                                value="<?php echo $row['mothers_name']; ?>" id="mothers_name"
                                                placeholder="Mother Name" maxlength="45" />
                                            <label for="mothers_name">Mother Name: </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-2 mt-2">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="spouse_name" id="spouse_name"
                                                value="<?php echo $row['spouse_name']; ?>" placeholder="Spouses Name"
                                                maxlength="45" />
                                            <label for="spouse_name">Spouse's Name: </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="occupation" id="occupation"
                                                value="<?php echo $row['occupation']; ?>" placeholder="Occupation"
                                                maxlength="45" />
                                            <label for="occupation">Occupation: </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-3 mt-1">
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" name="family_occupation"
                                                value="<?php echo $row['family_occupation']; ?>" id="family_occupation"
                                                placeholder="Father/Spouse's Occupation" maxlength="45" />
                                            <label for="family_occupation">Father/Spouse's Occupation: </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <input type="number" class="form-control" name="family_earning"
                                                value="<?php echo $row['family_earning']; ?>" id="family_earning"
                                                placeholder="Total Family Earning Month" />
                                            <label for="family_earning">Total Family Earning Month: </label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-floating">
                                            <textarea class="form-control" name="remarks" id="remarks"
                                                placeholder="Remarks"
                                                style="height: 58px"><?php echo $row['remarks']; ?></textarea>
                                            <label for="remarks">Remarks:</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col mt-4">
                            <h5>Details Of Closest Relatives / Friend(For Emergency)</h5>
                        </div>
                        <div>
                            <div class="row g-2 mt-2">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="buddy_name" id="buddy_name"
                                            value="<?php echo $row['buddy_name']; ?>" placeholder="Name:"
                                            maxlength="45" />
                                        <label for="buddy_name">Name: </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="buddy_relation"
                                            value="<?php echo $row['buddy_relation']; ?>" id="buddy_relation"
                                            placeholder="Relationship" maxlength="45" />
                                        <label for="buddy_relation">Relationship: </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-2 mt-2">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Address" id="buddy_address"
                                            name="buddy_address" maxlength="500"
                                            style="height: 127px"><?php echo $row['buddy_address']; ?></textarea>
                                        <label for="buddy_address">Address:</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="buddy_city" id="buddy_city"
                                            value="<?php echo $row['buddy_city']; ?>" placeholder="City"
                                            maxlength="45" />
                                        <label for="buddy_city">City: </label>
                                    </div>
                                    <div class="form-floating mt-2">
                                        <input type="text" class="form-control" placeholder="phone number"
                                            value="<?php echo $row['buddy_phone']; ?>" name="buddy_phone"
                                            id="buddy_phone" pattern="^[1-9]\d*$" />
                                        <label for="buddy_phone">Ph:</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-2 mt-2">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="buddy1_name" id="buddy1_name"
                                            value="<?php echo $row['buddy1_name']; ?>" placeholder="Name:"
                                            maxlength="45" />
                                        <label for="buddy1_name">Name: </label>
                                    </div>
                                    <div class="form-floating mt-2">
                                        <input type="text" class="form-control" name="buddy1_relation"
                                            value="<?php echo $row['buddy1_relation']; ?>" id="buddy1_relation"
                                            placeholder="Relationship" maxlength="45" />
                                        <label for="buddy1_relation">Relationship: </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Address" id="buddy1_address"
                                            name="buddy1_address" maxlength="500"
                                            style="height: 127px"><?php echo $row['buddy1_address']; ?></textarea>
                                        <label for="buddy1_address">Address:</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-2 mt-2">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="buddy1_city" id="buddy1_city"
                                            value="<?php echo $row['buddy1_city']; ?>" placeholder="City"
                                            maxlength="45" />
                                        <label for="buddy1_city">City: </label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" placeholder="phone number"
                                            value="<?php echo $row['buddy1_phone']; ?>" name="buddy1_phone"
                                            id="buddy1_phone" pattern="^[1-9]\d*$" />
                                        <label for="buddy1_phone">Ph:</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col mt-4">
                            <h5>Details Of Person Accompaying Patient At Time Of Admission</h5>
                        </div>

                        <!-- family deatails and relatives deatails stop -->

                        <!-- deatails of person accompying patient at the time of addmission start -->
                        <div class="row g-2 mt-2">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="admit_name" id="admit_name"
                                        value="<?php echo $row['admit_name']; ?>" placeholder="Name" maxlength="45"
                                        required />
                                    <label for="admit_name">Name: </label>
                                    <div class="invalid-feedback">It is mandatory to fill</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="admit_relation" id="admit_relation"
                                        value="<?php echo $row['admit_relation']; ?>"
                                        placeholder="Relationship With Patient" maxlength="45" required />
                                    <label for="admit_relation">Relationship With Patient:</label>
                                    <div class="invalid-feedback">It is mandatory to fill</div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-2 mt-1">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <textarea class="form-control" name="admit_address" id="admit_address"
                                        style="height: 127px" required><?php echo $row['admit_address']; ?></textarea>
                                    <label for="admit_address">Address: </label>
                                    <div class="invalid-feedback">It is mandatory to fill</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="admit_age" name="admit_age"
                                        value="<?php echo $row['admit_age']; ?>" placeholder="Age" maxlength="11"
                                        required />
                                    <label for="admit_age">Age:</label>
                                    <div class="invalid-feedback">It is mandatory to fill</div>
                                </div>
                                <div class="form-floating mt-2">
                                    <select required aria-required="true" class="form-select" id="admit_gender"
                                        name="admit_gender">
                                        <option><?php echo $row['admit_gender']; ?></option>
                                        <option>F</option>
                                        <option>O</option>
                                    </select>
                                    <label for="admit_gender">Gender:</label>
                                </div>
                            </div>
                        </div>

                        <!-- deatails of person accompying patient at the time of addmission end -->

                        <div class="col mt-5"></div>
                        <div class="d-grid gap-2 d-md-block text-center">
                            <input type="submit" name="update" value="Update" onclick="update()"
                                class="btn btn-primary" />

                        </div>
                    </form>
                    <?php
                        }

                ?>
                    <!-- form end -->
                </div>
            </div>
        </div>
        <div class="mt-4"></div>
    </div>

    <script>
    (function() {
        'use strict';

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation');

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms).forEach(function(form) {
            form.addEventListener(
                'submit',
                function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                },
                false
            );
        });
    })();

    // var fileName = document.getElementById("pic_filename");
    // var imgElem = document.getElementById("pic_show")
    // fileName.addEventListener("change", () => {
    //     previewImage("pic_filename", "pic_show")
    // });

    const previewImage = e => {
        const preview = document.getElementById('pic_show');
        preview.src = URL.createObjectURL(e.target.files[0]);
        preview.onload = () => URL.revokeObjectURL(preview.src);
    };



    function fillAddress() {
        const filladdress = document.getElementById('filladdress')
        if (filladdress.checked == true) {
            var l_add = document.getElementById('local_address').value;
            var l_city = document.getElementById('local_city').value;
            var l_land = document.getElementById('local_landmark').value;
            var l_ph1 = document.getElementById('local_phone1').value;
            var l_ph2 = document.getElementById('local_phone2').value;



            document.getElementById('permanent_address').value = l_add;
            document.getElementById('permanent_city').value = l_city;
            document.getElementById('permanent_landmark').value = l_land;
            document.getElementById('permanent_phone1').value = l_ph1;
            document.getElementById('permanent_phone2').value = l_ph2;
        }
    }

    function update() {

        window.alert('successfully update data please click on <br> okk button');
        window.location.href = 'data_table.php';
    }
    </script>



</body>

</html>