<?php
include("connection.php");
if(isset($_POST["email"]) && isset($_POST["password"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
 $sql = "select * from `register` where email = '$email' && password = '$password'";
 $result = mysqli_query($conn, $sql);
 $row = mysqli_fetch_assoc($result);
 session_start();
 if(mysqli_num_rows($result) > 0){
    $_SESSION["login"] = "login";
    header("location: login.php");
 }
 else{
    $_SESSION["error"] = "error";
   header("location: login.php");
 }
}
?>