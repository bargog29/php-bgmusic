<!DOCTYPE html>
<html lang="en">
<head>
   <!-- <style>
      body {
        background-image: url('background.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: 100% 100%;
        
      }
      </style> -->
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>BGMusic</h1>
   <hr>

<div class="loginform">
   <form method="post" action="">
      <h3>LOGIN</h3>
      <br>
      <div class="login">
         <label for="username"><b>Username</b></label>
         <input type="username" name="user" required placeholder="Introdu user">
         <br><br>
         <label for="pass"><b>Password</b></label>
         <input type="password" name="pass" required placeholder="Introdu parola">
         <br><br>
         <input type="submit" value="Login" name="lgn">
      </div>
      <?php
      if(isset($_POST['lgn']))
      {
         include 'config.php';
         $username = $_POST['user'];
         $password = $_POST['pass'];
         $query = "SELECT *FROM user WHERE username='$username' AND nivel_acces IN(0,1,2)";
         $stmt = $dbh -> prepare($query);
         $stmt -> execute();
         $row = $stmt -> fetchAll();
         if(count($row)==1 && $row["0"]["nivel_acces"]==0)
            header('Location:admin_page.php');
         elseif(count($row)==1 && $row["0"]["nivel_acces"]==2)
            header('Location:client_page.php');
          elseif(count($row)==1 && $row["0"]["nivel_acces"]==1)
            header('Location:employee_page.php');
         else
            echo "Wrong account";
      }
      
      ?>
      <p>Don't have an account? <a href="register.php">Register now</a></p>
   </form>
</div>




</body>
</html>