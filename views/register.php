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

      <form action="../actions/register.php" method="POST" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details"> Full Name </span>
            <input type="text" placeholder="Enter your name" name="fullname" required />
          </div>

          <div class="input-box">
            <span class="details"> Username </span>
            <input type="text" placeholder="Enter your name" name="username" required />
          </div>

          <div class="input-box">
            <span class="details"> Date Of Birth </span>
            <input type="text" placeholder="eg:2056-12-12" name="dob" required />
          </div>

          <div class="input-box">
            <span class="details"> Email </span>
            <input type="text" placeholder="www.example@email.com" name="email" required />
          </div>

          <div class="input-box">
            <span class="details"> Phone Number </span>
            <input type="text" placeholder="Enter phone number" name="phonenumber" required />
          </div>

          <div class="input-box">
            <span class="details"> Address </span>
            <input type="text" placeholder="Address" name="address" required />
          </div>

          <div class="input-box">
            <span class="details"> Citizenship Number </span>
            <input type="text" placeholder="##-##-##-#####" name="citizenshipno" required />
          </div>

          <div class="input-box">
            <span class="details"> Password </span>
            <input
              type="password"
              placeholder="Password"
              name="password"
              required
            />
          </div>

          <div class="input-box">
            <span class="details"> Confirm Password </span>
            <input
              type="password"
              placeholder="Confirm Password"
              name="cpassword"
              required
            />
          </div>
        </div>

        <div>
          <span style="font-weight: bold" class="details"> Upload Photo </span>
          <input class="image__file" type="file" name="photo" required />

          <select style="display: block; margin: 1.5rem 0" name="role">
            <option value="candidate">Candidate</option>
            <option value="voter">Voter</option>
          </select>

          <span style="font-weight: bold" class="details"> Gender </span>
          <select style="display: block; margin: 1.5rem 0" name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="extra">Prefer Not to say</option>
          </select>
        </div>

        <!-- <div class="genderInformation">
          <span class="gender-title">Gender</span>

          <div class="catogery">
            <label style="cursor: pointer" for="dot-1">
              <input type="radio" name="gender" id="dot-1" />
              <span class="gender">Male</span>
            </label>

            <label style="cursor: pointer" for="dot-2">
              <input type="radio" name="gender" id="dot-2" />
              <span class="gender">Female</span>
            </label>

            <label style="cursor: pointer" for="dot-3">
              <input type="radio" name="gender" id="dot-3" />
              <span class="gender">Prefer Not to say</span>
            </label>
          </div>
        </div> -->

        <div class="button">
          <input type="submit" value="Register" />
        </div>
      </form>
    </div>
  </body>
</html>
