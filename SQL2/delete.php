<html>
    <head>
        <style>
             body
            {
                margin: 0px;
                padding: 0px;
                background-image: url(bg-1.jpg);
            }
            span
            {
                color:#000080;
                font-size: 28px;
                text-transform: capitalize;
                float: left;
                margin: 18px;
                margin-left: 150px;
                
            }
            .content
            {
                width: 600px;
                height: 300px;
                margin: 100px 320px;
                 margin-top: 50px;
                float: left;
                font-size: 16px;
                padding: 50px;
            }
            .content label
            {
                margin:10px 20px; 
                font-size: 30px;
                text-transform: capitalize;
                color:#000080;
            }
            .content input[type=text]
            {
                margin: 10px 50px;
                padding: 10px;
                width: 500px;
            }
             .content input[type=submit]
            {
                margin: 50px 180px;
                margin-bottom: 30px;
                padding: 10px;
                width: 200px;
                font-size: 25px;
                color:#000080;
                background-color: 
            }
            .content a
            {
                 text-decoration: none;
                text-transform: capitalize;
                font-size: 18px;
                 
            }
            .content a:hover
            {
                color: #152E99;
                font-size: 25px;
            }
        </style>
    </head>
    <body>
        <div class="content">
            <form action="delete.php" method="POST">
                <label>current name:</label><br/>
                <input type="text" name="n" value="">
                <input type="submit"  value="Delete"><br/>
                <a href="../product.php">back</a>
            </form>
        </div>
         <?php
        if(isset($_POST['n'])){
            $n=$_POST['n'];
           require("connect2.php");
            $r=mysql_query("DELETE FROM product WHERE NAME='$n'");
            if ($r==true) {
                #new code...
                echo "<html><head><script>alert('Saved');</script></head><body></body>";#new code
            }
            else{
                echo "<html><head><script>alert('Failed');</script></head><body></body>";#new code
            }
            
        }
    


        ?>
    </body>
</html>