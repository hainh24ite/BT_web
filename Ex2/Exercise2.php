<?php
$error = "";
$result = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $investment = isset($_POST["investment"]) ? floatval($_POST["investment"]) : 0;
    $interest_rate = isset($_POST["interest_rate"]) ? floatval($_POST["interest_rate"]) : 0;
    $years = isset($_POST["years"]) ? intval($_POST["years"]) : 0;

    if ($interest_rate > 15) {
        $error = "<span style='color:red;'>Interest rate must be less than or equal to 15.</span>";
    } else {
        $future_value = $investment * pow(1 + $interest_rate / 100, $years);
        $result = "<strong>Future Value:</strong> $" . number_format($future_value, 2);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Future Value Calculator</title>
</head>
<body>
    <h2>Future Value Calculator</h2>
    <form action="Exercise1.php" method="post">
        <label>Investment Amount:</label>
        <input type="text" name="investment" value="<?php echo isset($_POST['investment']) ? htmlspecialchars($_POST['investment']) : ''; ?>" required><br><br>
        <label>Yearly Interest Rate:</label>
        <input type="text" name="interest_rate" value="<?php echo isset($_POST['interest_rate']) ? htmlspecialchars($_POST['interest_rate']) : ''; ?>" required><br><br>
        <label>Number of Years:</label>
        <input type="text" name="years" value="<?php echo isset($_POST['years']) ? htmlspecialchars($_POST['years']) : ''; ?>" required><br><br>
        <input type="submit" value="Calculate">
    </form>
    <br>
    <?php
    if ($error) {
        echo $error;
    } elseif ($result) {
        echo $result;
    }
    ?>
    <br><br>
    <div style="font-style: italic;">
        This calculation was done on <?php echo date('n/j/Y'); ?>.
    </div>
</body>
</html>