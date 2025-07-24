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
     <div class="sidebar">
        <ul class="sidebar-menu">
            <li class="menu-item">
                <i class="bi bi-person-fill-gear"></i><a href="#"> จัดการพนักงานผู้ใช้ระบบ</a>
                <ul class="submenu">
                    <li><a href="#">เพิ่มพนักงานใหม่</a></li>
                    <li><a href="#">รายชื่อพนักงาน</a></li>
                    <li><a href="#">จัดการสิทธิ์การเข้าถึง</a></li>
                    <li><a href="#">ประวัติการเข้าสู่ระบบ (log)</a></li>
                </ul>
            </li>

            <li class="menu-item">
                <i class="bi bi-box-seam-fill"></i><a href="#"> จัดการประเภทสิทค้า</a>
            </li>

            <li class="menu-item">
                <i class="bi bi-person-video2"></i><a href="#"> จัดการแผนก</a>
                <ul class="submenu">
                    <li><a href="#">ลงรับสินค้า</a></li>
                    <li><a href="#">ตรวจสอบสถานะการจัดส่ง</a></li>
                    <li><a href="#">ประวัติการรับของ</a></li>
                </ul>
            </li>

            <li class="menu-item">
                <i class="bi bi-wallet-fill"></i><a href="#"> จัดการประเภทการจ่าย</a>
                <ul class="submenu">
                    <li><a href="#">เพิ่มผู้ขายใหม่</a></li>
                    <li><a href="#">จัดการข้อมูลผู้ขาย</a></li>
                    <li><a href="#">ดูประวัติการซื้อ</a></li>
                </ul>
            </li>

            <li class="menu-item">
                <i class="bi bi-people-fill"></i><a href="#"> ดูสมาชิก</a>
                <ul class="submenu">
                    <li><a href="#">สมาชิกทั้งหมด</a></li>
                    <li><a href="#">สมาชิกที่รออนุมัติ</a></li>
                    <li><a href="#">สมาชิกที่ถูกระงับ</a></li>
                    
                </ul>
            </li>
        </ul>
    </div>
</body>
</html>