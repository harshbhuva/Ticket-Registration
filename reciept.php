<html>
<head>
<h1 align="center"> RECIEPT </h1>
</head>
<body>

<?php
$link=new mysqli("localhost","root","","event");
$res=$link->query("select max(bill_no) from bill");
$row=mysqli_fetch_row($res);
$bno=$row[0];
$bno++;
session_start();
$us=$_SESSION['myuser'];
$res=$link->query("select sum(num_of_tickets),sum(amount) from ticket2");
$row=mysqli_fetch_row($res);
$qt=$row[0];
$amt=$row[1];


$pay=$amt;

$link->query("insert into bill values($bno,'$us',$qt,$amt,$pay)");

$link->query("delete from ticket2");

echo "<center><br><br> <table border='3'><tr><td>Bill no</td><td>name</td><td>num of tickets</td><td>total</td></tr><tr><td>$bno</td><td>$us</td><td>$qt</td><td>$amt</td></tr></table></center>";
$link->close();



?>
<br><br><br><br><center><input type="submit" name="sub" value ="GENERATE RECIEPT"><br></center>


</body>
</html>