<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>BGMusic</h1>
<hr>
<div class="registerform">

    <form method="post">
        <div class="register">
            <label for="Nume"><b>Name: </b></label>
            <input type="nume" name="nume_register">
            <label for="User"><b>Username: </b></label>
            <input type="user" name="user_register">
            <label for="Pass"><b>Password: </b></label>
            <input type="password" name="pass_register">
            <input type="submit" value="Register" name="rgn">
            <button type="button" onclick="location.href='/PPAW/index.php'">Back to Login</button>
        </div>
        <?php
      if(isset($_POST['rgn']))
      {
         include 'config.php';
         $nume = $_POST['nume_register'];
         $username = $_POST['user_register'];
         $password = $_POST['pass_register'];
         $query = "SELECT *FROM user WHERE username='$username'";
         $stmt = $dbh -> prepare($query);
         $stmt -> execute();
         $row = $stmt -> fetchAll();
         $statement = "INSERT INTO user (nume,username,password,nivel_acces) VALUES('$nume','$username','$password','2')";
         if(count($row)==1)
            echo "Already exists";
         else
            {
                $stmt1 = $dbh -> prepare($statement);
                $stmt1 -> execute();
            }
      }
      
      ?>
    </form>

</div>


</body>
</html>