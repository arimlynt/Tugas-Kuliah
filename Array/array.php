<!DOCTYPE html>

<head>
    <title>Checkbox Dengan Array</title>
</head>

<body>
    <?php
    $matkul = array("Dasar Akuntansi", "Manajemen Umum", "Akuntansi Biaya", "Visual Basic", "Perpajakan", "Sistem Operasi", "Bahasa Inggris", "Tugas Akhir", "Etika Profesi", "Workshop I");
    ?>
    <form method="post" action="prosesarray.php">
        <p>Pilih Mata kuliah:</p>
        <?php foreach ($matkul as $mat) { ?>
            <input type="checkbox" name="mk[]" value="<?php echo $mat; ?>" /><?php echo $mat; ?><br />
        <?php } ?>
        <p><input type="submit" name="submit" value="PILIH" /></p>
    </form>
</body>

</html>