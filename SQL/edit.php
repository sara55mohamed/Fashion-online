        <?php
            // Create connection with database
            require("connect.php");
            // Check connection
                try {
                    // set the PDO error mode to exception
                        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                }
                catch(PDOException $e) {
                    echo $dsn . "<br>" . $e->getMessage();
                    }
                // post variables
                if(isset($_POST['email'])){
                $email= isset($_POST['email']) ? $_POST['email'] : '';
                $n= isset($_POST['name']) ? $_POST['name'] : '';
                $p= isset($_POST['password']) ? $_POST['password'] : '';
                $t= isset($_POST['type']) ? $_POST['type'] : '';
                
                        // check fields are empty
                        if(empty($email) || empty($n)|| empty($p)|| empty($t)) {
                            echo  "<html><head><script>alert('Enter All fields Please');
                            window.location='edit.php';</script></head><body></body>";
                            // header("Location:../users.php");  
                        } 
                    else{
                    // Prepare statement
                        $dsn = "UPDATE users SET 
                        name='$n',
                        password='$p',
                        type='$t' WHERE email='$email'";
        
                    // execute the query
                    $success= $connect->exec($dsn);
                // echo a message to say the UPDATE succeeded
                        if($success){
                            echo "<html><head><script>alert('Update saved');
                            window.location='../users.php';</script></head><body></body>";
                        
                        }else{
                            echo "<html><head><script>alert('Error');
                            window.location='edit.php';</script></head><body></body>";
                            
                    }
                } 
                    }
                    
                    // if(isset($_POST['n'])){
                    //     $n=$_POST['n'];
                    //     $nn=$_POST['nn'];
                    // $np=$_POST['np'];
                    // require("connect.php");
                    //     $r=mysql_query("UPDATE users SET name='$nn', password='$np' WHERE name='$n'");#new code
                    //     if ($r==true) {
                    //         #new code...
                    //         echo "<html><head><script>alert('Saved');</script></head><body></body>";#new code
                    //     }
                    //     else{
                    //         echo "<html><head><script>alert('Failed');</script></head><body></body>";#new code
                    //     }
                        
                    // }
                    
                    
                


        ?>
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
                        <form action="edit.php" method="post">
                            <label>current email:</label><br/>
                            <input type="text" name="email" value="">
                            <label>new password:</label><br/>
                            <input type="text" name="password" value="">
                            <label>new name:</label><br/>
                            <input type="text" name="name" value="">
                            <label>new type:</label><br/>
                            <input type="text" name="type" value="">
                            <input type="submit" value="Edite"><br/>
                            <a href="../users.php">back</a>
                        </form>
                    </div>
                </body>
            </html>