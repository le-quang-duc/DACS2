<?php
// Thông tin kết nối cơ sở dữ liệu
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'doancoso2';

// Kết nối đến cơ sở dữ liệu
$connect = mysqli_connect($host, $username, $password, $database);

// Kiểm tra kết nối và thiết lập mã hóa ký tự
if ($connect) {
    mysqli_set_charset($connect, 'utf8');
   
} else {
    die("Kết nối thất bại: " . mysqli_connect_error()); // Dừng chương trình nếu kết nối thất bại
}
?>
