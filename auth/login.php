<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body class="login-bg d-flex justify-content-center align-items-center vh-100">

  <div class="login-box shadow-lg rounded-4 p-5">
    <h2 class="text-center mb-4">Sign-in</h2>
    <form action="proses_login.php" method="POST">
      <div class="form-group mb-3 position-relative">
        <label for="username" class="form-label">Username</label>
        <i class="bi bi-person-fill input-icon"></i>
        <input type="text" name="username" class="form-control input-with-icon" id="username" placeholder="Enter username" required />
      </div>
      <div class="form-group mb-4 position-relative">
        <label for="password" class="form-label">Password</label>
        <i class="bi bi-lock-fill input-icon"></i>
        <input type="password" name="password" class="form-control input-with-icon" id="password" placeholder="Enter password" required />
      </div>
      <button type="submit" class="btn btn-primary w-100 py-2" name="login">Login</button>
    </form> 
    <a href="register.php" class="d-block text-center mt-3">Don't have an account? Register here</a>
  </div>

</body>
</html>
