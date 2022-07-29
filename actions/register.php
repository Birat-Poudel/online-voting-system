<?php
include("connect.php");

$fullname = $_POST['fullname'];
$username = $_POST['username'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$address = $_POST['address'];
$citizenshipno = $_POST['citizenshipno'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$photo = $_FILES['photo']['name'];
$tmp_name = $_FILES['photo']['tmp_name'];
$role = $_POST['role'];
$gender = $_POST['gender'];

if ($password != $cpassword){
    echo '<script>
    alert("Passwords didnot match");
    window.location = "../views/register.php";
    </script>';
}

else{
    move_uploaded_file($tmp_name,"../uploads/$photo");
    $sql="insert into `userinfo` (fullname, username, dateofbirth, email, phonenumber, address, 
    citizenshipnumber, password, cpassword, photo, role, gender, status, votes) 
    values('$fullname', '$username', '$dob', '$email', '$phonenumber', '$address', 
    '$citizenshipno', '$password', '$cpassword', '$photo', '$role','$gender',0,0)";

    $result = mysqli_query($con,$sql);

    if($result){
        echo '<script>
        alert("Registration Successful");
        window.location = "../";
        </script>';
    }
}
?>