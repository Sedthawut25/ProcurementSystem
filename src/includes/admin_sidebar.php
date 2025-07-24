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
    
    <title>Sidebar Menu</title>
</head>
<body>
     <div class="sidebar">
        <ul class="sidebar-menu">
            <li class="menu-item">
                <i class="bi bi-house-door"></i><a href="#"> คำขอร้องจัดซื้อ</a>
                <ul class="submenu">
                    <li><a href="#">สร้างคำขอร้องใหม่</a></li>
                    <li><a href="#">รายการคำร้องขอของฉัน</a></li>
                    <li><a href="#">ค้นหา/ติดตาม PR</a></li>
                </ul>
            </li>

            <li class="menu-item">
                <i class="bi bi-box-seam"></i><a href="#"> ใบสั่งซื้อ</a>
                <ul class="submenu">
                    <li><a href="#">สร้างใบสั่งซื้อ</a></li>
                    <li><a href="#">รายการ PO ทั้งหมด</a></li>
                    <li><a href="#">พิมพ์/ส่งอีเมลใบสั่งซื้อ</a></li>
                </ul>
            </li>

            <li class="menu-item">
                <i class="bi bi-tag"></i><a href="#"> การรับรอง/การจัดส่ง</a>
                <ul class="submenu">
                    <li><a href="#">ลงรับสินค้า</a></li>
                    <li><a href="#">ตรวจสอบสถานะการจัดส่ง</a></li>
                    <li><a href="#">ประวัติการรับของ</a></li>
                </ul>
            </li>

            <li class="menu-item">
                <i class="bi bi-cart-check"></i><a href="#"> ซัพพลายเออร์</a>
                <ul class="submenu">
                    <li><a href="#">เพิ่มผู้ขายใหม่</a></li>
                    <li><a href="#">จัดการข้อมูลผู้ขาย</a></li>
                    <li><a href="#">ดูประวัติการซื้อ</a></li>
                </ul>
            </li>

            <li class="menu-item">
                <i class="bi bi-gear"></i><a href="#"> การอนุมัติ</a>
                <ul class="submenu">
                    <li><a href="#">อนุมัติคำร้องขอ PR</a></li>
                    <li><a href="#">อนุมัติใบสั่งซื้อ PO</a></li>
                    <li><a href="#">ลำดับขั้นอนุมัติ (Workflow)</a></li>
                </ul>
            </li>

            <li class="menu-item">
                <i class="bi bi-motherboard"></i><a href="#"> รายงาน/Dashboard</a>
                <ul class="submenu">
                    <li><a href="#">สรุปรายเดือน/ปี</a></li>
                    <li><a href="#">รายงานงบประมาณ</a></li>
                    <li><a href="#">สินค้าหรือผู้ขายยอดนิยม</a></li>
                </ul>
            </li>
        </ul>
    </div>
</body>
</html>