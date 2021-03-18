
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="POST" action="<?php $_SERVER['PHP_SELF'];?>" >
customerID :
<input type="text" id="customerID" name="cusid"><br>
customerName :
<input type="text" id="custname" name="cusname"><br>
customerSurname :
<input type="text" id="custSname" name="cusSname"><br>
customerAddress :
<input type="text" id="custadd" name="cusadd"><br>
customerPhonenumber :
<input type="text" id="custphone" name="cusphone"><br>
<!--  จะใช้แบบนี้หรือแบบ ข้างล่างก็ได้ <input type="submit" value="Insert database♥" onclick="<?php// inserts() ?>" > -->
</form>

<?php

function inserts(){
   include_once("db.php");
   $sqls="INSERT INTO customer (CustomerID,CustomerName,CustomerSurname,CustomerAddr,CustomerPhone) VALUES ('{$_POST['cusid']}','{$_POST['cusname']}','{$_POST['cusSname']}','{$_POST['cusadd']}','{$_POST['cusphone']}')";
   echo $sqls;
   $dbquery=$conn->query($sqls);
   
    }

?>
<?php
   
?>
<form action="testweb.php" >
<input type="submit" value="Insert database♥" onclick="<?php inserts() ?>" >

</form> 
</body>
</html>


