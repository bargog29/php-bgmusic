<?php
if (isset($_GET['test'])) {
    $sir = $_GET['test'];
    echo 'Textul "<i>' . $sir . '"</i> contine ' . strlen($sir) . ' caractere si ' . str_word_count($sir, 0) . ' cuvinte.';
}