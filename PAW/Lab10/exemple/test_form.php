<?php
if (isset($_POST['nume']) && isset($_POST['mesaj'])) {
    $nume = $_POST['nume'];
    $mesaj = $_POST['mesaj'];
    if (strlen($nume)>0 && strlen($mesaj)>0) {
        echo 'Bine ai venit <b>'. $nume. '</b><br />Mesajul pe care ti-l transmiti este "<i>'. $mesaj. '</i>"';
    }
    else {
        echo 'Completati toate campurile din formular';
    }
}