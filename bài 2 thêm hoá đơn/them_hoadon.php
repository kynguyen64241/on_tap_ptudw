<?php
require 'connect.php';
$mahd = $_POST['mahd'];
$tenhd = $_POST['tenhd'];
$makh = $_POST['makh'];
$tongtien = $_POST['tongtien'];

$sql = "INSERT INTO HOADON(MAHD, TENHD, MAKH, TONGTIEN) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssd", $mahd, $tenhd, $makh, $tongtien);

if ($stmt->execute()) {
    echo "Thêm hóa đơn thành công";
} else {
    echo "Lỗi: " . $stmt->error;
}
?>