<?php
include('clases/SimpleImage.php');
$src = $_GET['src'];
try {
    $img = new abeautifulsite\SimpleImage($src);
    $img->thumbnail(300,200);
    $img->output();
} catch(Exception $e) {
    echo 'Error: ' . $e->getMessage();
}

?>
