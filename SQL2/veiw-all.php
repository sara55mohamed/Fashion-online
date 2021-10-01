<html>
    <head>
        <link rel="stylesheet" href="nav2.css" >
    </head>
    <body>
        <br><br><br><br><br><br>
        <?php
            require_once("connect2.php");
       $r=mysql_query("SELECT * FROM product");
        $x=mysql_num_rows($r); 
        echo "<center><table border='2' width='300' height='200' cellspacing='0' cellpadding='50'  align='center' style='border:5px solid rgba(0,0,0,.5); background-color:lelaic;'>
        <tr>
        <td style='color:#03a9f4; font-size: 30px;'>Name</td>
        <td style='color:#03a9f4; font-size:30px;'>price</td>
        <td style='color:#03a9f4; font-size:30px;'>logo</td>
        </tr>";
        while ($row=mysql_fetch_array($r)) 
        {

            $name=$row['name'];
            $price=$row['price'];
            $logo= '../img/product-images/'.$row['logo'];
            echo "<tr>
            <td style='color:#40739e; font-size: 20px;'>$name</td>
            <td style='color:#40739e; font-size: 20px;'>$price</td>
            <td style='color:#40739e; font-size: 20px;'><img width='100%' src='$logo'/></td>
            </tr>"; 
        }


          echo "</table></center>"; 

        ?>
    </body>
</html>