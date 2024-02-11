<?php
session_start();

Include('con_db.php');

if (isset($_POST['login-btn'])) {
  // Get the username and password from the POST request
  $username = $_POST['username'];
  $password = $_POST['password'];
  $sql = "SELECT * FROM sadmin_tb WHERE Email = '$username' AND Pass = '$password'";
  $result = mysqli_query($conn, $sql);

  // Check if the user exists
  if ($result && mysqli_num_rows($result) > 0) {

    // The user exists, so redirect them to the other PHP website
    $_SESSION["Username"] = $username ;
    $_SESSION["pass"] =   $password  ;
    Header ('Location:http://localhost/EcommerceAdminDashboad_main/Signup.php');
    exit();

  } 
  else {

    // The user does not exist, so display an error message
    echo '<script>alert("Invalid username or password.");</script>';
    // Need to change

  }

  }


  if (isset($_POST['B-btn'])) {
    Header ('Location: http://localhost/EcommerceAdminDashboad_main/Login.php');
    exit();

}
else{
    mysqli_close($conn);

}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Admin</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Optional CSS -->
    <link rel="stylesheet" href="css/login.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
</head>

<body>
    <div class="login-box">
    <form action="#" method="POST" class="asm-form active" id="frmSignIn" novalidate onsubmit="return validateForm(this)">
  
        <h1>WELCOME BACK</h1>

        <!-- Username Text Box -->
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <img src="images/username_icon.png" alt="Username Icon" width="20" height="20" />
                    </span>
                </div>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" />
            </div>
        </div>

        <!-- Password Text Box -->
        <div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <img src="images/password_icon.png" alt="Password Icon" width="20" height="20" />
                    </span>
                </div>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
            </div>
        </div>

        <!-- Login Button -->
        <div class="form-group border-bottom pb-3">
            <button type="submit" class="btn btn-light btn-block" id="login-btn" name="login-btn">Login</button>
        </div>
        <div class="form-group">
            <a href="signup.php">
                <button type="submit" class="btn btn-light btn-block" id="B-btn" name="B-btn">BACK</button>
            </a>
        </div>
    </div>
    </form>
    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
