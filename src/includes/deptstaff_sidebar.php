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
                <i class="bi bi-person-fill-gear"></i><a href="#"> จัดการขอซื้อสินค้า</a>
                <ul class="submenu">
                    <li><a href="#">สร้างคำขอร้องใหม่</a></li>
                    <li><a href="#">รายการคำร้องขอของฉัน</a></li>
                    <li><a href="#">ค้นหา/ติดตาม PR</a></li>
                </ul>
            </li>

            <li class="menu-item">
                <i class="bi bi-box-seam-fill"></i><a href="#"> รายการสินค้าที่ต่ำกว่าคงคลังขั้นต่ำ</a>
                <ul class="submenu">
                    <li><a href="#">สร้างใบสั่งซื้อ</a></li>
                    <li><a href="#">รายการ PO ทั้งหมด</a></li>
                    <li><a href="#">พิมพ์/ส่งอีเมลใบสั่งซื้อ</a></li>
                </ul>
            </li>

        </ul>
    </div>
</body>
</html>