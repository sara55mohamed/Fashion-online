    <?php
                        // Create connection with database
                    require("connect2.php");
                    // identifiy variables
                    $dbname = "fashiononline";
                    $servername = "localhost";
                    $name = null;
                    $price = null;
                    $imageName = null;
                    $category = null;
                    // Check connection
                        try {
                            $dsn = "localhost" . $servername . ";fashiononline=" . $dbname;
                        } catch(PDOException $e) {
                            echo  $dsn . "<br>" . $e->getMessage();
                        }
                        if(isset($_POST['name'])==true){
                            $name= isset($_POST['name']) ? $_POST['name'] : '';
                            $price= isset($_POST['price']) ? $_POST['price'] : '';
                            $category= isset($_POST['category']) ? $_POST['category'] : '';
                            $imageName = $_FILES["logo"]['name'];
                            $imageData = file_get_contents($_FILES["logo"]["tmp_name"]);
                            $imageType = $_FILES["logo"]["type"];
                            move_uploaded_file($_FILES['logo']['tmp_name'], '../img/product-images/'.$imageName);
                            //prevent dublication
                            // $check_dublicate_email="SELECT email from users
                            // where email = '$e' ";
                            // $check_dublicate_emailStatement = $connect->prepare($check_dublicate_email); 
                            // $check_dublicate_emailStatement -> execute();
                            // if ($row= $check_dublicate_emailStatement->fetch(PDO::FETCH_ASSOC)){            
                            // echo  "<html><head><script>alert('Email already taken. please use another Email!');</script></head><body></body>";
                            // //header("Location:../sign-up.php");
                            // }else{
                            //     // check fields are empty
                            if(empty($name)|| empty($price)||empty($imageName)|| empty($category)) {
                            echo  "<html><head><script>alert('Enter All fields Please');</script></head><body></body>";
                            }else {        
                            // set the PDO error mode to exception
                            // $hashedPassword = password_hash($Password, PASSWORD_DEFAULT);
                            $dsn = "INSERT INTO product (name,price,logo,category)
                                VALUES ('".$name."','".$price."','".$imageName."','".$category."')";
                            // use exec() because no results are returned
                            // Do connect with query $db
                            $success= $connect->exec($dsn);
                            // tell staff with message is saved or not
                            if($success){
                                echo "<html><head><script>alert('saved');
                                window.location='../product.php';</script></head><body></body>";
                                
                            }else{
                                echo  "<html><head><script>alert('failed');
                                window.location='add.php';</script></head><body></body>";
                            
                            }
                        }
                            }
            //         if(isset($_POST['n'])==true){
            //             $n=$_POST['n'];
            //             $p=$_POST['p'];            
            //             $photoName = $_FILES["photo"]['name'];  
            //             move_uploaded_file($_FILES['photo']['tmp_name'], '../img/product-images/'.$photoName);
                        
            //             $t=$_POST['t'];
            //             require("connect2.php");
                        
            //             $r=mysql_query("INSERT INTO product (name, price, logo, category) VALUES('".$n."','".$p."','".$photoName."','".$t."')")
            //                 or die(mysql_error());
                        
            //             if ($r==true) {
            //                 # code...
            //                 echo "<html><head><script>alert('saved');</script></head><body></body>";
            //             }
            //             else{
            //                 echo "<html><head><script>alert('failed');</script></head><body></body>";
            // //                echo $r.getMessage();
            //             }
                        
            //         }
                


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
                    .content input[type=file]
                    {
                        font-size: 20px;
                        color:#152E99;
                        
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
                    <form method="post" action="add.php" enctype="multipart/form-data">
                        <label>name:</label><br/>
                        <input type="text" name="name" value="">
                        <label>price:</label><br/>
                        <input type="text" name="price" value="">
                        <label>logo:</label>
                        <input type="file" name="logo">
                        <br><br><br>
                        <label>category:</label><br/>
                        <input type="text" name="category" value="">
                        
                        <input type="submit"value="Save"><br/>
                        <a href="../product.php">back</a>
                    </form>
                </div>
            </body>
        </html>