<?php
include('../PPAW/config.php');
    $stmt  = $dbh->query("describe comistoric");
    $stmt2 = $dbh->query("select * from comistoric");
    $stmt->execute();
    $data  = $stmt->fetchAll();
    $stmt2->execute();
    $data2 = $stmt2->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Command History</title>
    <style>
table, th, td {
  border: 1px solid;
}
th {
  background-color: #04AA6D;
  color: white;
}
</style>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
</div>

        <table>
            <thead>
                <tr>
                        <th>
                            <?= $data[0][0] ?>
                        </th>
                        <th>
                            <?= $data[1][0] ?>
                        </th>
                        <th>
                            <?= $data[2][0] ?>
                        </th>
                </tr>
                
            </thead>
             <tbody>
                <?php foreach ($data2 as $row) { ?>
                    <tr>
                            <td>
                                <?= $row['id_comanda'] ?>
                            </td>
                            <td>
                                <?= $row['data'] ?>
                            </td>
                            <td>
                                <?= $row['query'] ?>
                            </td>
                    </tr>
                <?php } ?>
            </tbody> 
        </table>
        <button type="button" onclick="location.href='/PPAW/admin_page.php'">Back to Admin Page</button>
</body>
</html>