<?php
$name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_SPECIAL_CHARS);

if($name) {
    $newName = strtoupper($name);
    $file = file_get_contents('file.txt');
    $file .= "<li>
    $newName
    </li>";
    file_put_contents('file.txt', $file);
    header('location: main.php');
    exit;
} else {
    header('location: main.php');
    exit();
}

