
<html>
<head>
    <title>Shop</title>
   
    <link rel="stylesheet" href="css/main.css" >
    <script>
            function check(){
                e=document.getElementById('e').value;
                // e=document.getElementById('e').value;
                p=document.getElementById('p').value;
                
                y= /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/; 
                z= /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/;
 /* for password/^
  (?=.*\d)          // should contain at least one digit
  (?=.*[a-z])       // should contain at least one lower case
  (?=.*[A-Z])       // should contain at least one upper case
  [a-zA-Z0-9]{8,}   // should contain at least 8 from the mentioned characters
$/
*/
          if(y.test(e)==true) {
                   document.getElementById('c').innerHTML="<div style='color:white ;'>failed email</div>";
                }
          if(z.test(p)==true) {
                    document.getElementById('d').innerHTML="<div style='color:white ;'>password should contain atleast one number and one special character</div>";
                }
            }
        </script>

</head>
<body>
    <?php
                
    require_once("SQL/connect.php");#new code
    
        if(isset($_POST['submit'])){
            $email = $_POST['email'];
            $password = $_POST['password'];
            
       $getUser=mysql_query("SELECT * FROM users WHERE email='".$email."' 
       AND password= '".$password."'",$connect);#new code
            
        
            if ($row=mysql_fetch_array($getUser)) {
                
                header("Location: users.php");
            }
            else{
                echo"<script>alert('Invalid user')</script>";
            }
           
        }

    


        ?>

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
            <a href="users.php">
            <input type="submit" name="submit" value="Submit" onclick="check();">
            </a>
        </form>
    </div>

        <div class="clear"></div>                  
   </body>
</html>