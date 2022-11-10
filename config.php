<?php
/* Cố gắng kết nối máy chủ MySQL. Giả sử bạn đang chạy MySQL
Máy chủ có cài đặt mặc định (user là 'root' và không có mật khẩu) */
$link = mysqli_connect("localhost", "root", "","th 11/10");
 
// Kiểm tra kết nối
if($link === false){
    die("ERROR: Không thể kết nối. " . mysqli_connect_error());
}
 
// In thông tin Host
echo "Kết nối thành công. Host: " . mysqli_get_host_info($link);
?>