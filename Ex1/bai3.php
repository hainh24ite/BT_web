<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Xuất số thành chữ</title>
</head>
<body>
<?php
function docSo($so){
    switch ($so) {
        case 0: return "Khong";
        case 1: return "Mot";
        case 2: return "Hai";
        case 3: return "Ba";
        case 4: return "Bon";
        case 5: return "Nam";
        case 6: return "Sau";
        case 7: return "Bay";
        case 8: return "Tam";
        case 9: return "Chin";
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $so = (int)$_POST['so'];
    $ketqua = docSo($so);
}
?>
<form method="POST" >
    <table width="519" border="1">
        <tr>
            <td colspan="3">Đọc số</td>
        </tr>
        <tr>
            <td>Nhập số (0-9)</td>
            <td width="69" rowspan="2">
                <input type="submit" name="button" id="button"
                                              value="Submit" />
            </td>
            <td> Bằng chữ</td>
        </tr>
        <tr>
            <td width="177"><p>
                <label for="textfield"></label>
                <input type="text" name="so" id="textfield" value="<?php echo $so; ?>" />
            </p></td>
            <td width="232"><label for="textfield2"></label>
                <input type="text" name="chu" id="textfield2" value="<?php echo $ketqua; ?>"/></td>
        </tr>
    </table>
</form>
</body>
</html>