<?php
$file = file_get_contents('./people.txt', true);
$file = file_get_contents('./people.txt', FILE_USE_INCLUDE_PATH);