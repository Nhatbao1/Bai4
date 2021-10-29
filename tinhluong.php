<?php
include "nhanvien.php";
if (isset($_GET['Submit']) && ($_GET['Submit'] == "Lương Tháng")) {
    $ma = $_GET['ma'];
    $ten = $_GET['ten'];
    $songay = $_GET['songay'];
    $luongngay = $_GET['luongngay'];
    if (isset($_GET['valuecb']) && ($_GET['valuecb'] == "Nhân viên quản lý")) {
        $nvql = new nhanvienQL();
        $nvql->Gan($ma, $ten, (float)$songay, (float)$luongngay);
        $nvql->InNhanVien();
        echo "<br>";
        echo "Tổng lương: ".$nvql->TinhLuong();
    } else {
        $nv = new nhanvien();
        $nv->Gan($ma, $ten, (float)$songay, (float)$luongngay);
        $nv->InNhanVien();
        echo "Tổng lương: ".$nv->TinhLuong();
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>

<body>

    <form method="GET" action="#" style="background-color: orange; width:240px">

        <p>
            Mã nhân viên
            <input type="input" name="ma"></br>
        </p>

        <p>
            Tên nhân viên
            <input type="input" name="ten"></br>
        </p>

        <p>
            Số ngày làm việc
            <input type="input" name="songay"></br>
        </p>

        <p>
            Lương ngày
            <input type="input" name="luongngay"></br>
        </p>

        <p>
            Nhân viên quản lý
            <input type="checkbox" name="valuecb" value="Nhân viên quản lý"></br>
        </p>

        <p>
            <input type="Submit" value="Lương Tháng" name="Submit"></br>
        </p>


    </form>

</body>

</html>