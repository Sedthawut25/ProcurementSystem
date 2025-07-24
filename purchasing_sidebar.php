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
                <i class="bi bi-basket2"></i><a href="#"> จัดการสินค้า</a>
                <ul class="submenu">
                    <li><a href="#">สร้างคำขอร้องใหม่</a></li>
                    <li><a href="#">รายการคำร้องขอของฉัน</a></li>
                    <li><a href="#">ค้นหา/ติดตาม PR</a></li>
                </ul>
            </li>

            <li class="menu-item">
                <i class="bi bi-card-text"></i><a href="#"> ดูใบขอซื้อเปิดประกาศ</a>
                <ul class="submenu">
                    <li><a href="#">สร้างใบสั่งซื้อ</a></li>
                    <li><a href="#">รายการ PO ทั้งหมด</a></li>
                    <li><a href="#">พิมพ์/ส่งอีเมลใบสั่งซื้อ</a></li>
                </ul>
            </li>

            <li class="menu-item">
                <i class="bi bi-tag"></i><a href="#"> ดูและเปรียบเทียบใบเสนอราคา</a>
                <ul class="submenu">
                    <li><a href="#">ลงรับสินค้า</a></li>
                    <li><a href="#">ตรวจสอบสถานะการจัดส่ง</a></li>
                    <li><a href="#">ประวัติการรับของ</a></li>
                </ul>
            </li>

            <li class="menu-item">
                <i class="bi bi-clipboard2-check"></i><a href="#"> ใบสั่งซื้อ</a>
                <ul class="submenu">
                    <li><a href="#">เพิ่มผู้ขายใหม่</a></li>
                    <li><a href="#">จัดการข้อมูลผู้ขาย</a></li>
                    <li><a href="#">ดูประวัติการซื้อ</a></li>
                </ul>
            </li>

            <li class="menu-item">
                <i class="bi bi-bar-chart-line"></i><a href="#"> รายงานภาษีซื้อ</a>
                <ul class="submenu">
                    <li><a href="#">อนุมัติคำร้องขอ PR</a></li>
                    <li><a href="#">อนุมัติใบสั่งซื้อ PO</a></li>
                    <li><a href="#">ลำดับขั้นอนุมัติ (Workflow)</a></li>
                </ul>
            </li>
        </ul>
    </div>
</body>
</html>