<html>
    <head>
        <link rel="stylesheet" href="nav.css" >
    </head>
    <body>
        <br><br><br><br><br><br>
        <?php
            require_once("connect.php");
       $r=mysql_query("SELECT * FROM users");
        $x=mysql_num_rows($r); 
        echo "<center><table border='2' cellspacing='0' cellpadding='50' align='center' style='border:5px solid rgba(0,0,0,.5); background-color:lelaic;'>
        <tr>
        <td style='color:#03a9f4; font-size: 30px;'>Name</td>
        <td style='color:#03a9f4; font-size:30px;'>Password</td>
        </tr>";
        while ($row=mysql_fetch_array($r)) 
        {

            $name=$row['name'];
            $password=$row['password'];
            echo "<tr>
            <td style='color:#40739e; font-size: 20px;'>$name</td>
            <td style='color:#40739e; font-size: 20px;'>$password</td>
            </tr>"; 
        }


          echo "</table></center>"; 

        ?>
    </body>
</html>