<?php
if (isset($_GET['iteration'])) {
    $number = (int)$_GET["iteration"];
    if ($number > 1000) {
        $number = 1000;
    }
    for ($i = 0; $i < $number; $i++) {
        echo "Hello world, \$i vaut $i <br>";
    }
}