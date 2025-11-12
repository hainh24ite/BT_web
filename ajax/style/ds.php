<?php
include("../inc/connect.inc");
$lop=$_GET['lop'];
$sql="Select * from sinhvien where lop='{$lop}'";
$rs=mysqli_query($con, $sql);
$str="<table>
<tr class=hd>
<td>TT</td> <td>Code</td> <td>Full name</td> <td>Address</td>
</tr>";
$tt=1;
while($row=mysqli_fetch_array($rs)) {
$str.="<tr>
<td>{$tt}</td>
<td>{$row['masv']}</td> <td>{$row['hoten']}</td>
<td>{$row['diachi']}</td>
</tr>";
$tt++;
}
$str."</table>";
echo $str;
?>