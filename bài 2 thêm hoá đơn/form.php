<?php
require 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm hoá đơn</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <form>
        Tên khách hàng: <select id="makh"></select><br>
        Mã hoá đơn: <input type="text" id="mahd"><br>
        Tên hoá đơn: <input type="text" id="tenhd"><br>
        Tổng tiền: <input type="text" id="tongtien"><br>
        <button type="button" id="btn-them-hd">Thêm</button>

    </form>
</body>
<script>
    $(document).ready(function () {
        $.get('load_khachhang.php', function (data) {
            $('#makh').html(data);
        });

        $('#btn-them-hd').click(function () {
            $.post('them_hoadon.php', {
                mahd: $('#mahd').val(),
                tenhd: $('#tenhd').val(),
                makh: $('#makh').val(),
                tongtien: $('#tongtien').val()
            }, function (res) {
                alert(res);

            });
        });
    });
</script>

</html>