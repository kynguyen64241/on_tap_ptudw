<?php
require 'connect.php';
$n = $_GET['soluong'];

$sql = "
SELECT KHACHHANG.MAKH, TENKH, SUM(TONGTIEN) AS TONG
FROM HOADON JOIN KHACHHANG ON HOADON.MAKH = KHACHHANG.MAKH
GROUP BY HOADON.MAKH
ORDER BY TONG DESC
LIMIT $n
";

$result = $conn->query($sql);
$i = 1;
echo "<tr><th>STT</th><th>Mã khách hàng</th><th>Tên khách hàng</th><th>Tổng tiền</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$i}</td>
        <td>{$row['MAKH']}</td>
        <td>{$row['TENKH']}</td>
        <td>" . number_format($row['TONG'], 0, ',', '.') . "</td>
    </tr>";
    $i++;
}
?>