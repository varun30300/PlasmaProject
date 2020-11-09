<?php

require_once 'db.php';

$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$age   = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$cured = $_POST['cured'];


function uploadform($conn,$fname, $lname, $age, $email, $phone, $address, $cured){
    $sql = "INSERT INTO donate_req (firstname, lastname, age, email, phone, address, cured) VALUES (?,?,?,?,?,?,?);";
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?error=InsertQueryError");
        exit();
    }

    mysqli_stmt_bind_param($stmt, 'sssssss', $fname, $lname, $age, $email, $phone, $address, $cured);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../index.php?error=None");
    exit();
}

uploadform($conn,$fname, $lname, $age, $email, $phone, $address, $cured);
?>