<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>
<body>
<?php
    function giaiPTB2($a, $b, $c)
    {
        if ($a == 0) {
            if ($b==0){
                return "Phuong trinh vo nghiem!";
            }
            else {
                $x = -$c / $b;
                return "x1 = x2 = " . round($x, 2);
            }
        }
        $delta = $b * $b - 4 * $a * $c;
        if ($delta > 0) {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            return "x1 = " . round($x1, 2)
                ."<br>"
                .", x2 = " . round($x2, 2);
        }
        elseif ($delta == 0) {
            $x = -$b / (2 * $a);
            return "x1 = x2 = " . round($x, 2);
        }
        else {
            return "Phuong trinh vo nghiem";
        }
    }
    $a = isset($_POST['a']) ? (float)$_POST['a'] : 0;
    $b = isset($_POST['b']) ? (float)$_POST['b'] : 0;
    $c = isset($_POST['c']) ? (float)$_POST['c'] : 0;
    $ketQua = '';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $ketQua = giaiPTB2($a, $b, $c);
    }
?>
<form method="post" >
    <table width="806" border="1">
        <tr>
            <td colspan="4" bgcolor="#336699"><strong>Giải phương trình bậc 2</strong></td>
        </tr>
        <tr>
            <td width="83">Phương trình </td>
            <td width="236">
                <input name="a" type="text" value="<?php echo htmlspecialchars($a); ?>"/>
                X^2 +
            </td>
            <td width="218">
                <input type="text" name="b" value="<?php echo htmlspecialchars($b); ?>"/>
                X+
            </td>
            <td width="241">
                <input type="text" name="c" id="textfield" value="<?php echo htmlspecialchars($c); ?>"/>
                =0
            </td>
        </tr>
        <tr>
            <td colspan="4" width="300px">
                Nghiệm
                <input name="textfield" type="text" id="textfield2" width="400" value="<?php echo htmlspecialchars($ketQua); ?>" /></tr>
        <tr>
            <td colspan="4" align="center" valign="middle"><input type="submit" name="chao"
                                                                  id="chao" value="Xuất" /></td>
        </tr>
    </table>
</form>
</body>
</html>