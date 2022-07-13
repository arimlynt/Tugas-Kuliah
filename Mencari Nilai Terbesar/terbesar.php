<?php 
// $t = 30;
// echo "<p>waktu di server menunjuk jam : " . $t;
// echo ", dan otomatis akan muncul ucapan salam:</p>";
// if ($t < "10") {
//     echo "Selamat Pagi!";
// } elseif ($t < "15") {
//     echo "Selamat Siang!";
// } elseif ($t < "18") {
//     echo "Selamat Sore!";
// } elseif ($t < "19") {
//     echo "Selamat Petang!";
// } else {
//     echo "Selamat Malam!";
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
</head>
<body>
    <h1>masukkan angkanya</h1>
    <form action="prosesbesar.php" method="POST">
        1 : <input type="text" name="satu"> <br> <br>
        2 : <input type="text" name="dua"> <br> <br>
        3 : <input type="text" name="tiga"> <br> <br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>
