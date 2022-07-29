<?php
session_start();
include("connect.php");

$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];

$sql = "select * from `userinfo` where username = '$username' and password = '$password' 
and role = '$role'";

$result = mysqli_query($con, $sql);

if(mysqli_num_rows($result) > 0){
    $sql = "Select username,photo,votes,id from `userinfo` where role='candidate'";
    $resultcandidate = mysqli_query($con,$sql);
    if(mysqli_num_rows($resultcandidate)>0){
        $candidates = mysqli_fetch_all($resultcandidate, MYSQLI_ASSOC);
        $_SESSION['candidates'] = $candidates;
    }
    $data = mysqli_fetch_array($result);
    $_SESSION['id'] = $data['id'];
    $_SESSION['status'] = $data['status'];
    $_SESSION['data'] = $data;

    echo "<script>
    window.location = '../views/voting.php';
    </script>";

}

else{
    echo "<script>
    alert('Invalid Credentials');
    window.location = '../';
    </script>";
}

?>