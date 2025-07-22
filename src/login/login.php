<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include_once('../includes/bootstrap.php');
    loadBootstrapCSS();
    loadBootstrapJS();
    ?>   
    
    <title>Document</title>
</head>
<body class="body-login">  
  <div class="login-box">
  <div class="container mt-5 myapp-login">
    <div class="text-center mb-3">
      <h2>Login</h2>
    </div>
    <form method="post" action="check_login.php">
      <div class="mb-3">
        <label for="username" class="form-label">USERNAME</label>
        <input type="username" class="form-control" id="username" name="username" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">PASSWORD</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <div class="text-end mb-3">
        <a href="forgot_password.php" style="color: white;">Forgot password</a><br>
      </div>
      <div class="text-center mb-3">
        <a href="../main/index.php" class="btn btn-primary">Login</a>
      </div>
      <div class="text-center">
        <p>Don't have an account? <a href="register.php" class="link-info">Register here</a></p>
      </div>
    </form>
  </div>
  </div>
</body>
</html> 