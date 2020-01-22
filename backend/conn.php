<html>
	<body>
			<?php	
				$con = mysqli_connect("localhost","root","");
				$db = mysqli_select_db($con,"musicdb");
				
				$sql = "SELECT * FROM `users` WHERE password = '123'";
				$res = mysqli_query($sql,$db);
				
                    $row = mysqli_fetch_assoc($res);
                    print_r($row); 	
			?>
	</body>
 </html>
