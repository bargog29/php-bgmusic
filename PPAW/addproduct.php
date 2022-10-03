<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="addprod">
        <form method="post" action="">
            <div class="addproduct">
        <label for="Categorie"><b>Category: </b></label>
        <input type="text" name="category">
        <label for="Denumire"><b>Name: </b></label>
        <input type="text" name="prod_denumire">
        <label for="Greutate"><b>Weight(kg): </b></label>
        <input type="number" name="prod_greutate">
        <label for="Garantie"><b>Warranty: </b></label>
        <input type="text" name="prod_garantie">
        <label for="Pret"><b>Price: </b></label>
        <input type="number" name="prod_pret">
        <input type="Submit" value="Add Product" name="adp">
        <button type="button" onclick="location.href='/PPAW/admin_page.php'">Back to Admin Page</button>
        </div>
        <?php
        if(isset($_POST['adp']))
      {
         include 'config.php';
         $categorie = $_POST['category'];
         $denumire = $_POST['prod_denumire'];
         $greutate = $_POST['prod_greutate'];
         $garantie = $_POST['prod_garantie'];
         $pret = $_POST['prod_pret'];
         try{
             $statement = "INSERT INTO produs (categorie,denumire,greutate,garantie,pret) VALUES('$categorie','$denumire','$greutate','$garantie','$pret')";
             $sql2 = "INSERT INTO bgmusic.comistoric(data,query) VALUES
             (CURRENT_TIMESTAMP(),
             \"cont:admin,operatia:INSERT,tabela:produs,
             comanda:INSERT INTO produs (categorie,denumire,greutate,garantie,pret) 
             VALUES('$categorie','$denumire','$greutate','$garantie','$pret').\")";
            $dbh->exec($sql2);
         $stmt1 = $dbh -> prepare($statement);
         $stmt1 -> execute();
         
         }
         catch(PDOException $e)
         {
             echo $e;
         }
         
      }
      ?>
        </form>
        
    </div>
</body>
</html>