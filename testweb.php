<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test database</title>
</head>
<body>

<center><H3>รายชื่อหนังสือ</H3></center>
<table width='100%' border='1' align='center'>
<tr><td>รหัสหนังสือ</td><td>ชื่อหนังสือ</td>
<td>ประเภทหนังสือ </td> <td>สถานะหนังสือ</td><td>สานักพิมพ์</td>
<td>ราคาหนังสือ </td> <td>ราคาเช่าหนังสือ</td><td>จำนวนวัน</td>
<td>รูปภาพ </td> <td>วันที่ซื้อ</td></tr>
<?php
include_once("db.php");
    while($row = $result->fetch_assoc())
    {
        echo "<tr>"."<td>".$row["BookID"]."</td>"."<td>".$row["BookName"]."</td>"."<td>"
        .$row["TypeID"]."</td>"."<td>".$row["StatusID"]."</td>"."<td>".$row["Publish"]."</td>"
        ."<td>".$row["UnitPrice"]."</td>"."<td>".$row["UnitRent"]."</td>".
        "<td>".$row["DayAmount"]."</td>"."<td>".$row["Picture"]."</td>"
        ."<td>".$row["BookDate"]."</td>"."</tr>";
    }


$conn->close();
?>
</table>

<form method="POST" action="Insertdata.php">
        <input type="submit"value="Insert">
</form>

</body>
</html>



