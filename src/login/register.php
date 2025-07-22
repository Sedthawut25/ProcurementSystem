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
    
    <title>Sign Up</title>
</head>
<body class="body-login">  
  <div class="login-box">
  <div class="container mt-5 myapp-login">
    <div class="text-center mb-3">
      <h2>Sign Up</h2>
    </div>
    <form onsubmit="event.preventDefault(); showModal();">
      <div class="mb-3">
        <label for="username" class="form-label">USERNAME</label>
        <input type="username" class="form-control" id="username" name="username" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">EMAIL</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">PASSWORD</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <div class="text-center">
        <p>Already have an account?? <a href="login.php" class="link-info">Login</a></p>
      </div>
      <div class="text-center mb-3">
        <button type="submit" class="btn btn-primary">Sign Up</button>
      </div>
    </form>

<!-- ✅ วาง Modal ตรงนี้ -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header bg-success text-white">
            <h5 class="modal-title" id="successModalLabel">สมัครสำเร็จ</h5>
        </div>
        <div class="modal-body">
            ขอบคุณที่สมัครสมาชิก!
        </div>
        <div class="modal-footer">
            <a href="login.php" class="btn btn-primary">ไปหน้าเข้าสู่ระบบ</a>
        </div>
        </div>
    </div>
    </div>

  </div>
  </div>
</body>
</html> 