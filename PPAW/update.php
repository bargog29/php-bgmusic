<?php

$user  = "root";
$pass  = "oracle";
$dbh   = new PDO('mysql:host=localhost;dbname=bgmusic', $user, $pass);

$stmt  = $dbh->query("describe produs");
$stmt->execute();
$data2  = $stmt->fetchAll();
if(isset($_POST["idupdate"]))
{
    $id=$_POST["id"];
    echo $id;
    $stmt4 = $dbh->query("select * from produs where id_produs='$id'");
    $stmt4->execute();
    $data  = $stmt4->fetch();

}

   if(isset($_POST["updatebutton"]))
   {    $query="update produs set ";
    $arrays=[];
    foreach ($data2 as $row)
    {
        $query.=$row['Field']."=?,";
        $arrays[]=$_POST[$row['Field']];
    }
    $query=substr($query, 0, -1);
    $query.=" where ".$data2[0]['Field']."=?";
    echo($query); 
    $arrays[]=$_POST[$data2[0]['Field']];
    foreach ($arrays as $row)
    {
        echo($row);
    }
    $stmt5  = $dbh->prepare($query);
  
    
    $stmt5->execute($arrays);


    header('Location:http://localhost/PPAW/products.php');
    $sql2 = "INSERT INTO bgmusic.comistoric(data,query) VALUES
            (CURRENT_TIMESTAMP(),
            \"cont:admin,operatia:UPDATE,tabela:produs,comanda:$query.\")";

$dbh->exec($sql2);
   }
        

    
?>


<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="style2.css"/>
        <link rel="icon" type="image/x-icon" href="resources/favicon.ico">
        <title>Main Menu</title>
    </head>
    <body>
    
       <form method="POST" action="">

     
      
       
        <?php foreach ($data2 as $value) { ?>
                        <div>
            <label>
                            <?= $value['Field'] ?>
        </label>

        <input type="text" name="<?=$value['Field'] ?>" value="<?= $data[$value['Field']]?>">
        </div>

        <?php } ?>

        <button type="submit" class="updatebutton" name="updatebutton">Update</button>
        <input type="hidden" name="id" value="<?=$row[0]?>">
        

</form>
        
    </body>
</html>