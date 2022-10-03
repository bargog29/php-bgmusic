<!DOCTYPE html>
<html>
<body>

<h2>Formular</h2>

<form action="" method="post">
  <label for="Email">Email:</label><br>
  <input type="text" id="mail" name="mail" value=""><br>
  <label for="Password">Password:</label><br>
  <input type="text" id="pass" name="pass" value=""><br><br>
  <input type="submit" value="Submit">
</form> 

</body>
</html>

<?php
try {
    $user = "mb399";
    $pass = "cn25f6ea";
    $dbh = new PDO('mysql:host=mb399.cti.ugal.ro;dbname=mb399', $user, $pass);
    $stmt = $dbh->prepare("select * from utilizator where email=:email OR parola=:password");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $email = $_POST["mail"];
    $password = $_POST["pass"];
    $stmt->execute();
    $fetch = $stmt->fetch();
    //print_r($fetch);
    //print_r($stmt);

    print_r($fetch['cod_utilizator'] . '<br/>');
    print_r($fetch['nume'] . '<br/>');
    print_r($fetch['email'] . '<br/>');

    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>