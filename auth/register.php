<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body class="login-bg d-flex justify-content-center align-items-center vh-100">

  <div class="login-box shadow-lg rounded-4 p-5">
    <h2 class="text-center mb-4">Create Account</h2>
    <form action="proses_register.php" method="POST">
      

      <div class="form-group mb-3 position-relative">
        <label for="username" class="form-label">Username</label>
        <i class="bi bi-person-lines-fill input-icon"></i>
        <input type="text" name="username" class="form-control input-with-icon" id="username" placeholder="Choose a username" required />
      </div>


      <div class="form-group mb-3 position-relative">
        <label for="password" class="form-label">Password</label>
        <i class="bi bi-lock-fill input-icon"></i>
        <input type="password" name="password" class="form-control input-with-icon" id="password" placeholder="Create a password" required />
      </div>
      <div class="form-group mb-3 position-relative">
        <label for="password2" class="form-label">Confirm Password</label>
        <i class="bi bi-lock-fill input-icon"></i>
        <input type="password" name="confirm" class="form-control input-with-icon" id="password2" placeholder="Ulangi password" required />
      </div>


      <button type="submit" class="btn btn-success w-100 py-2" name="register">Register</button>
    </form>
    <a href="login.php" class="d-block text-center mt-3">Already have an account? Login here</a>
  </div>

</body>
</html>
