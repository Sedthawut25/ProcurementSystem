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


        // เมื่อคลิกที่กล่องธีม
        const themeCircle = document.getElementById('theme-circle');
        const themeDropdown = document.getElementById('theme-dropdown');

        themeCircle.addEventListener('click', () => {
            if (themeDropdown.style.display === 'none' || themeDropdown.style.display === '') {
                themeDropdown.style.display = 'block';
            } else {
                themeDropdown.style.display = 'none';
            }
        });

        // ปิด dropdown เมื่อคลิกนอก
        document.addEventListener('click', (e) => {
            if (!themeCircle.contains(e.target) && !themeDropdown.contains(e.target)) {
                themeDropdown.style.display = 'none';
            }
        });

        // เลือกธีม
        document.querySelectorAll('#theme-dropdown a').forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const theme = link.getAttribute('data-theme');
                if (theme === 'dark') {
                    document.body.classList.remove('light');
                    document.body.classList.add('dark');
                } else {
                    document.body.classList.remove('dark');
                    document.body.classList.add('light');
                }
                themeDropdown.style.display = 'none'; // ปิด dropdown หลังเลือก
            });
        });
        
    });