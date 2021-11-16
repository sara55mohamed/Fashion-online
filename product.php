<?php 
            session_start();
            //var_dump($_SESSION);
            //die;
            require("SQL/connect.php");
            /*if($_SESSION['role'] == 'admin')
                {
                    header("Location: order.php");	
                }*/
            if($_SESSION['type'] != 'worker'&& $_SESSION['type'] != 'admin')
            {  
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
                    <link rel="stylesheet" href="css/main.css" >
                    <link rel="stylesheet" href="SQL2/nav2.css" > -->
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
                    <!-- <div class="nav">
                        <div class="content">
                            <div class="logo">
                                <a > <img src="img/logo.png"></a>
                            </div> -->
                            <div class="content">
                                <a href="SQL2/add.php">Add products</a>
                                <a href="SQL2/edit.php">Edit products </a>
                                <a href="SQL2/delete.php">Delete products</a>
                                <a href="SQL2/veiw-all.php">veiw all products</a>
                                <a href="SQL2/search.php">search  </a>
                                <a href="users.php">users </a>
                            </div>
                            <!-- <div class="menu">
                                <ul>
                                            <li><a href="SQL2/veiw-all.php">ViewAll</a></li>
                                            <li><a href="SQL2/add.php">Add</a></li>
                                            <li><a href="SQL2/edit.php">Edite</a></li>
                                            <li><a href="SQL2/delete.php">Delete</a></li>
                                            <li><a href="SQL2/search.php">Search</a></li>
                                            <li><a href="users.php">users</a></li>
                                        </ul>
                            </div> -->
                        <!-- </div>
                    </div>
                    <br><br><br><br><br><br><br><br> -->
                    <?php
                                        // require_once("SQL2/connect2.php"); 
                                        // $getProduct = "SELECT * FROM product";
                                        // $getProductDetails = $connect->prepare($getProduct);
                                        // $getProductDetails -> execute();
                        
                                        // echo "<center><table border='2' cellspacing='0' cellpadding='50' align='center' style='border:5px solid rgba(0,0,0,.5); background-color:lelaic;'>
                                        // <tr>
                                        // <td style='color:#03a9f4; font-size: 25px;'>Name</td>
                                        // <td style='color:#03a9f4; font-size:25px;'>price</td>
                                        // <td style='color:#03a9f4; font-size: 25px;'>logo</td>
                                        // </tr>";
                                        // while ($row= $getProductDetails->fetch(PDO::FETCH_ASSOC)) 
                                        // {
                                        //     $name=$row['name'];
                                        //     $price=$row['price'];
                                        //     $logo= 'img/product-images/'.$row['logo'];
                                        //     // $imageName= 'customer_Images/'.$row['image'];
                                        //     // <td style="color:#40739e; font-size: 15px;width="100%" src='.$logo.'></td>

                                        // echo '<tr role="row">
                                        //     <td style="color:#40739e; font-size: 15px;" >'.$name.'</td>
                                        //     <td style="color:#40739e; font-size: 15px;">'.$price.'</td>
                                        //     <td><img width="100px" hight="100px" src='.$logo.'></td>
                                        //     </tr>';
                                        // }	
                                        // echo "</table></center>"; 

                                    ?>
                    
                </body>
                </html>