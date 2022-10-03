<?php
if (isset($_POST['nume'])) {
    $dat_got = $_POST['nume'];
    if(get_magic_quotes_gpc()) { $dat_got = stripslashes($dat_got); }
    $dat_send = array($dat_got=>array('data 1', 'data 2', 'data 3'));
    $dat_send = json_encode($dat_send);
    if(!get_magic_quotes_gpc()) { $dat_send = addslashes($dat_send); }
    echo $dat_send;
}