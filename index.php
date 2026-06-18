<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>สูตรคูณ For Loop</title>

<style>
body{
    font-family: Tahoma, sans-serif;
    background: linear-gradient(to right,#74ebd5,#ACB6E5);
    margin:0;
}

.container{
    width:700px;
    margin:50px auto;
    background:white;
    padding:30px;
    border-radius:15px;
    box-shadow:0 0 15px rgba(0,0,0,0.2);
}

h1{
    text-align:center;
    color:#0077b6;
}

form{
    text-align:center;
    margin-bottom:20px;
}

input[type=number]{
    padding:10px;
    width:200px;
    border:1px solid #ccc;
    border-radius:8px;
}

input[type=submit]{
    padding:10px 20px;
    background:#0077b6;
    color:white;
    border:none;
    border-radius:8px;
    cursor:pointer;
}

input[type=submit]:hover{
    background:#023e8a;
}

table{
    width:100%;
    border-collapse:collapse;
    margin-top:15px;
}

th{
    background:#0077b6;
    color:white;
}

th,td{
    border:1px solid #ddd;
    padding:10px;
    text-align:center;
}

tr:nth-child(even){
    background:#f2f2f2;
}

.link{
    text-align:center;
    margin-top:20px;
}
</style>

</head>
<body>

<div class="container">

<h1>สูตรคูณด้วย For Loop</h1>
<h3 align="center"> เกศเกล้า เสือโภชน์  BIT24 เลขที่ 14</h3>

<form method="get">
    <label>กรอกเลขแม่สูตรคูณ</label><br><br>
    <input type="number" name="num" required>
    <input type="submit" value="คำนวณ">
</form>

<?php
if(isset($_GET["num"])){

    $num = $_GET["num"];

    echo "<h3 align='center'>สูตรคูณแม่ $num</h3>";

    echo "<table>";
    echo "<tr><th>สูตร</th><th>ผลลัพธ์</th></tr>";

    for($i=1;$i<=12;$i++){
        $result = $num * $i;
        echo "<tr>";
        echo "<td>$num × $i</td>";
        echo "<td>$result</td>";
        echo "</tr>";
    }

    echo "</table>";
}
?>

<div class="link">
    <a href="while.php">➡ ไปหน้า While Loop</a>
</div>

</div>
</body>
</html>
