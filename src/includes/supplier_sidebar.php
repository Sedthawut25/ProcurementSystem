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
                <i class="bi bi-person-fill-add"></i><a href="#"> สมัครสมาชิก</a>
                
            </li>

            <li class="menu-item">
                <i class="bi bi-cart-dash-fill"></i><a href="#"> ดูรายการขอซื้อ</a>
                <ul class="submenu">
                    <li><a href="#">รายการขอซื้อรออนุมัติ (Pending Approval)</a></li>
                    <li><a href="#">รายการขอซื้อที่อนุมัติแล้ว (Approved)</a></li>
                    <li><a href="#">รายการขอซื้อที่ถูกปฏิเสธ (Rejected)</a></li>
                    <li><a href="#">สร้างรายการขอซื้อใหม่ (Create New Requisition)</a></li>
                </ul>
            </li>

            <li class="menu-item">
                <i class="bi bi-file-earmark-bar-graph-fill"></i><a href="#"> จัดการเสนอราคา</a>
                <ul class="submenu">
                    <li><a href="#">ดูรายการเสนอราคาที่ส่งมา (Received Quotations)</a></li>
                    <li><a href="#">สร้างใบเสนอราคาใหม่ (Create Quotation)</a></li>
                    <li><a href="#">รายการเสนอราคาที่อนุมัติ (Approved Quotations)</a></li>
                    <li><a href="#">รายการเสนอราคาที่หมดอายุ (Expired Quotations)</a></li>
                </ul>
            </li>
        </ul>
    </div>
</body>
</html>