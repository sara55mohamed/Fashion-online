    <html>
        <head>
        <title>Shop</title>
			<link rel="icon" href="../img/favicon.png" sizes="192x192" /> 
			<link rel="stylesheet" href="nav.css" >
            </head>
        <body>
            <br><br><br><br><br><br>
            <?php
            
            require_once("connect2.php"); 
            $getProduct = "SELECT * FROM product";
            $getProductDetails = $connect->prepare($getProduct);
            $getProductDetails -> execute();

            echo "<center><table border='2' cellspacing='0' cellpadding='50' align='center' style='border:5px solid rgba(0,0,0,.5); background-color:lelaic;'>
            <tr>
            <td style='color:#03a9f4; font-size: 25px;'>Name</td>
            <td style='color:#03a9f4; font-size:25px;'>price</td>
            <td style='color:#03a9f4; font-size: 25px;'>logo</td>
            </tr>";
            while ($row= $getProductDetails->fetch(PDO::FETCH_ASSOC)) 
            {
                $name=$row['name'];
                $price=$row['price'];
                $logo= '../img/product-images/'.$row['logo'];
            echo '<tr role="row">
                <td style="color:#40739e; font-size: 15px;" >'.$name.'</td>
                <td style="color:#40739e; font-size: 15px;">'.$price.'</td>
                <td><img width="100px" hight="100px" src='.$logo.'></td>
                </tr>';
            }	
            echo "</table></center>"; 

        
        //         require_once("connect2.php");
        //    $r=mysql_query("SELECT * FROM product");
        //     $x=mysql_num_rows($r); 
        //     echo "<center><table border='2' width='300' height='200' cellspacing='0' cellpadding='50'  align='center' style='border:5px solid rgba(0,0,0,.5); background-color:lelaic;'>
        //     <tr>
        //     <td style='color:#03a9f4; font-size: 30px;'>Name</td>
        //     <td style='color:#03a9f4; font-size:30px;'>price</td>
        //     <td style='color:#03a9f4; font-size:30px;'>logo</td>
        //     </tr>";
        //     while ($row=mysql_fetch_array($r)) 
        //     {

        //         $name=$row['name'];
        //         $price=$row['price'];
        //         $logo= '../img/product-images/'.$row['logo'];
        //         echo "<tr>
        //         <td style='color:#40739e; font-size: 20px;'>$name</td>
        //         <td style='color:#40739e; font-size: 20px;'>$price</td>
        //         <td style='color:#40739e; font-size: 20px;'><img width='100%' src='$logo'/></td>
        //         </tr>"; 
        //     }


        //       echo "</table></center>"; 

            ?>
        </body>
    </html>