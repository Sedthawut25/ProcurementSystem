<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include_once('../includes/bootstrap.php');
    loadBootstrapCSS();
    ?> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Index</title>
    <style>
        body {
            margin: 0;
            font-family: 'Tahoma', 'Arial', sans-serif;
            background-color: #f5f5f5;
        }

        .top-bar {
            background-color: #2289ffff; /* สีแถบบน */
            padding: 10px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .top-bar-left {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            flex: 1 1 0%;
            min-width: 0;
        }

        .logo-img {
            height: 50px;
            width: 50;
            object-fit: contain;
            object-fit: cover;
            border-radius: 50%;
            border: 2px solid #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }

        .search-bar {
            width: 100%;
            max-width: 800px;
            position: relative;
        }

        .search-bar input {
            background-color: white;
            width: 100%;
            padding: 12px 15px;
            font-size: 14px;
            border: none;
            border-radius: 2px;
            outline: none;
        }

        .search-bar button {
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            background-color: white;
            color: #2289ff;       
            border: none;
            padding: 0 20px;
            cursor: pointer;
            border-radius: 0 2px 2px 0;
            font-size: 16px;
        }
        
        .header-right {
            display: flex;
            align-items: center;
            gap: 30px;
            color: white;
        }

        .dropdown-container {
            position: relative;
            cursor: pointer;
        }
        
        .dropdown-menu {
            display: none; 
            position: absolute;
            top: 140%;
            right: -10px;
            background-color: white;
            color: black;
            border-radius: 4px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.15);
            min-width: 250px;
            z-index: 1000;
            padding: 8px 0;
        }

        .dropdown-menu::before {
            content: '';
            position: absolute;
            top: -10px;
            right: 20px;
            border-width: 0 10px 10px 10px;
            border-style: solid;
            border-color: transparent transparent white transparent;
        }

        #cart-container .fa-shopping-cart {
            font-size: 24px;
        }

        #cart-dropdown {
            min-width: 350px;
        }

        .cart-item {
            display: flex;
            align-items: center;
            padding: 10px 15px;
            border-bottom: 1px solid #eee;
        }

        .cart-item:last-child {
            border-bottom: none;
        }

        .cart-item img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
            object-fit: cover;
        }
        .cart-item-info {
            flex-grow: 1;
            font-size: 14px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .cart-item-price {
            color: #2289ffff;
            font-weight: bold;
        }
        .cart-footer {
            padding: 15px;
            text-align: right;
        }
        .cart-footer button {
            background-color: #2289ffff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 2px;
            cursor: pointer;
        }

        #user-container {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        #user-container .fa-user-circle {
            font-size: 24px;
        }

        #user-dropdown a {
            display: block;
            padding: 12px 20px;
            color: black;
            text-decoration: none;
            font-size: 14px;
        }

        #user-dropdown a:hover {
            background-color: #f5f5f5;
        }

    </style>
</head>

<body>
    <div class="top-bar">
        <div class="top-bar-left">
            <img src="../../assets/img/logodemo.png" alt="logo" class="logo-img"> <div class="search-bar">
                <input type="text" placeholder="ค้นหาสินค้า โปรโมชั่น...">
                <button><i class="fas fa-search"></i></button>
            </div>
        </div>

        <div class="header-right">
            <div class="dropdown-container" id="cart-container">
                <i class="fas fa-shopping-cart"></i>
                <div class="dropdown-menu" id="cart-dropdown">
                    <p style="padding: 0 15px; color: #888; font-size:14px;">สินค้าที่เพิ่มเข้ามา</p>
                    <div class="cart-item">
                        <img src="https://down-th.img.susercontent.com/file/th-11134207-7r98o-lqg79g5v01yae7_tn" alt="item">
                        <div class="cart-item-info">G&O โต๊ะสแตนเลส โต๊ะเกม 160/140cm...</div>
                        <div class="cart-item-price">฿559</div>
                    </div>
                    <div class="cart-item">
                        <img src="https://down-th.img.susercontent.com/file/cn-11134207-7r98o-lqwv4nm4whz42d_tn" alt="item">
                        <div class="cart-item-info">REX โต๊ะคอมพิวเตอร์ โต๊ะอีสปอร์ต...</div>
                        <div class="cart-item-price">฿599</div>
                    </div>
                     <div class="cart-footer">
                        <button>ดูรถเข็นของฉัน</button>
                    </div>
                </div>
            </div>

            <div class="dropdown-container" id="user-container">
                <i class="fas fa-user-circle"></i>
                <span>chetsadasikun</span>
                <div class="dropdown-menu" id="user-dropdown">
                    <a href="#">บัญชีของฉัน</a>
                    <a href="#">การซื้อของฉัน</a>
                    <a href="#">ออกจากระบบ</a>
                </div>
            </div>
        </div>
    </div>
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        
        // --- ส่วนควบคุมเมนูผู้ใช้ ---
        const userContainer = document.getElementById('user-container');
        const userDropdown = document.getElementById('user-dropdown');

        userContainer.addEventListener('mouseenter', function() {
            userDropdown.style.display = 'block';
        });

        userContainer.addEventListener('mouseleave', function() {
            userDropdown.style.display = 'none';
        });

        // --- ส่วนควบคุมเมนูตะกร้าสินค้า ---
        const cartContainer = document.getElementById('cart-container');
        const cartDropdown = document.getElementById('cart-dropdown');

        cartContainer.addEventListener('mouseenter', function() {
            cartDropdown.style.display = 'block';
        });

        cartContainer.addEventListener('mouseleave', function() {
            cartDropdown.style.display = 'none';
        });

    });
    </script>

</body>
</html>