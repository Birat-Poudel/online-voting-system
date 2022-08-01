<?php
session_start();
$data = $_SESSION['data'];

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
    <link rel="stylesheet" href="../assets/stylesheets/voting.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <title>Online Voting System</title>
  </head>
<body>
    <h1 class="voting__header">Voting Center</h1>
    <div class="container">
      <button>Polling Information</button>
      <a href="../views/profile.php"><button>User Profile</button></a>
      <a href="../actions/logout.php"><button>Logout</button></a>
    </div>

    <div class="voting">
      <div>
          <p class="voting__type">Mayor</p>
      </div>
      <div class="voting__body">
        <div class="candidate__image"><img src="../uploads/BiratPoudel_Communication_CommManager.JPG" alt="candidate profile" /></div>
        <div class="candidate__details">
          <h2>Birat Poudel</h2>
          <p>CPN UML</p>
        </div>
        <div class="voting__btn"><button>Vote</button></div>
      </div>
    </div>

    <div class="voting1">
      <div>
          <p class="voting__type">Deputy Mayor</p>
      </div>
      <div class="voting__body">
        <div class="candidate__image"><img src="../uploads/BiratPoudel_Communication_CommManager.JPG" alt="candidate profile" /></div>
        <div class="candidate__details">
          <h2>Birat Poudel</h2>
          <p>CPN UML</p>
        </div>
        <div class="voting__btn"><button>Vote</button></div>
      </div>
    </div>
    
</body>
</html>