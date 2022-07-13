<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operasi Matematika</title>
</head>
<body>
    <h2>Operasi Hitung Matematika Sederhana</h2>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <table>
            <tr>
                <td>Nilai A</td>
                <td>:</td>
                <td><input type="text" name="nilai_a"></td>
            </tr>
            <tr>
                <td>Nilai B</td>
                <td>:</td>
                <td><input type="text" name="nilai_b"></td>
            </tr>
            <tr>
                <td>Operasi</td>
                <td>:</td>
                <td>
                    <select name="operasi">
                        <option value="tambah">+</option>
                        <option value="kurang">-</option>
                        <option value="kali">*</option>
                        <option value="bagi">/</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="hitung" value="Hitung"></td>
            </tr>
        </table>
<?php 
if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
    function hitung($nilai_a, $nilai_b, $operator) {
        $hasil = 0;
        if ($operator == 'tambah') {
            $hasil = $nilai_a + $nilai_b;
        } else if ($operator == 'kurang') {
            $hasil = $nilai_a - $nilai_b;
        } else if ($operator == 'kali') {
            $hasil = $nilai_a * $nilai_b;
        } else if ($operator == 'bagi') {
            $hasil = $nilai_a / $nilai_b;
        }
        return $hasil;
    }
    $nilai_a = $_POST ['nilai_a'];
    $nilai_b = $_POST ['nilai_b'];
    $operator = $_POST ['operasi'];
    $hasil = hitung($nilai_a, $nilai_b, $operator);
    echo "hasil dari $nilai_a $operator $nilai_b adalah $hasil";
}
 
?>
    
</body>
</html>