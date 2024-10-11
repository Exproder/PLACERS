<?php
session_start();
include('alert.php');
if (isset($_GET['log']) && $_GET['log'] === 'yes') {
  unset($_SESSION["id"]);
  header("location:login.php");
} elseif (isset($_GET['log']) && $_GET['log'] === 'no') {
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>New Registration</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>
    body {
      background-image: url(../image/kjc2.jpg);
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      height: 100vh;
      margin: 0;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .login-box {
      max-width: 400px;
      padding: 50px;
      background-color: rgba(255, 255, 255, 0.9);
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .login-box h2 {
      margin-bottom: 20px;
      text-align: center;
    }

    .form-group label {
      margin-bottom: 5px;
    }

    .form-group .input-group {
      margin-bottom: 15px;
    }

    .input-group-prepend .input-group-text {
      display: flex;
      align-items: center;
    }

    .form-control {
      height: calc(2.25rem + 2px);
    }

    .input-group-text {
      height: calc(2.25rem + 2px);
      line-height: 1.5;
    }

    .btn-primary {
      width: 100%;
    }

    .error-message {
      text-align: center;
      color: red;
    }

    .register-link {
      text-align: center;
      margin-top: 10px;
      color: #333;
    }

    a {
      text-decoration: none;
    }
  </style>
</head>

<body>
  <div class="login-box">
    <h2 class="text-center">New Registration</h2>
    <hr>
    <form action="reg.php" method="post" id="login-form">
      <div class="form-group">
        <label for="username">Name</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
          </div>
          <input type="text" class="form-control" id="username" name="username" placeholder="Enter your name" required>
        </div>
      </div>
      <div class="form-group">
        <label for="email">Register No.</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-id-card"></i></span>
          </div>
          <input type="text" class="form-control" id="email" name="email" placeholder="Enter your Reg No." required>
        </div>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-key"></i></span>
          </div>
          <input type="password" class="form-control" id="password" name="password" placeholder="Enter your Password" required>
        </div>
      </div>
      <div class="form-group">
        <label for="cpassword">Confirm Password</label>
        <div class="input-group">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-lock"></i></span>
          </div>
          <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Re-Enter your password" required>
        </div>
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Register</button>
      <div class="error-message mt-3" id="error-message"></div>
      <div class="register-link mt-3">
        <p>Already Registered? <a href="login.php">Log in</a></p>
      </div>
    </form>
  </div>

  <script>
    const loginForm = document.getElementById("login-form");
    const errorMessage = document.getElementById("error-message");

    loginForm.addEventListener("submit", (event) => {
      const password = document.getElementById("password").value;
      const confirmPassword = document.getElementById("cpassword").value;

      if (password !== confirmPassword) {
        event.preventDefault();
        errorMessage.textContent = "Passwords do not match.";
      }
    });
  </script>
</body>

</html>
