<?php
if( empty($_POST) && empty($_FILES)) {
    if(isset($_SERVER['CONTENT_LENGTH'])) {
        $POST_MAX_SIZE = ini_get('post_max_size');
        if(!empty($POST_MAX_SIZE)) {
            $mul = substr($POST_MAX_SIZE, -1);
            $mul = ($mul == 'M' ? 1048576 :(
            $mul == 'K' ? 1024 :($mul == 'G' ? 1073741824 : 1)));
            if ($_SERVER['CONTENT_LENGTH'] > $mul*(int)$POST_MAX_SIZE &&
                $POST_MAX_SIZE) {
                print "Fisier prea mare! Ati depasit limita maxima permisa";
            }
        } else {
            print "Eroare nespecificata (probabil fisierul este prea mare)";
        }
    } else {
        print "Apasati pe 'Trimite fisier' pentru a face upload!";
    }
} else {
    if( $_FILES['fisier']['error'] > 0 ) {
        print "A intervenit o eroare (#{$_FILES['fisier']['error']})";
    } else {
        $uploaddir = dirname( __FILE__ ). DIRECTORY_SEPARATOR .
            'upload' . DIRECTORY_SEPARATOR;
        $uploadfile = $uploaddir . basename($_FILES['fisier']['name']);
        if (move_uploaded_file($_FILES['fisier']['tmp_name'], $uploadfile))
        {
            print "Fisier incarcat cu succes!";
        } else {
            print "Nu s-a putut incarca fisierul";
        }
    }
}