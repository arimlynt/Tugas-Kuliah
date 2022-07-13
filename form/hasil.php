<?php

    $panjang = $_POST["panjang"];
    $lebar = $_POST["lebar"];

    $luas = $panjang * $lebar;

    echo "hasil luasnya adalah : ";
    echo "<br>";
    echo "$panjang x $lebar = $luas";

?>