<?php
session_start();
$data = $_SESSION['data'];

if($_SESSION['status']==1){
  $status = 'Voted';
}
else{
  $status = 'Not Voted';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="icon"
      href="../assets/images/nepal_flag.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="../assets/stylesheets/profile.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <title>Online Voting System</title>
  </head>
<body>

  <div class="wrapper">
    <p class="profile__title">User Profile</p>
    <div class="profile__container">
      <div class="left__side">
        <div class="profile__image">
          <img src="../uploads/<?php echo $data['photo'] ?>" alt="person's profile" />
        </div>
        <div class="profile__name">
          <p><?php echo $data['fullname'] ?></p>
          <p><?php echo $status ?></p>
        </div>
      </div>
      <div class="right__side">
        <div class="profile__details">
          <div class="pd__container">
            <p class="pd__label">Username:</p>
            <p class="pd__info"><?php echo $data['username'] ?></p>
          </div>
          <div class="pd__container">
            <p class="pd__label">Email:</p>
            <p class="pd__info"><?php echo $data['email'] ?></p>
          </div>
          <div class="pd__container">
            <p class="pd__label">Date of Birth:</p>
            <p class="pd__info"><?php echo $data['dateofbirth'] ?></p>
          </div>
          <div class="pd__container">
            <p class="pd__label">Phone Number:</p>
            <p class="pd__info"><?php echo $data['phonenumber'] ?></p>
          </div>
          <div class="pd__container">
            <p class="pd__label">Address:</p>
            <p class="pd__info"><?php echo $data['address'] ?></p>
          </div>
          <div class="pd__container">
            <p class="pd__label">Gender:</p>
            <p class="pd__info"><?php echo $data['gender'] ?></p>
          </div>
          <div class="pd__container">
            <p class="pd__label">Citizenship No. :</p>
            <p class="pd__info"><?php echo $data['citizenshipnumber'] ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
    
</body>
</html>