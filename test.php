<?php
include('./inc/config.php');

$sql = "INSERT INTO test (head) VALUES (?)";
if($stmt = mysqli_prepare($link, $sql)){
   // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "s", $param_email);
    //Set parameters
    $param_email = 'done';
    //Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
        echo 1;
    }
}