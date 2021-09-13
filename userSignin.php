<?php
include('./inc/config.php');
include('./inc/header.php');
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users where username = '$username' and password = '$password'";
$result = $link->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $_SESSION['user_id']$row['id'];
        $_SESSION['username']$row['username'];
        header('Location: https://localhost/workshop-august/index.php');
    }
} else {
    echo 'Wrong Username/Password Try Again.';

$sql = "INSERT INTO users (email, username, password) VALUES (?,?,?)";
if($stmt = mysqli_prepare($link, $sql)){
   // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "sss", $param_email, $param_username, $param_password);
    //Set parameters
    $param_email = $email;
    $param_username = $username;
    $param_password = $password;
    //Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
        echo 'User Created <a href="./signin.php">Click Here To Login</a>';
    }
}
?>