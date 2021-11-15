    <html>
        <head>
        <title>Shop</title>
        <link rel="icon" href="../img/favicon.png" sizes="192x192" /> 
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
                    <label>current email:</label><br/>
                    <input type="text" name="email" value="">
                    <input type="submit"  value="Delete"><br/>
                    <a href="../users.php">back</a>
                </form>
            </div>
<?php
                // Create connection
            require("connect.php");

            
            if(isset($_POST['email'])){ 
                $e=$_POST['email'];   
            try {
            // set the PDO error mode to exception
                $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            // sql to delete a record
                $dsn = "DELETE FROM users WHERE  email='$e'";
    
            // use exec() because no results are returned
                $success = $connect->exec($dsn);
                if($success){
                    echo "<html><head><script>alert('Deleted');
                    window.location='../users.php';</script></head><body></body>";
                    
                }else{
                    echo "<html><head><script>alert('Error');
                    window.location='delete.php';</script></head><body></body>";
            
                }
            } catch(PDOException $e) {
                    echo $dsn . "<br>" . $e->getMessage();
                    
                }
                $connect = null;
            }
            // if(isset($_POST['n'])){
            //     $n=$_POST['n'];
            // require("connect.php");
            //     $r=mysql_query("DELETE FROM users WHERE NAME='$n'");
            //     if ($r==true) {
            //         #new code...
            //         echo "<html><head><script>alert('Saved');</script></head><body></body>";#new code
            //     }
            //     else{
            //         echo "<html><head><script>alert('Failed');</script></head><body></body>";#new code
            //     }
                
            // }
        


            ?>
        </body>
    </html>