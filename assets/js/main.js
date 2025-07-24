

// --- ส่วนควบคุม sidebar ---
document.querySelectorAll('.sidebar-menu .menu-item > a').forEach(item => {
    item.addEventListener('click', e => {
    e.preventDefault();
    const parentLi = item.parentElement;
    parentLi.classList.toggle('active');
    });
});

