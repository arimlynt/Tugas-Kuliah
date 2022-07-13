<?php
echo "Anda memilih Mata kuliah: <br/>";
$i = 1;
foreach ($_POST['mk'] as $data) {
    echo $i++ . ". " . $data . "<br/>";
}
