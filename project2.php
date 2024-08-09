<?php
$conn=pg_connect("host=192.168.16.1 port=5432 dbname=tya27 user=tya27");
if(!$conn)
	echo " connection error";

else
	echo " connection done";


$name= $_POST['fullname'];
$num= $_POST['phone'];
$mail= $_POST['email'];
$mname= $_POST['messname'];
$type= $_POST['types'];
$Dining= $_POST['Dining'];
$service= $_POST['services'];
$Des= $_POST['Description'];


echo"$pass";


$q2="insert into mess values('$name','$num','$mail','$mname','$type','$Dining','$service','$Des');";

$result= pg_query($conn,$q2);


	if(!$result)
	{
		

		header("location:Reg2.html");
		echo"error";
	}
	else
	{
		header("location:mess.html");
	
		echo"successful";
	}
pg_close($conn);


?>
