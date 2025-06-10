<?php

require 'connect.php';


$makh = $_POST['makh'];
$tenkh = $_POST['tenkh'];
$sdt = $_POST['sdt'];
$cccd = $_POST['cccd'];

$sql = "INSERT INTO KHACHHANG (MAKH, TENKH, SDT, CCCD) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

$stmt->bind_param("ssss", $makh, $tenkh, $sdt, $cccd);


if ($stmt->execute()) {
    echo "Thêm thành công";
} else {
    echo "Lỗi" . $stmt->error;
}

$stmt->close();
$conn->close();
?>