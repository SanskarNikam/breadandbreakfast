<?php
$conn=pg_connect("host=192.168.16.1 port=5432 dbname=tya27 user=tya27");
if(!$conn)
        echo " connection error";

else
	echo" HI ";
	$login=$_POST['username'];
	$pass=$_POST['password'];
	
	echo " <br> $login <br> $pass";
	
	$q1="select * from user_table";

	$result=pg_query($conn,$q1);
		

	if(!$result){

			echo" <h1> Error in query<h1> ";
	
	}
	else
	{
		echo "<br> SUCESS";
			
		while($row=pg_fetch_assoc($result))
		{
			if($row['uname']==$login && $row['password']==$pass)
			{	
				//echo "ho gaya";
				
			
				header("location:index.html");
				break;
			}
			else{
				//echo "error";
                	       header("location:login.html");
			}


		}

			
	}
?>



