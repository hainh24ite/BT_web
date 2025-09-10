<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Giải phương trình bậc 1</title>
    <style>
        .result {
            margin: 20px 0;
            padding: 15px;
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 4px;
            color: red;
        }
        table {
            margin: 20px 0;
            border-collapse: collapse;
        }
        td {
            padding: 8px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
<h2>Giải phương trình bậc 1: ax + b = 0</h2>
<form method="post" action="">
    <table width="744" border="1">
        <tr>
            <td colspan="3" bgcolor="#336699"><strong>Giải phương trình bậc 1</strong></td>
        </tr>
        <tr>
            <td width="120">Phương trình</td>
            <td width="250">
                <input name="a" type="number" step="any" required />
                X +
            </td>
            <td width="352">
                <input name="b" type="number" step="any" required />
                = 0
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <input type="submit" name="submit" value="Giải" />
            </td>
        </tr>
    </table>
</form>

<?php
// Xử lý ngay trong file này
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = isset($_POST['a']) ? (float)$_POST['a'] : 0;
    $b = isset($_POST['b']) ? (float)$_POST['b'] : 0;

    echo '<div class="result">';
    echo "<p>Phương trình: $a x + $b = 0</p>";

    if ($a == 0) {
        echo $b == 0 ? "<p>Phương trình có vô số nghiệm</p>" : "<p>Phương trình vô nghiệm</p>";
    } else {
        $x = -$b / $a;
        echo "<p>Nghiệm: x = " . round($x, 2) . "</p>";
    }

    echo '</div>';
}
?>
</body>
</html>