<?php
if (isset($_POST['test'])) {
    $sir = $_POST['test'];
    echo 'Textul "<i>' . $sir . '"</i> contine ' . strlen($sir) . ' caractere si ' . str_word_count($sir, 0) . ' cuvinte.';
}