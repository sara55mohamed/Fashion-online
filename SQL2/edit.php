        <?php
                    // Create connection with database
                require("connect2.php");
                // Check connection
                    try {
                        // set the PDO error mode to exception
                            $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    }
                    catch(PDOException $e) {
                        echo $dsn . "<br>" . $e->getMessage();
                        }
                    // post variables
                    if(isset($_POST['name'])){
                    $oldName= isset($_POST['name']) ? $_POST['name'] : '';
                    $newName= isset($_POST['new_name']) ? $_POST['new_name'] : '';
                    $price= isset($_POST['price']) ? $_POST['price'] : '';
                    $category= isset($_POST['category']) ? $_POST['category'] : '';
                    // $imageName = $_FILES["logo"]['name'];
                    // $imageData = file_get_contents($_FILES["logo"]["tmp_name"]);
                    // $imageType = $_FILES["logo"]["type"];
                    // move_uploaded_file($_FILES['logo']['tmp_name'], '../img/product-images/'.$imageName);
                    $imageName = !empty($_FILES["logo"]['name']) ? $_FILES["logo"]['name'] : $_POST['logo'];

                    if(!empty($_FILES["logo"]['name'])){
                    $imageData = file_get_contents($_FILES["logo"]["tmp_name"]);
                    $imageType = $_FILES["logo"]["type"];
                    move_uploaded_file($_FILES['logo']['tmp_name'], '../img/product-images/'.$imageName);
                }
                            // check fields are empty
                            if(empty($oldName) || empty($newName) || empty($price)|| empty($imageName)|| empty($category)) {
                                echo  "<html><head><script>alert('Enter All fields Please');</script></head><body></body>";
                                // header("Location:../users.php");  
                            } 
                        else{
                        // Prepare statement
                            $dsn = "UPDATE product SET name='$newName',
                            price='$price',
                            category='$category',
                            logo='$imageName' WHERE name='$oldName'";
            
                        // execute the query
                        $success= $connect->exec($dsn);
                    // echo a message to say the UPDATE succeeded
                            if($success){
                                echo "<html><head><script>alert('Update saved');
                                window.location='../product.php';</script></head><body></body>";
                            
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
                    // require("connect2.php");
                    //     $r=mysql_query("UPDATE product SET name='$nn', price='$np' WHERE name='$n'");#new code
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
                            <label>current name:</label><br/>
                            <input type="text" name="name" value="">
                            <label>new name:</label><br/>
                            <input type="text" name="new_name" value="">
                            <label>new price:</label><br/>
                            <input type="text" name="price" value="">
                            <label>new Category:</label><br/>
                            <input type="text" name="category" value="">
                            <label>new Image:</label><br/>
                            <input type="file" name="logo" value="">
                            <input type="submit" value="Edite"><br/>
                            <a href="../product.php">back</a>
                        </form>
                    </div>
                    
                </body>
            </html>