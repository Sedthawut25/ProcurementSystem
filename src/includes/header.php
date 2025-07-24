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

</head>
<body>
    <div class="index-box">
        <div class="top-bar">
            <div class="top-bar-left">
                <img src="../../assets/img/logo.png" alt="logo" class="logo-img"> <div class="search-bar">
                    <input type="text" placeholder="ค้นหาสินค้า โปรโมชั่น...">
                    <button><i class="fas fa-search"></i></button>
            </div>
        </div>

            <div class="header-right">
                <!-- ปุ่มรถเข็น -->
<div class="dropdown me-3">
  <button class="btn btn-outline-light position-relative" id="cartDropdown" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="bi bi-cart3"></i>
  </button>
  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="cartDropdown">
    <li class="dropdown-header text-muted">สินค้าที่เพิ่มเข้ามา</li>
    <li><hr class="dropdown-divider"></li>
    <li class="px-3">G&O โต๊ะสแตนเลส - ฿559</li>
    <li class="px-3">REX โต๊ะคอม - ฿599</li>
    <li><hr class="dropdown-divider"></li>
    <li class="text-end px-3"><a href="#" class="btn btn-sm btn-primary mt-1">ดูรถเข็นของฉัน</a></li>
  </ul>
</div>

<!-- ปุ่มผู้ใช้ -->
<div class="dropdown">
  <button class="btn btn-outline-light d-flex align-items-center gap-2" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
    <i class="bi bi-person-circle"></i> <span>USER</span>
  </button>
  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
    <li><a class="dropdown-item" href="#">บัญชีของฉัน</a></li>
    <li><a class="dropdown-item" href="#">การซื้อของฉัน</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item text-danger" href="../login/login.php">ออกจากระบบ</a></li>
  </ul>
</div>
        </div>
    </div>
    
</body>
</html>