<?php
require 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
</head>

<body>
    <form>
        Mã khách hàng: <input type="text" id="makh"><br>
        Tên khách hàng: <input type="text" id="tenkh"><br>
        SĐT: <input type="text" id="sdt"><br>
        CCCD: <input type="text" id="cccd"><br>
        <button type="button" id="btn-them-kh">Thêm</button>
    </form>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('#btn-them-kh').click(function () {
        $.post('them_khachhang.php', {
            makh: $('#makh').val(),
            tenkh: $('#tenkh').val(),
            sdt: $('#sdt').val(),
            cccd: $('#cccd').val()
        }, function (response) {
            alert(response);
        });

    });
</script>

</html>