<?php
require 'connect.php';
$result = $conn->query("SELECT MAKH, TENKH FROM KHACHHANG");
if (!$result) {
    echo "Lỗi truy vấn: " . $conn->error;
} else {
    while ($row = $result->fetch_assoc()) {
        echo "<option value='{$row['MAKH']}'>{$row['TENKH']}</option>";
    }
}
?>