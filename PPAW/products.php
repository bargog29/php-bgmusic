
<?php
    $user  = "root";
    $pass  = "oracle";
    $dbh   = new PDO('mysql:host=localhost;dbname=bgmusic', $user, $pass);
    $stmt  = $dbh->query("describe produs");
    $stmt2 = $dbh->query("select * from produs");
    $stmt->execute();
    $data  = $stmt->fetchAll();
    $stmt2->execute();
    $data2 = $stmt2->fetchAll();
    $sql2 = "INSERT INTO bgmusic.comistoric(data,query) VALUES
    (CURRENT_TIMESTAMP(),
    \"cont:admin,operatia:SELECT,tabela:produs,comanda:select * from produs.\")";

$dbh->exec($sql2);

?>

<?php
    if(isset($_GET['fp']))
    {
        $user  = "root";
        $pass  = "oracle";
        $dbh   = new PDO('mysql:host=localhost;dbname=bgmusic', $user, $pass);
        $pretmin = $_GET['prod_pret_min'];
        $pretmax = $_GET['prod_pret_max'];
        $stmt3  = $dbh->query("DESCRIBE produs");
        $stmt4 = $dbh->query("SELECT *FROM produs 
                            WHERE pret >= '$pretmin' && pret <= '$pretmax'");
        $stmt3->execute();
        $data  = $stmt3->fetchAll();
        $stmt4->execute();
        $data2 = $stmt4->fetchAll();
        $sql2 = "INSERT INTO bgmusic.comistoric(data,query) VALUES
            (CURRENT_TIMESTAMP(),
            \"cont:admin,operatia:SELECT *FROM produs 
                            WHERE pret >= '$pretmin' && pret <= '$pretmax'.\")";

$dbh->exec($sql2);
    }
    elseif(isset($_GET['sap']))
        header('Location:products.php');
?>

<?php

if(isset($_GET['exportxls']))
{
include('../PPAW/config.php');
// Filter the excel data 
function filterData(&$str){ 
    $str = preg_replace("/\t/", "\\t", $str); 
    $str = preg_replace("/\r?\n/", "\\n", $str); 
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
} 
 
// Excel file name for download 
$fileName = "members-data_" . date('Y-m-d') . ".xls"; 
 
// Column names 
$fields = array('id_produs', 'categorie', 'denumire', 'greutate', 'garantie', 'pret'); 
 
// Display column names as first row 
$excelData = implode("\t", array_values($fields)) . "\n"; 
 
// Fetch records from database 
$stmt = $dbh -> query("SELECT *FROM produs");
$stmt->execute();
$data = $stmt->fetchAll();
if($data){ 
    // Output each row of the data 
    foreach($data as $row){ 
        $lineData = array($row['id_produs'], $row['categorie'], $row['denumire'], $row['greutate'], $row['garantie'], $row['pret']); 
        array_walk($lineData, 'filterData'); 
        $excelData .= implode("\t", array_values($lineData)) . "\n"; 
    } 
}else{ 
    $excelData .= 'No records found...'. "\n"; 
} 
 
// Headers for download 
header("Content-Type: application/vnd.ms-excel"); 
header("Content-Disposition: attachment; filename=\"$fileName\""); 
 
// Render excel data 
echo $excelData; 
 
exit;
}
?>

<?php
if(isset($_GET['exportpdf']))
{
    include('../PPAW/config.php');
require('fpdf181/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
 
$pdf->SetFont('Arial','B',12);	
$ret ="SELECT `COLUMN_NAME` FROM `INFORMATION_SCHEMA`.`COLUMNS`
WHERE `TABLE_SCHEMA`='bgmusic' AND `TABLE_NAME`='produs'";
$query1 = $dbh -> prepare($ret);
$query1->execute();
$header=$query1->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query1->rowCount() > 0)
{
foreach($header as $heading) {
foreach($heading as $column_heading)
$pdf->Cell(30,12,$column_heading,1);
}}
//code for print data
$sql = "SELECT *FROM produs";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row) {
$pdf->SetFont('Arial','',7);	
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(30,7,$column,1);
} }
$pdf->Output();
}

?>

<?php
    if(isset($_GET['fcg']))
    {
        $user  = "root";
        $pass  = "oracle";
        $dbh   = new PDO('mysql:host=localhost;dbname=bgmusic', $user, $pass);
        $categorie = $_GET['category'];
        $garantie = $_GET['garantie'];
        $stmt3  = $dbh->query("DESCRIBE produs");
        $stmt4 = $dbh->query("SELECT *FROM produs 
                            WHERE categorie LIKE \"%$categorie%\" AND garantie LIKE \"%$garantie%\"");
        $stmt3->execute();
        $data  = $stmt3->fetchAll();
        $stmt4->execute();
        $data2 = $stmt4->fetchAll();
        $sql2 = "INSERT INTO bgmusic.comistoric(data,query) VALUES
            (CURRENT_TIMESTAMP(),
            \"cont:admin,operatia:SELECT *FROM produs 
                            WHERE categorie LIKE \'%$categorie%\' AND garantie LIKE \'%$garantie%\'.\")";

$dbh->exec($sql2);
    }
    elseif(isset($_GET['sap']))
        header('Location:products.php');
?>

<?php
if(isset($_POST['id_asc']))
{
    $user  = "root";
    $pass  = "oracle";
    $dbh   = new PDO('mysql:host=localhost;dbname=bgmusic', $user, $pass);
    $stmt  = $dbh->query("describe produs");
    $stmt2 = $dbh->query("select * from produs ORDER BY id_produs ASC");
    $stmt->execute();
    $data  = $stmt->fetchAll();
    $stmt2->execute();
    $data2 = $stmt2->fetchAll();
    $sql2 = "INSERT INTO bgmusic.comistoric(data,query) VALUES
            (CURRENT_TIMESTAMP(),
            \"cont:admin,operatia:SELECT,ORDER BY,tabela:produs,comanda:select * from produs ORDER BY id_produs ASC.\")";

$dbh->exec($sql2);
}
elseif(isset($_POST['id_desc']))
{
    $user  = "root";
    $pass  = "oracle";
    $dbh   = new PDO('mysql:host=localhost;dbname=bgmusic', $user, $pass);
    $stmt  = $dbh->query("describe produs");
    $stmt2 = $dbh->query("select * from produs ORDER BY id_produs DESC");
    $stmt->execute();
    $data  = $stmt->fetchAll();
    $stmt2->execute();
    $data2 = $stmt2->fetchAll();
    $sql2 = "INSERT INTO bgmusic.comistoric(data,query) VALUES
            (CURRENT_TIMESTAMP(),
            \"cont:admin,operatia:SELECT,ORDER BY,tabela:produs,comanda:select * from produs ORDER BY id_produs DESC.\")";

$dbh->exec($sql2);
}  
elseif(isset($_POST['cat_asc']))
{
    $user  = "root";
    $pass  = "oracle";
    $dbh   = new PDO('mysql:host=localhost;dbname=bgmusic', $user, $pass);
    $stmt  = $dbh->query("describe produs");
    $stmt2 = $dbh->query("select * from produs ORDER BY categorie ASC");
    $stmt->execute();
    $data  = $stmt->fetchAll();
    $stmt2->execute();
    $data2 = $stmt2->fetchAll();
    $sql2 = "INSERT INTO bgmusic.comistoric(data,query) VALUES
            (CURRENT_TIMESTAMP(),
            \"cont:admin,operatia:SELECT,ORDER BY,tabela:produs,comanda:select * from produs ORDER BY categorie ASC.\")";

$dbh->exec($sql2);
}  
elseif(isset($_POST['cat_desc']))
{
    $user  = "root";
    $pass  = "oracle";
    $dbh   = new PDO('mysql:host=localhost;dbname=bgmusic', $user, $pass);
    $stmt  = $dbh->query("describe produs");
    $stmt2 = $dbh->query("select * from produs ORDER BY categorie DESC");
    $stmt->execute();
    $data  = $stmt->fetchAll();
    $stmt2->execute();
    $data2 = $stmt2->fetchAll();
    $sql2 = "INSERT INTO bgmusic.comistoric(data,query) VALUES
            (CURRENT_TIMESTAMP(),
            \"cont:admin,operatia:SELECT,ORDER BY,tabela:produs,comanda:select * from produs ORDER BY categorie DESC.\")";

$dbh->exec($sql2);
}
elseif(isset($_POST['den_asc']))
{
    $user  = "root";
    $pass  = "oracle";
    $dbh   = new PDO('mysql:host=localhost;dbname=bgmusic', $user, $pass);
    $stmt  = $dbh->query("describe produs");
    $stmt2 = $dbh->query("select * from produs ORDER BY denumire ASC");
    $stmt->execute();
    $data  = $stmt->fetchAll();
    $stmt2->execute();
    $data2 = $stmt2->fetchAll();
    $sql2 = "INSERT INTO bgmusic.comistoric(data,query) VALUES
            (CURRENT_TIMESTAMP(),
            \"cont:admin,operatia:SELECT,ORDER BY,tabela:produs,comanda:select * from produs ORDER BY denumire ASC.\")";

$dbh->exec($sql2);
}  
elseif(isset($_POST['den_desc']))
{
    $user  = "root";
    $pass  = "oracle";
    $dbh   = new PDO('mysql:host=localhost;dbname=bgmusic', $user, $pass);
    $stmt  = $dbh->query("describe produs");
    $stmt2 = $dbh->query("select * from produs ORDER BY denumire DESC");
    $stmt->execute();
    $data  = $stmt->fetchAll();
    $stmt2->execute();
    $data2 = $stmt2->fetchAll();
    $sql2 = "INSERT INTO bgmusic.comistoric(data,query) VALUES
            (CURRENT_TIMESTAMP(),
            \"cont:admin,operatia:SELECT,ORDER BY,tabela:produs,comanda:select * from produs ORDER BY denumire DESC.\")";

$dbh->exec($sql2);
} 

elseif(isset($_POST['g_asc']))
{
    $user  = "root";
    $pass  = "oracle";
    $dbh   = new PDO('mysql:host=localhost;dbname=bgmusic', $user, $pass);
    $stmt  = $dbh->query("describe produs");
    $stmt2 = $dbh->query("select * from produs ORDER BY greutate ASC");
    $stmt->execute();
    $data  = $stmt->fetchAll();
    $stmt2->execute();
    $data2 = $stmt2->fetchAll();
    $sql2 = "INSERT INTO bgmusic.comistoric(data,query) VALUES
            (CURRENT_TIMESTAMP(),
            \"cont:admin,operatia:SELECT,ORDER BY,tabela:produs,comanda:select * from produs ORDER BY greutate ASC.\")";

$dbh->exec($sql2);
}  
elseif(isset($_POST['g_desc']))
{
    $user  = "root";
    $pass  = "oracle";
    $dbh   = new PDO('mysql:host=localhost;dbname=bgmusic', $user, $pass);
    $stmt  = $dbh->query("describe produs");
    $stmt2 = $dbh->query("select * from produs ORDER BY greutate DESC");
    $stmt->execute();
    $data  = $stmt->fetchAll();
    $stmt2->execute();
    $data2 = $stmt2->fetchAll();
    $sql2 = "INSERT INTO bgmusic.comistoric(data,query) VALUES
            (CURRENT_TIMESTAMP(),
            \"cont:admin,operatia:SELECT,ORDER BY,tabela:produs,comanda:select * from produs ORDER BY greutate DESC.\")";

$dbh->exec($sql2);
} 

elseif(isset($_POST['gar_asc']))
{
    $user  = "root";
    $pass  = "oracle";
    $dbh   = new PDO('mysql:host=localhost;dbname=bgmusic', $user, $pass);
    $stmt  = $dbh->query("describe produs");
    $stmt2 = $dbh->query("select * from produs ORDER BY garantie ASC");
    $stmt->execute();
    $data  = $stmt->fetchAll();
    $stmt2->execute();
    $data2 = $stmt2->fetchAll();
    $sql2 = "INSERT INTO bgmusic.comistoric(data,query) VALUES
            (CURRENT_TIMESTAMP(),
            \"cont:admin,operatia:SELECT,ORDER BY,tabela:produs,comanda:select * from produs ORDER BY garantie ASC.\")";

$dbh->exec($sql2);
}  
elseif(isset($_POST['gar_desc']))
{
    $user  = "root";
    $pass  = "oracle";
    $dbh   = new PDO('mysql:host=localhost;dbname=bgmusic', $user, $pass);
    $stmt  = $dbh->query("describe produs");
    $stmt2 = $dbh->query("select * from produs ORDER BY garantie DESC");
    $stmt->execute();
    $data  = $stmt->fetchAll();
    $stmt2->execute();
    $data2 = $stmt2->fetchAll();
    $sql2 = "INSERT INTO bgmusic.comistoric(data,query) VALUES
            (CURRENT_TIMESTAMP(),
            \"cont:admin,operatia:SELECT,ORDER BY,tabela:produs,comanda:select * from produs ORDER BY garantie DESC.\")";

$dbh->exec($sql2);
} 

elseif(isset($_POST['pret_asc']))
{
    $user  = "root";
    $pass  = "oracle";
    $dbh   = new PDO('mysql:host=localhost;dbname=bgmusic', $user, $pass);
    $stmt  = $dbh->query("describe produs");
    $stmt2 = $dbh->query("select * from produs ORDER BY pret ASC");
    $stmt->execute();
    $data  = $stmt->fetchAll();
    $stmt2->execute();
    $data2 = $stmt2->fetchAll();
    $sql2 = "INSERT INTO bgmusic.comistoric(data,query) VALUES
            (CURRENT_TIMESTAMP(),
            \"cont:admin,operatia:SELECT,ORDER BY,tabela:produs,comanda:select * from produs ORDER BY pret ASC.\")";

$dbh->exec($sql2);
}  
elseif(isset($_POST['pret_desc']))
{
    $user  = "root";
    $pass  = "oracle";
    $dbh   = new PDO('mysql:host=localhost;dbname=bgmusic', $user, $pass);
    $stmt  = $dbh->query("describe produs");
    $stmt2 = $dbh->query("select * from produs ORDER BY pret DESC");
    $stmt->execute();
    $data  = $stmt->fetchAll();
    $stmt2->execute();
    $data2 = $stmt2->fetchAll();
    $sql2 = "INSERT INTO bgmusic.comistoric(data,query) VALUES
            (CURRENT_TIMESTAMP(),
            \"cont:admin,operatia:SELECT,ORDER BY,tabela:produs,comanda:select * from produs ORDER BY pret DESC.\")";

$dbh->exec($sql2);
} 
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="resources/favicon.ico">
        <link rel="stylesheet" href="style.css"/>
        <title>Products menu</title>
    </head>
    <h3>ADMIN MENU</h3>
    <br>
<body>

<div class="cautare">
<form method="get">
        <label for="Categorie"><b>Category: </b></label>
        <input type="text" name="category">
        <label for="Garantie"><b>Warranty: </b></label>
        <input type="text" name="garantie">
        <br>
        <input type="Submit" value="Show products with given details" name="fcg">
        <br>
        <label for="Pretminim"><b>Minimum Price: </b></label>
        <input type="number" name="prod_pret_min">
        <label for="Pretmaxim"><b>Maximum Price: </b></label>
        <input type="number" name="prod_pret_max">
        <br>
        <input type="Submit" value="Find Product" name="fp">
        <br>
        <input type="Submit" value="Show all products" name="sap">
</form>
</div>

        <table>
            <thead>
                <tr>
                        <th>
                            <?= $data[0][0] ?>
                            <form method="post" action="">
                                    <button type="submit" name="id_asc" >ASC</button>
                            </form>
                            <form method="post" action="">
                                    <button type="submit" name="id_desc" >DESC</button>
                            </form>
                        </th>
                        <th>
                            <?= $data[1][0] ?>
                            <form method="post" action="">
                                    <button type="submit" name="cat_asc" >ASC</button>
                            </form>
                            <form method="post" action="">
                                    <button type="submit" name="cat_desc" >DESC</button>
                            </form>
                        </th>
                        <th>
                            <?= $data[2][0] ?>
                            <form method="post" action="">
                                    <button type="submit" name="den_asc" >ASC</button>
                            </form>
                            <form method="post" action="">
                                    <button type="submit" name="den_desc" >DESC</button>
                            </form>
                        </th>
                        <th>
                            <?= $data[3][0] ?>
                            (kg)
                            <form method="post" action="">
                                    <button type="submit" name="g_asc" >ASC</button>
                            </form>
                            <form method="post" action="">
                                    <button type="submit" name="g_desc" >DESC</button>
                            </form>
                        </th>
                        <th>
                            <?= $data[4][0] ?>
                            <form method="post" action="">
                                    <button type="submit" name="gar_asc" >ASC</button>
                            </form>
                            <form method="post" action="">
                                    <button type="submit" name="gar_desc" >DESC</button>
                            </form>
                        </th>
                        <th>
                            <?= $data[5][0] ?>
                            (lei)
                            <form method="post" action="">
                                    <button type="submit" name="pret_asc" >ASC</button>
                            </form>
                            <form method="post" action="">
                                    <button type="submit" name="pret_desc" >DESC</button>
                            </form>
                        </th>
                </tr>
                
            </thead>
             <tbody>
                <?php foreach ($data2 as $row) { ?>
                    <tr>
                            <td>
                                <?= $row['id_produs'] ?>
                                <form method="post" action="update.php">
                                    <input type="hidden" name="id" value='<?= $row['id_produs'] ?>'>
                                    <button type="submit" name="idupdate" >Update</button>
                                </form>
                                <form method="post" action="delete.php">
                                    <input type="hidden" name="id" value='<?= $row['id_produs'] ?>'>
                                    <button type="submit" name="iddelete" >Delete</button>
                                </form>

                            </td>
                            <td>
                                <?= $row['categorie'] ?>
                            </td>
                            <td>
                                <?= $row['denumire'] ?>
                            </td>
                            <td>
                                <?= $row['greutate'] ?>
                                (kg)
                            </td>
                            <td>
                                <?= $row['garantie'] ?>
                            </td>
                            <td>
                                <?= $row['pret'] ?>
                                (lei)
                            </td>
                    </tr>
                <?php } ?>
            </tbody> 
        </table>
        <br>
        <button type="button" onclick="location.href='/PPAW/admin_page.php'">Back to Admin Page</button>
        <br><br>
        <form method="get" action="">
        <input type="submit" name="exportxls" value="Export XLS">
                </form>
        <form method="get" action="">
        <input type="submit" name="exportpdf" value="Export PDF">
        </form>
</body>
</html>