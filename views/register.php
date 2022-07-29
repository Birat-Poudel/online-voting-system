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
    <title>Register</title>
    <link
      rel="stylesheet"
      type="text/css"
      href="../assets/stylesheets/register.css"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
  </head>

  <body>
    <div class="container">
      <div class="title">Voters Registration</div>
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details"> Full Name </span>
            <input type="text" placeholder="Enter your name" required />
          </div>

          <div class="input-box">
            <span class="details"> Date Of Birth </span>
            <input type="text" placeholder="eg:2056-12-12" required />
          </div>
          <div class="input-box">
            <span class="details"> Email </span>
            <input type="text" placeholder="www.example@email.com" required />
          </div>
          <div class="input-box">
            <span class="details"> Phone Number </span>
            <input type="text" placeholder="Enter phone number" required />
          </div>
          <div class="input-box">
            <span class="details"> Address </span>
            <input type="text" placeholder="Address" required />
          </div>
          <div class="input-box">
            <span class="details"> Citizenship Number </span>
            <input type="text" placeholder="##-##-##-#####" required />
          </div>
        </div>
      </form>

      <div class="genderInformation">
        <span class="gender-title">Gender</span>

        <div class="catogery">
          <label style="cursor: pointer;" for="dot-1">
            <input type="radio" name="gender" id="dot-1"/>
            <span  class="gender">Male</span>
          </label>

          <label style="cursor: pointer;" for="dot-2">
            <input type="radio" name="gender" id="dot-2"/>
            <span class="gender">Female</span>
          </label>

          <label style="cursor: pointer;" for="dot-3">
            <input type="radio" name="gender" id="dot-3"/>
            <span class="gender">Prefer Not to say</span>
          </label>
        </div>
      </div>

      <div class="button">
        <input type="submit" value="Register" />
      </div>
    </div>
  </body>
</html>
