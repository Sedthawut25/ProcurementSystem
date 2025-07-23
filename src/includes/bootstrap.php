<?php
// includes/bootstrap.php

// ฟังก์ชันสำหรับโหลด Bootstrap CSS
function loadBootstrapCSS() {
    echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">';
    echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">';
    echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">';
    echo '<link rel="stylesheet" href="../../assets/css/style.css">';

}

// ฟังก์ชันสำหรับโหลด Bootstrap JS (Bundle รวม Popper)
function loadBootstrapJS() {
    echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>';
    echo '<script src="../../assets/js/main.js"></script>';
}
?>