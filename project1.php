<?php
$conn=pg_connect("host=192.168.16.1 port=5432 dbname=tya27 user=tya27");
if(!$conn)
	echo " connection error";

else
	echo " connection done";


$name= $_POST['name'];
$num= $_POST['phone'];
$mail= $_POST['email'];
$hname= $_POST['hname'];
$rtype= $_POST['Rtypes'];
$amenities= $_POST['amenities'];
$descri= $_POST['descri'];


echo"$pass";


$q2="insert into host values('$name','$num','$mail','$hname','$rtype','$amenities','$descri');";

$result= pg_query($conn,$q2);


	if(!$result)
	{
		

		header("location:Reg1.html");
		echo"error";
	}
	else
	{
		header("location:mess.html");
	
		echo"successful";
	}
pg_close($conn);


?>
