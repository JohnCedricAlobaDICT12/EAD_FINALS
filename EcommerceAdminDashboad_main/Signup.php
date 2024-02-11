<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign Up Account</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Optional CSS -->
    <link rel="stylesheet" href="css/signup.css"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
</head>

<body class="d-flex justify-content-center">
    <div class="signup-box" style="margin-top: 100px;">
        <form class="needs-validation" novalidate method="POST" action="signup.php">
            <div class="col-12">    
                <div class="form-row">
                    <!-- Box Title -->
                    <div class="col-12 mb-3 d-flex justify-content-center">
                        <h2>Sign Up</h2>
                    </div>

                    <!-- Username and Password -->
                    <div class="col-12 mb-3">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Username" name="username" required />
                        <div class="invalid-feedback">Provide a Username.</div>
                    </div>
                    <div class="col-12 mb-4">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password" required />
                        <div class="invalid-feedback">Provide a Password.</div>
                    </div>

                    <!-- Dropdown for User Role -->
                    <div class="col-12 mb-3">
                        <label>User Role</label>
                        <select class="form-control" name="role" required>
                            <option value="">Select Role</option>
                            <option value="admin_tb">Admin</option>
                            <option value="manager_tb">Manager</option>
                        </select>
                        <div class="invalid-feedback">Select a User Role.</div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-success mb-3 col-12" name="register-btn">
                        Register
                    </button>
                    <button type="submit" class="btn btn-primary col-12" name="Home-btn">
                        Home
                    </button>
                </div>
            </div>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Optional Javascripts -->
    <script src="/javascripts/sript.js"></script>
</body>

</html>

<?php
include('con_db.php');

if (isset($_POST['register-btn'])) {
    // Get the values from the form
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Check if the username already exists
    $check_query = "SELECT * FROM $role WHERE Email = '$username'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        // Username already exists
        echo "<script>alert('Error: Username already exists.');</script>";
    } else {
        // Insert the user into the appropriate table based on the selected role
        $insert_query = "INSERT INTO $role (Email, pass) VALUES ('$username', '$password')";
        $insert_result = mysqli_query($conn, $insert_query);

        if ($insert_result) {
            echo "<script>alert('User added successfully!');</script>";
        } else {
            echo "<script>alert('Error adding user: " . mysqli_error($conn) . "');</script>";
        }
    }
}
if (isset($_POST['Home-btn'])) {
    Header ('Location:http://localhost/EcommerceAdminDashboad_main/ProductManagement.php');
    exit();

}
else{
    mysqli_close($conn);

}
?>
