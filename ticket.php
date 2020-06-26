<html>
<head>
<style>
legend{
	font-size=30px;
}
fieldset {
	border:3px solid #999;
	
	border-radius:8px;
	box-shadow:0 0 10px #999;
}

	th, td {
    padding: 15px;
    text-align: left;
	height: 50px;
	}
	tr:hover {
		background-color: cyan;
		cursor:hand;
		}

</style>
</head>
<body>
<?php
	if(!isset($_REQUEST['sub']))
	{
		?>

<form name="f1" action="<?php $_SERVER['PHP_SELF']?>">
 <fieldset>
 <table align="center">
  <center><legend>Fill Form For Registration:</legend></center>
  <tr>
  <td>Enter Name:</td>
    <td>
      <INPUT TYPE="TEXT" NAME="name" SIZE="20">
    </TD>
  </tr><br>
  <tr>
  <td>Email:</td>
   <td><input type="email" name="email"></td></tr><br>
  
  <tr>
  <TD>Enter Mobile no:</TD>
    <TD>
      <INPUT TYPE="TEXT" NAME="mobno" SIZE="10">
    </TD>
  </TR><br>
   <tr><td>Choose class:</td>
   <td><select name="class">
  <option value="upper stand">Upper Stand</option>
  <option value="lower stand with student id">Lower Stand With Student Id</option>
  <option value="lower stand">Lower Stand</option>
  <option value="vip(seating)">VIP(Seating)</option>
  <option value="vvip(seating)">VVIP(Seating)</option>
  <option value="vvip table(8 pax)">VVIP Table (8 pax)</option>
</select>
  
  
</td></tr><br>
<tr>
  <TD>Enter number of tickets:</TD>
    <TD>
      <INPUT TYPE="TEXT" NAME="qty" >
    </TD>
  </TR><br>
</table><br>
<center><input type="submit" name="sub" value ="SUBMIT"><br></center><br>
<center><input type="submit" name="sub" value ="GENERATE RECIEPT"><br></center>

 </fieldset>
 
</form>
<?php
	}
	else{
	
	
	$sub=$_REQUEST['sub'];
			if($sub=="SUBMIT")
		{
			$na=$_REQUEST['name'];
			$mobno=$_REQUEST['mobno'];
			$email=$_REQUEST['email'];
			
			$class=$_REQUEST['class'];
			$ticket=$_REQUEST['qty'];
			
			session_start();
			$_SESSION['myuser']=$na;
			$link=new mysqli("localhost","root","","event");
			$res=$link->query("select price from priceticket where ticket_class='$class' ");
			$row=mysqli_fetch_row($res);
			$pr=$row[0];
			$amt=$pr*$ticket;
			$link->query("insert into ticket2 values('$na',$mobno,'$email','$class',$ticket,$amt)");
			$link->close();
			header("location:ticket.php");
		}
		else if($sub=="GENERATE RECIEPT")
		{
			header("location:reciept.php");
		}
	}
		
	
	?>	
	</body>
</html>

