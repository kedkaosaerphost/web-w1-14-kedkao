<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>สูตรคูณ While Loop</title>
</head>
<body>

<h1 style="color:orange">งานที่ 1 เกศเกล้า เสือโภชน์ BIT24 เลขที่ 14</h1>

<form method="get">
    <label>เลขแม่สูตรคูณ</label><br>
    <input type="number" name="num" required>
    <input type="submit" value="คำนวณ">
</form>

<?php
if(isset($_GET["num"])){

    $num = $_GET["num"];

    echo "<h3>สูตรคูณแม่ $num (While Loop)</h3>";

    echo "<table border='1' cellpadding='5'>";
    echo "<tr><th>สูตร</th><th>ผลลัพธ์</th></tr>";

    $i = 1;

    while($i <= 12){
        $result = $num * $i;

        echo "<tr>";
        echo "<td>$num x $i</td>";
        echo "<td>$result</td>";
        echo "</tr>";

        $i++;
    }

    echo "</table>";
}
?>

<br><br>
<a href="index.php">ไปหน้า For Loop</a>

</body>
</html>