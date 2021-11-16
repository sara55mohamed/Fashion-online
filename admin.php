        <?php
        //Authentication ---> to prove you in staff or not(admin or worker)*/
                    // ob_start();  
                        require("SQL/connect.php");#new code
                    //  $authorizedUsers  = "admin.php";
                    $t =null;
                            if(isset($_POST['submit'])){
                                $e = $_POST['email'];
                                $p = $_POST['password'];
                            //    $Role = $_POST['role'];
                    $getStaff = "SELECT * FROM users WHERE email='".$e."' AND password= '".$p."'";
                    
                        $getStaffDetails = $connect->prepare($getStaff);
                        $getStaffDetails -> execute();
                        
                                if ($row = $getStaffDetails->fetch(PDO::FETCH_ASSOC)) {
                                    //header("Location: ". $authorizedUsers);
                                    session_start();
                                    $_SESSION['email'] = $e;
                                    $_SESSION['password'] = $p;
                                    $_SESSION['type'] = $row['type'];

                                if($_SESSION['type'] == 'admin'){
                                    header("Location:users.php");
                                }elseif ($_SESSION['type'] == 'worker'){
                                header("Location:product.php");
                                }
                            }
                            else{
                                echo"<script>alert('Invalid Staff')</script>";
                            }
                        }
        ?> 
        <!DOCTYPE html>
        <html lang="en">
        <head>
        <title>Shop</title>
            <link rel="icon" href="img/favicon.png" sizes="192x192" /> 
            <link rel="stylesheet" type="text/css" href="css/main.css">

        </head>
        <body>
        <div class="box">
            
            <h2>Login</h2>
            
            <form method="post">
                
                <div class="inputBox">
                <input type="email" name="email" required="" id="e" >
                    <div id="c"></div>
                <label>Email</label>
                </div>
                <div class="inputBox" >
                    <input type="password" name="password" required="" id="p" >
                    <div id="d"></div>
                    <label>Password</label>
                    
                </div>
                <a>
                <button type="submit" name="submit" value="Submit">Sign in </button>
                </a>
            </form>
        </div>
        
        </body>
        
        
        </html>