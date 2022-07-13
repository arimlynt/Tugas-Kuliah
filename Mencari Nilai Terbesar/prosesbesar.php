<?php
$satu = $_POST['satu'];
$dua = $_POST['dua'];
$tiga = $_POST['tiga'];

if( isset($_POST['submit']) ){
    if( $satu > $dua && $satu > $tiga ){
        echo "angka terbesar adalah $satu";
    } elseif( $dua > $satu && $dua > $tiga ){
        echo "angka terbesar adalah $dua";
    } elseif( $tiga > $satu && $tiga > $dua ){
        echo "angka terbesar adalah $tiga";
    } else {
        echo "angka terbesar adalah $satu";
    }
}


?>