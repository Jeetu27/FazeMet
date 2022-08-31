<?php
session_start();
include('../dbcon.php');

if (isset($_POST['update_Data'])) {

    $key = $_POST['key'];
    $Student_ID = $_POST['st_Id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $course = $_POST['course'];
    $college = $_POST['college'];
    $gname = $_POST['gname'];
    $gMobile = $_POST['gMobile'];


    $updateData = [
        'Student ID' => $Student_ID,
        'First Name' => $fname,
        'Last Name' => $lname,
        'Date of Birth' => $dob,
        'Mobile No' => $mobile,
        'Email' => $email,
        'Gender' => $gender,
        'Address' => $address,
        'Course' => $course,
        'College' => $college,
        'Gaurdian Name' => $gname,
        'Gaurdian Mobile no' => $gMobile,
        'Status' => 'Active',
    ];

    $ref_table = 'Students/'.$key;
    $updatequery_result = $database->getReference($ref_table)->update($updateData);

    if ($updatequery_result) {
        $_SESSION['status'] = "Data Updated Successfully";
        header("Location: Update_Students.php");
    }
    else {
        $_SESSION['status'] = "Data Not Updated";
        header("Location: Update_Students.php");
    }

}

if (isset($_POST['reset'])){

    header("refresh:0");

}
?>