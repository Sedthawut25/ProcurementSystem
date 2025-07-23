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
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="../assets/js/main.js" defer></script>
</head>
<body>
    <!-- แถบเมนูบน -->
    <div class="top-nav-bar">
        <div class="top-nav-left">
            <a href="#">Seller Centre</a>
            <a href="#">เปิดร้านค้า</a>
            <a href="#">ติดตามเรา</a>
        </div>

        
        <div class="top-nav-right">
            <a href="#"><i class="bi bi-bell"></i> การแจ้งเตือน</a>
            <a href="#"><i class="bi bi-question-circle"></i> ช่วยเหลือ</a>
            <a href="#">ธีม</a>
            

            <div class="dropdown-container" id="user-container">
                <i class="bi bi-person-circle"></i><span> USER</span>
                <div class="dropdown-menu" id="user-dropdown">
                    <a href="#">บัญชีของฉัน</a>
                    <a href="#">การซื้อของฉัน</a>
                    <a href="#">ออกจากระบบ</a>
                </div>
            </div>
        </div>
    </div>

    <!-- แถบค้นหา + ตะกร้า + โลโก้ -->
    <div class="top-bar">
        <div class="top-bar-left">
            <img src="../../assets/img/logo.png" alt="logo" class="logo-img">

            <div class="search-bar">
                <input type="text" placeholder="ค้นหาสินค้า โปรโมชั่น...">
                <button><i class="fas fa-search"></i></button>
            </div>

            <div class="dropdown-container" id="cart-container">
                <i class="bi bi-cart3 cart-icon-white"></i>
                <div class="dropdown-menu" id="cart-dropdown">
                    <p style="padding: 0 15px; color: #888; font-size:14px;">สินค้าที่เพิ่มเข้ามา</p>
                    <div class="cart-item">
                        <img src="https://down-th.img.susercontent.com/file/th-11134207-7r98o-lqg79g5v01yae7_tn" alt="item">
                        <div class="cart-item-info">G&O โต๊ะสแตนเลส...</div>
                        <div class="cart-item-price">฿559</div>
                    </div>
                    <div class="cart-footer">
                        <button>ดูรถเข็นของฉัน</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>


</html>
