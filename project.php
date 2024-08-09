<?php
$conn=pg_connect("host=192.168.16.1 port=5432 dbname=tya27 user=tya27");
if(!$conn)
	echo " connection error";

else
	echo " connection done";


$name= $_POST['name'];
$mail= $_POST['email'];
$pass= $_POST['password'];

echo"$pass";


$q2="insert into user_table values('$name','$num','$mail','$pass');";

$result= pg_query($conn,$q2);


	if(!$result)
	{
		

		header("location:login.html");
		echo"error";
	}
	else
	{
		header("location:login.html");
	
		echo"successful";
	}
pg_close($conn);


?>
