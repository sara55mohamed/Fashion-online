
<html>
<head>
    <title>Shop</title>
    <link rel="stylesheet" href="css/style.css" >
    <link rel="stylesheet" href="css/main.css" >
     <link rel="stylesheet" href="SQL2/nav2.css" >
    
</head>
<body>
    <!-- Header -->
    <div class="nav">
        <div class="content">
            <div class="logo">
                <a > <img src="img/logo.png"></a>
            </div>
            <div class="menu">
                <ul>
                            <li><a href="SQL2/veiw-all.php">ViewAll</a></li>
                            <li><a href="SQL2/add.php">Add</a></li>
                            <li><a href="SQL2/edit.php">Edite</a></li>
                            <li><a href="SQL2/delete.php">Delete</a></li>
                            <li><a href="SQL2/search.php">Search</a></li>
                            <li><a href="users.php">users</a></li>
                        </ul>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br>
    <?php
            require_once("SQL2/connect2.php");
       $r=mysql_query("SELECT * FROM product");
        $x=mysql_num_rows($r); 
        echo "<center><table border='2' width='300' height='200' cellspacing='0' cellpadding='0' align='center' style='border:5px solid rgba(0,0,0,.5); background-color:lelaic;'>
        <tr>
        <td style='color:#03a9f4; font-size: 30px;'>Name</td>
        <td style='color:#03a9f4; font-size:30px;'>price</td>
        <td style='color:#03a9f4; font-size:30px;'>logo</td>
        </tr>";
        while ($row=mysql_fetch_array($r)) 
        {

            $name=$row['name'];
            $price=$row['price'];
            $logo= 'img/product-images/'.$row['logo'];
            echo "<tr>
            <td style='color:#40739e; font-size: 20px;'>$name</td>
            <td style='color:#40739e; font-size: 20px;'>$price</td>
            <td style='color:#40739e; font-size: 20px; width='100%''><img width='100%' src='$logo'/></td>
            </tr>"; 
        }


          echo "</table></center>"; 

        ?>
   </body>
</html>