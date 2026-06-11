<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลลัพธ์แม่สูตรคูณ</title>
</head>
<body>

<?php

if (isset($_GET["num"])) {

    $num = (int)$_GET["num"];

    echo "<h3>สูตรคูณแม่ $num</h3>";

    echo "<table border='1' cellpadding='5'>";
    echo "<tr><th>สูตร</th><th>ผลลัพธ์</th></tr>";

    $i = 1;

    while ($i <= 12) {
        $result = $num * $i;

        echo "<tr>";
        echo "<td>$num x $i</td>";
        echo "<td>$result</td>";
        echo "</tr>";

        $i++;
    }

    echo "</table>";

    echo "<br><br>";
    echo "<a href='index.php'>กลับหน้าหลัก</a>";

} else {
    echo "ไม่พบข้อมูล";
}

?>

</body>
</html>