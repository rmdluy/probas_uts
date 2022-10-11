<?php 
        session_start();
     ?>
 
     <form method="POST" >
        
        <input type="text" name="username" placeholder="username"> <br><br>
        <input type="password" name="password_kamu" placeholder="password"> <br><br>
        <input type="submit" name="masuk" value="login">
 
     </form>
 
    <?php 
        if(isset($_POST['masuk'])){
 
            $username = $_POST['username'];
            $password_kamu = $_POST['password_kamu'];
 
            if($username == 'user1'){
 
                if($password_kamu == '123'){
 
                    $_SESSION['user'] = $username;
                    header('location: user.php');
 
                }else{
                    echo "
                    <script>
                        alert(' PASSWORD SALAH ... !! ');
                    </script>
                ";
                }
 
            }else{
                echo "
                    <script>
                        alert(' USERNAME TIDAK TERDAFTAR..!! ');
                    </script>
                ";
            }
        }
 
     ?>


<!DOCTYPE html>

<html lang="en">

  <head>
    <title>Login USER</title>
    <link rel="stylesheet" href="login.css">
  </head>

  <body>
    
    <form id="login-form" method="post" target="_self">
      
        <label><a href="login-admin.php" id="style-2" data-replace="Login sebagai Admin?"><span>Login sebagai Admin?</span></a></p></label>
    </form>
    
  </body>

</html>