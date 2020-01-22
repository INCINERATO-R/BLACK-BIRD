<?php
			$email = $_POST['email'];
			$pass = $_POST['password'];
			$flag=0;
			
			$con = mysqli_connect("localhost","root","");
			$db  = mysqli_select_db($con,"musicdb");
			$res = mysqli_query($con,"SELECT * FROM `user` WHERE 1");
			while($row = mysqli_fetch_assoc($res) and $flag==0)
			{
				$t_email = $row['email'];
				$t_password = $row['password'];
				
				if(($t_email === $email) and ($t_password === $pass))
				$flag=1;
				else
				$flag=0;
			}
			
			if($flag==1)
			{
				$con1 = mysqli_connect("localhost","root","");
				$db1  = mysqli_select_db($con,"musicdb");
				$sql = "INSERT INTO `logged`(`username`) VALUES "."aniket";
				mysqli_query($con,$sql);
				header("LOCATION:http://localhost/BLACKBIRD/preferences.php");
			}
			else
			echo "LOGIN FAILED";
?>
