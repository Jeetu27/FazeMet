<?php
session_start();
include('../dbcon.php');

if (isset($_POST['save_Data'])) {
    
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


    $postData = [
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
    
    $ref_table= "Students";
    $postRef = $database->getReference($ref_table)->push($postData);

    if ($postRef) {
        $_SESSION['status'] = "Data Inserted Successfully";
        header("Location: Add New Student.php");
    }
    else {
        $_SESSION['status'] = "Data Not Inserted";
        header("Location: Add New Student.php");
    }

}


?>