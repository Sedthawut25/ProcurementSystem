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

        // --- ส่วนควบคุม sidebar ---
         document.querySelectorAll('.sidebar-menu .menu-item > a').forEach(item => {
            item.addEventListener('click', e => {
                e.preventDefault();
                const parentLi = item.parentElement;
                parentLi.classList.toggle('active');
        });
    });

});