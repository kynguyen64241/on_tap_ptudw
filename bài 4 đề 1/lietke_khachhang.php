<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Liệt kê khách hàng</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h3>3 khách hàng có số tiền thuê nhiều nhất</h3>
    Nhập số lượng khách:
    <input type="number" id="soluong" placeholder="Ví dụ: 3">
    <br><br>
    <table border="1" id="bang_khachhang">
        <tr>
            <th>STT</th>
            <th>Mã khách hàng</th>
            <th>Tên khách hàng</th>
            <th>Tổng tiền</th>
        </tr>
    </table>

    <script>
        $('#soluong').keypress(function (e) {
            if (e.which == 13) {
                let n = $(this).val();
                $.get('ajax_lietke_khachhang.php', { soluong: n }, function (data) {
                    $('#bang_khachhang').html(data);
                });
            }
        });
    </script>
</body>

</html>