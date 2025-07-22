document.addEventListener('DOMContentLoaded', function () {

  // --- ส่วนควบคุมเมนูผู้ใช้ ---
  const userContainer = document.getElementById('user-container');
  const userDropdown = document.getElementById('user-dropdown');

  if (userContainer && userDropdown) {
    userContainer.addEventListener('mouseenter', function () {
      userDropdown.style.display = 'block';
    });

    userContainer.addEventListener('mouseleave', function () {
      userDropdown.style.display = 'none';
    });
  }

  // --- ส่วนควบคุมเมนูตะกร้าสินค้า ---
  const cartContainer = document.getElementById('cart-container');
  const cartDropdown = document.getElementById('cart-dropdown');

  if (cartContainer && cartDropdown) {
    cartContainer.addEventListener('mouseenter', function () {
      cartDropdown.style.display = 'block';
    });

    cartContainer.addEventListener('mouseleave', function () {
      cartDropdown.style.display = 'none';
    });
  }

  // ✅ ฟังก์ชันแสดง Modal หลังสมัคร


}); // <--- ปิด document.addEventListener() ตรงนี้


