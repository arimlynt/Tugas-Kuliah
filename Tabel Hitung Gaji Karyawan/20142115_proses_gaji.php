<?php

$gaji = $_POST['gaji'];
$tunjangan = $_POST['tunjangan'];
$bonus = $_POST['bonus'];

$gajikotor = $gaji + $tunjangan;
$Bonus = $bonus * $gajikotor / 100;
$gajibersih = $gajikotor + $Bonus;

// echo "<h1>Jumlah Gaji Karyawan</h1>";
// echo "-------------------------------------- <br>";
// echo "Gaji = Rp. $gaji,- <br>";
// echo "Tunjangan Jabatan = Rp. $tunjangan,- <br>";
// echo "Gaji Kotor Rp. $gajikotor,- <br>";
// echo "-------------------------------------- <br>";
// echo "Bonus Rp. $bonus% ($Bonus) <br>";
// echo "-------------------------------------- <br>";
// echo "Gaji Bersih = Rp. $gajibersih,- <br>";
// echo "-------------------------------------- <br>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jumlah Gaji</title>
</head>
<body>
    <center><h1>Jumlah Gaji Karyawan</h1></center>
    <table border="1" cellpadding="5" cellspacing="0" align="center">
        <tr>
            <td> Gaji </td>
            <td> <?php echo "Rp. $gaji,-"; ?> </td>
        </tr>
        <tr>
            <td>Tunjangan Jabatan</td>
            <td> <?php echo "Rp. $tunjangan,-"; ?> </td>
        </tr>
        <tr>
            <td>Gaji Kotor</td>
            <td> <?php echo "Rp. $gajikotor,-"; ?> </td>
        </tr>
        <tr>
            <td>Bonus</td>
            <td> <?php echo "Rp. $bonus% ($Bonus)"; ?> </td>
        </tr>
        <tr>
            <td>Gaji Bersih</td>
            <td> <?php echo "Rp. $gajibersih,-"; ?> </td>
        </tr>
    </table>
</body>
</html>