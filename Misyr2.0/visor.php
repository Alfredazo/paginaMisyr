<?php
include('clases/SimpleImage.php');
$src = $_GET['src'];
try {
    $img = new abeautifulsite\SimpleImage($src);
    $img->thumbnail(800,500);
    $img->output();
} catch(Exception $e) {
    echo 'Error: ' . $e->getMessage();
}

?>
