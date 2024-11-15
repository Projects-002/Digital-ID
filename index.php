
<?php

include('database/db.php');

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $pass = $_POST['password'];

    // Get the user with the provided email/username
    $sql = "SELECT * FROM users WHERE Email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 's', $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    
    if($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        
        // Verify the password
        if($pass == $user['Pass']) {
            session_start();
            $_SESSION['user'] = $username;

            // Redirect based on user role
            if($user['U_Role'] == 'user') {
                header('location: dashboard.php?uid='.$user['SN']);
            } else {
                header('location: Admin/index.php?uid='.$user['SN']);
            }
            exit();
        } else {
            echo '
            <div class="alert alert-danger container mt-5 w-50" role="alert">
                Incorrect Password. Please try again!
            </div>';
        }
    } else {
        echo '
        <div class="alert alert-danger container mt-5 w-50" role="alert">
            Username not found. Please try again!
        </div>';
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>

    <!-- Login 2 - Bootstrap Brain Component -->
<div class="bg-light py-3 py-md-5">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-12 col-md-11 col-lg-8 col-xl-7 col-xxl-6">
          <div class="bg-white p-4 p-md-5 rounded shadow-sm">
            <div class="row">
              <div class="col-12">
                <div class="mb-5">
                  <h3>Log in</h3>
                </div>
              </div>
            </div>
            <form action="index.php" method="POST">
              <div class="row gy-3 gy-md-4 overflow-hidden">
                <div class="col-12">
                  <label for="email" class="form-label">Username <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="username" id="email" placeholder="Enter  your username" required>
                </div>
                <div class="col-12">
                  <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
                  <input type="password" class="form-control" name="password" id="password" value="" placeholder="Enter password" required>
                </div>
                <div class="col-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" name="remember_me" id="remember_me">
                    <label class="form-check-label text-secondary" for="remember_me">
                      Keep me logged in
                    </label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="d-grid">
                    <button class="btn btn-lg btn-primary" name="submit" type="submit">Log in now</button>
                  </div>
                </div>
              </div>
            </form>
            <div class="row">
              <div class="col-12">
                <hr class="mt-5 mb-4 border-secondary-subtle">
                <div class="d-flex gap-2 gap-md-4 flex-column flex-md-row justify-content-md-end">
                  <a href="register.php" class="link-secondary text-decoration-none">Create new account</a>
                  <a href="#!" class="link-secondary text-decoration-none">Forgot password</a>
                </div>
              </div>
            </div>
            <div class="row">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    
</body>
</html>