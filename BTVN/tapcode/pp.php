<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Kiểm tra phiên bản PHP
echo "<h1>Kiểm tra PHP và XAMPP</h1>";

echo "<h2>Phiên bản PHP:</h2>";
echo phpversion();

// Kiểm tra thông tin cấu hình PHP
echo "<h2>Thông tin cấu hình PHP:</h2>";
phpinfo();

// Kiểm tra Apache
echo "<h2>Apache đang chạy!</h2>";

// Kiểm tra MySQL kết nối
echo "<h2>Kiểm tra MySQL:</h2>";
$mysqli = new mysqli("localhost", "root", "");

if ($mysqli->connect_error) {
    echo "Không thể kết nối MySQL: " . $mysqli->connect_error;
} else {
    echo "Kết nối MySQL thành công!";
}
?>
