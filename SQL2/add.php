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
                <input type="text" name="n" value="">
                <label>price:</label><br/>
                <input type="text" name="p" value="">
                <label>logo:</label>
                <input type="file" name="photo">
                <br><br><br>
                <label>category:</label><br/>
                <input type="text" name="t" value="">
                
                <input type="submit"value="Save"><br/>
                <a href="../product.php">back</a>
            </form>
        </div>
        <?php
        if(isset($_POST['n'])==true){
            $n=$_POST['n'];
            $p=$_POST['p'];            
            $photoName = $_FILES["photo"]['name'];  
            move_uploaded_file($_FILES['photo']['tmp_name'], '../img/product-images/'.$photoName);
            
            $t=$_POST['t'];
            require("connect2.php");
            
            $r=mysql_query("INSERT INTO product (name, price, logo, category) VALUES('".$n."','".$p."','".$photoName."','".$t."')")
                or die(mysql_error());
            
            if ($r==true) {
                # code...
                echo "<html><head><script>alert('saved');</script></head><body></body>";
            }
            else{
                echo "<html><head><script>alert('failed');</script></head><body></body>";
//                echo $r.getMessage();
            }
            
        }
    


        ?>
    </body>
</html>