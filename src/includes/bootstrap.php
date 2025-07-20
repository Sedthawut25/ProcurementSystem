<?php
// includes/bootstrap.php

// ฟังก์ชันสำหรับโหลด Bootstrap CSS
function loadBootstrapCSS() {
    echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">';
}

// ฟังก์ชันสำหรับโหลด Bootstrap JS (Bundle รวม Popper)
function loadBootstrapJS() {
    echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>';
}
?>