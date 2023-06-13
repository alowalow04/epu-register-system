<?php
$Date=$_POST['Date'];
$dtype=$_POST['dtype'];
$dname=$_POST['dname'];
$Quantity=$_POST['Quantity'];
$SN=$_POST['SN'];
$fname=$_POST['fname'];
$FP=$_POST['FP'];
$room=$_POST['room'];
$sign=$_POST['sign'];
$phone=$_POST['phone'];
$rname=$_POST['rname'];
$signi=$_POST['signi'];
if(!empty($Date) || !empty($dtype) || !empty($dname) || !empty($Quantity) || !empty($SN)|| !empty($fname)|| !empty($FP)|| !empty($room)|| !empty($sign)|| !empty($phone)|| !empty($rname)|| !empty($signi))
{
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "EPU2016registered";
	$conn = mysql_connect($dbhost, $dbuser, $dbpass, $dbname);
	if(! $conn )
	{ 
	 die('Could not connect: ' . mysql_error());
	}else{
	mysql_select_db( 'EPU2016registered' );
	$sql = "INSERT INTO `epu2016registered`.`mater` (`Date`, `type`, `dname`, `Quantity`, `SN`, `fname`, `FP`, `room`, `sign`, `phone`, `rname`, `signi`)
	VALUES ('$Date', '$dtype', '$dname', '$Quantity', '$SN', '$fname', '$FP', '$room', '$sign', '$phone', '$rname', '$signi')";
				mysql_select_db('EPU2016registered');
				if (mysql_query($sql,$conn )) {
					echo "New record created successfully";
					echo' <meta content="4;EPU.html" http-equiv="refresh" />';
				} else {
					echo "Error: " . $sql . "<br>" . mysql_error($conn);
				}
	}
	mysql_close($conn);
}
?>