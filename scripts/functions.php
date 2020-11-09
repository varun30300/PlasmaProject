<?php

    require_once 'db.php';

    if(isset($_POST['delete'])){
        $id = $_POST['sasta'];
        deleterecord($conn,$id);
    }

    if(isset($_POST['process'])){
        $id = $_POST['sasta'];
        processrecord($conn,$id);
    }

    function deleterecord($conn, $id){
        $sql = "DELETE from donate_req where id = $id";

        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../index.php?error=ActiveDeletionQueryError");
            exit();
        }

        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../index.php");
        exit();
    } 

    function processrecord($conn, $id){
        $sql = "UPDATE donate_req SET status = 2 where id = $id";

        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../index.php?error=ActiveProcessQueryError");
            exit();
        }

        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../index.php");
        exit();
    }

    function finishprocess(){

    }

?>