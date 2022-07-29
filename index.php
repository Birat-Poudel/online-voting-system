<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="icon"
      href="./assets/images/nepal_flag.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="./assets/stylesheets/index.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <title>Online Voting System</title>
  </head>
  <body>
    <div class="header__wrapper">
      <img
        class="wavingflag"
        src="./assets/images/WavingFlag.gif"
        alt="Nepal's Waving Flag"
      />
      <h1>Online Voting System</h1>
    </div>
    <div class="login__container">
      <h2>Login</h2>
      <div class="login__info">
        <form action="">
          <div class="login__details">
            <div class="username">
              <input
                type="text"
                name="username"
                placeholder="Username"
                required="required"
              />
            </div>
            <div class="password">
              <input
                type="password"
                name="password"
                placeholder="Password"
                required="required"
              />
            </div>
            <div class="role">
              <select name="role">
                <option value="candidate">Candidate</option>
                <option value="voter">Voter</option>
              </select>
            </div>
            <div class="submit-wrapper">
              <button class="submit" type="submit">Login</button>
            </div>
            <div class="register">
              <p>Don't have an account?</p>
              <button class="registerb"><a href="./views/register.php">Register</a></button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
