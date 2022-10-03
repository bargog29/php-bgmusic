<form action="upload_multiple.php" method="post" enctype="multipart/form-data">
    <p>Fisiere:
        <input type="file" name="pictures[]" />
        <input type="file" name="pictures[]" />
        <input type="file" name="pictures[]" />
        <input type="submit" value="Incarca" />
    </p>
</form>
<?php
if(!empty($_FILES))
    foreach ($_FILES["pictures"]["error"] as $key => $error) {
        if ($error > 0) {
            print "Eroare cu fisierul {$_FILES["pictures"]["tmp_name"][$key]}!";
        } else {
            $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
            $name = $_FILES["pictures"]["name"][$key];
            move_uploaded_file($tmp_name, "$name");
        }
    }
?>