	<html>
		<head>
		<title>Shop</title>
			<link rel="icon" href="../img/favicon.png" sizes="192x192" /> 
			<link rel="stylesheet" href="nav.css" >
		</head>
		<body>
			<br><br><br><br><br><br>
			<?php
							require_once("connect.php"); 
							$getStaff = "SELECT * FROM users";
							$getStaffDetails = $connect->prepare($getStaff);
							$getStaffDetails -> execute();
			
							echo "<center><table border='2' cellspacing='0' cellpadding='50' align='center' style='border:5px solid rgba(0,0,0,.5); background-color:lelaic;'>
							<tr>
							<td style='color:#03a9f4; font-size: 25px;'>Name</td>
							<td style='color:#03a9f4; font-size:25px;'>Password</td>
							<td style='color:#03a9f4; font-size: 25px;'>Email</td>
							<td style='color:#03a9f4; font-size:25px;'>Type</td>
							</tr>";
							while ($row= $getStaffDetails->fetch(PDO::FETCH_ASSOC)) 
							{
									$n=$row['name'];
									$p=$row['password'];
									$e=$row['email'];
									$t=$row['type'];
							echo '<tr role="row">
								<td style="color:#40739e; font-size: 15px;" >'.$n.'</td>
								<td style="color:#40739e; font-size: 15px;">'.$p.'</td>
								<td style="color:#40739e; font-size: 15px;">'.$e.'</td>
								<td style="color:#40739e; font-size: 15px;">'.$t.'</td>
								</tr>';
							}	
							echo "</table></center>"; 

						?>
		</body>
	</html>