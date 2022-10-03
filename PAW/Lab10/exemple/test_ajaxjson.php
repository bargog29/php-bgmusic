<?php
if (isset($_POST['jsn'])) {
    $sir_json = $_POST['jsn'];
    if(get_magic_quotes_gpc()) { $sir_json = stripslashes($sir_json); }
    $arr_sir = json_decode($sir_json, true);
    echo '<pre>';
    var_export($arr_sir);
    echo '</pre>';
}