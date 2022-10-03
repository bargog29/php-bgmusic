<?php
// corect, se utilizează un singur $
$catalog->items = array("10" => 1);
// invalid, deoarece $catalog->$items devine $catalog->""
$ catalog ->$items = array("10" => 1);
// corect, dar s-ar putea sa nu se obtina ceea ce s-a dorit:
// $catalog->$myvar devine $catalog->items
$myvar = 'items';
$catalog->$myvar = array("10" => 1);
?>
