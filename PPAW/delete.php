<?php
    include('../PPAW/config.php');
    if(isset($_POST['iddelete']))
    {
        $id = $_POST['id'];
        //$idccont = $_POST['id_cont']
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete page</title>
</head>
<body>
    <form action="" method="post">
        <p>Are you sure you want to delete this item -> "<?=$id?>"?</p>
        <div class="butoane">
        <input type="submit" name="confirm" value="Da">
        <input type="submit" name="confirm" value="Nu">
        </div>
        <input type="hidden" name='idprod' value="<?=$id?>">
    </form>
</body>
</html>
<?php
    if(isset($_POST['confirm']))
    {
        $confirm=$_POST['confirm'];
        if($confirm=="Da")
            {
            $idprod = $_POST['idprod'];
            
            // $sql3 = "SELECT sysdate()";
            // $date = $dbh->exec($sql13);
            $sql2 = "INSERT INTO bgmusic.comistoric(data,query) VALUES
            (CURRENT_TIMESTAMP(),
            \"cont:admin,operatia:DELETE,tabela:produs,comanda:DELETE FROM bgmusic.produs WHERE id_produs=$idprod.\")";

            $sql1 = "DELETE FROM bgmusic.produs WHERE id_produs=$idprod";
            $dbh->exec($sql1);
            $dbh->exec($sql2);
            header('Location: products.php');
        }
        else
        {
            header('Location: products.php');
        }
    }
?>