<!DOCTYPE html>
<html>
<head>
    <title>Nhập và tính toán trên dãy số</title>
    <meta charset="utf-8">
    <style>
        * {
            font-family: Tahoma;
        }
        table {
            width: 400px;
            margin: 50px auto;
            border-collapse: collapse;
        }
        th {
            background: #66CCFF;
            padding: 10px;
            font-size: 18px;
        }
        td {
            padding: 8px;
            border: 1px solid #ddd;
        }
        input[type="text"] {
            width: 100%;
            padding: 5px;
        }
        .note {
            color: #666;
            font-size: 12px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
<form method="POST" action="">
    <?php
//    $cars = array("Volvo", "BMW", "Toyota");
//
//    $car[0] = "Volvo";
//    $car[1] = "BMW";
//    $car[2] = "Toyota";
//
//    echo $car[0], $car[1], $car[2];
//    echo "<br>";
//    echo $cars[0], $cars[1], $cars[2];
//
//    $ages = array("Peter" => 35, "Ben" => 37, "Joe" => 43);
//    $age ["Peter"]= 35;
//    $age ["Ben"]= 37;
//    $age ["Joe"]= 43;
//
//    echo $age ["Peter"];
//    echo $age ["Ben"];
//    echo $age ["Joe"];


//    $ket_qua = '';
//    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nhap_mang'])) {
//        //Lấy chuỗi từ input và loại bỏ khoảng trắng
//        $chuoi_so = str_replace(' ', '', $_POST['nhap_mang']);
//        //Tách chuỗi thành mảng số
//        $mang_so = explode(',', $chuoi_so);
////        //Tính tổng các số trong mảng
////        $ket_qua = array_sum($mang_so);
//        //Lọc và tính tổng
//        $tong = 0;
//        $hop_le=true;
//        foreach ($mang_so as $so) {
//            if(is_numeric($so)){
//                $tong += (float)$so;
//            } else if($so != ''){
//                $hop_le = false;
//            }
//        }
//        $ket_qua = $hop_le ? $tong : 'Khong hop le';
//    }
    $ket_qua = 0;
    $mang_so = 0;
    if(isset($_POST["btn_goi"])){
        $mang_so = explode(",", $_POST["nhap_mang"]);
        $n = count($mang_so);
        for ($i = 0; $i < $n; $i++) {
            $ket_qua += $mang_so[$i];
        }
    }
    ?>


    <table>
        <thead>
        <tr>
            <th colspan="2">Nhap va tinh tren day so</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Nhap day so:</td>
            <td><input type="text" name="nhap_mang"
                       value="<?php echo isset($_POST["nhap_mang"])
                               ? htmlspecialchars($_POST["nhap_mang"]) : '';
                       ?>"
                placeholder="Vi du: 1,2,3,4,5,...."/>
            </td>
            <div class="note">Nhap cac so cah nhau bang dau phay (,)</div>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="btn_goi" value="Tinh tong day so"/>
            </td>
        </tr>
        <tr>
            <td>Tong day so:</td>
            <td>
                <input type="text" name="ket_qua" readonly value="<?php echo htmlspecialchars($ket_qua); ?>">
            </td>
        </tr>

        </tbody>
    </table>
</form>
</body>
</html>



