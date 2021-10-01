
<html>
<head>
    <title>Shop</title>
    <link rel="stylesheet" href="css/style.css" >
    <link rel="stylesheet" href="css/main.css" >

    
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
                            <li><a href="SQL/veiw-all.php">ViewAll</a></li>
                            <li><a href="SQL/add.php">Add</a></li>
                            <li><a href="SQL/edit.php">Edite</a></li>
                            <li><a href="SQL/delete.php">Delete</a></li>
                            <li><a href="SQL/search.php">Search</a></li>
                            <li><a href="product.php">product</a></li>
                        </ul>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br>
    <?php
            require_once("SQL/connect.php");
      $r=mysql_query("SELECT * FROM users");
        $x=mysql_num_rows($r); 
        echo "<center><table border='2' cellspacing='0' cellpadding='50' align='center' style='border:5px solid rgba(0,0,0,.5); background-color:lelaic;'>
        <tr>
        <td style='color:#03a9f4; font-size: 25px;'>Name</td>
        <td style='color:#03a9f4; font-size:25px;'>Password</td>
        </tr>";
        while ($row=mysql_fetch_array($r)) 
        {

            $name=$row['name'];
            $password=$row['password'];
            echo "<tr>
            <td style='color:#40739e; font-size: 15px;'>$name</td>
            <td style='color:#40739e; font-size: 15px;'>$password</td>
            </tr>"; 
        }


          echo "</table></center>"; 

        ?>
   </body>
</html>