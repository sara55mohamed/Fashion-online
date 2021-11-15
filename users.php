<?php 
	session_start();
	//var_dump($_SESSION);
	//die;
	require("SQL/connect.php");
	if($_SESSION['type'] != 'admin')
	{  
		//echo"<script>alert('NOT Allow should be authorizedUsers')</script>";
		header("Location: logout.php");	
	}
	//var_dump($_SESSION);
	//die;
	?>
<html>
        <head>
            <title>Shop</title>
            <link rel="icon" href="img/favicon.png" sizes="192x192" />    
            <!-- <link rel="stylesheet" href="css/style.css" >
            <link rel="stylesheet" href="css/main.css" > -->

            <style>
                    body
                    {
                        background-image: url(css/bg-1.jpg);
                        margin: 0px;
                        padding: 0px;
                        background-color: #D3D3D3;
                        font-family: sans-serif;
                        left: auto;
                        width: 100%;
                        height: auto;
                        background-repeat: no-repeat;
                    }
                    .content
                    {
                        width: 1000px;
                        height: 200px;
                        margin: 200px;
                        margin-left: 160px;
                        float: left;
                        background-color:#778899;
                    }
                    .content a
                    {
                        text-align: center;
                        text-decoration: none;
                        min-width: 150px;
                        min-height: 30px;
                        font-size: 22px;
                        font-weight: lighter;
                        font-family: serif,sans-serif;
                        color: #fff;
                        background-color: #152E99;
                        margin: 30px;
                        padding: 10px;
                        float: none;
                        display: inline-block;
                    }
                    .content a:hover
                    {
                        background-color: 	#008080;
                    }
                </style>
        </head>
        <body>
            <!-- Header -->
                <!-- <div class="content">
                    <div class="logo">
                        <a > <img src="img/logo.png"></a>
                    </div> -->
                    <div class="content">
                    <a href="SQL/add.php">Add users</a>
                    <a href="SQL/edit.php">Edit users </a>
                    <a href="SQL/delete.php">Delete users</a>
                    <a href="SQL/veiw-all.php">veiw all users</a>
                    <a href="SQL/search.php">search  </a>
                    <a href="product.php">product </a>
                </div>
                    <!-- <div class="menu">
                        <ul>
                                    <li><a href="SQL/veiw-all.php">ViewAll</a></li>
                                    <li><a href="SQL/add.php">Add</a></li>
                                    <li><a href="SQL/edit.php">Edite</a></li>
                                    <li><a href="SQL/delete.php">Delete</a></li>
                                    <li><a href="SQL/search.php">Search</a></li>
                                    <li><a href="product.php">product</a></li>
                                </ul>
                    </div> -->
                <!-- </div> -->
            
            <?php
                            // require_once("SQL/connect.php"); 
                            // $getStaff = "SELECT * FROM users";
                            // $getStaffDetails = $connect->prepare($getStaff);
                            // $getStaffDetails -> execute();
            
                            // echo "<center><table border='2' cellspacing='0' cellpadding='50' align='center' style='border:5px solid rgba(0,0,0,.5); background-color:lelaic;'>
                            // <tr>
                            // <td style='color:#03a9f4; font-size: 25px;'>Name</td>
                            // <td style='color:#03a9f4; font-size:25px;'>Password</td>
                            // <td style='color:#03a9f4; font-size: 25px;'>Email</td>
                            // <td style='color:#03a9f4; font-size:25px;'>Type</td>
                            // </tr>";
                            // while ($row= $getStaffDetails->fetch(PDO::FETCH_ASSOC)) 
                            // {
                            // 		$n=$row['name'];
                            //         $p=$row['password'];
                            // 		$e=$row['email'];
                            // 		$t=$row['type'];
                            // echo '<tr role="row">
                            // 	<td style="color:#40739e; font-size: 15px;" >'.$n.'</td>
                            // 	<td style="color:#40739e; font-size: 15px;">'.$p.'</td>
                            // 	<td style="color:#40739e; font-size: 15px;">'.$e.'</td>
                            // 	<td style="color:#40739e; font-size: 15px;">'.$t.'</td>
                            // 	</tr>';
                            // }	
                            // echo "</table></center>"; 

                        ?>
        </body>
        </html>