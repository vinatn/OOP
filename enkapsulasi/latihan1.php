<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Keluarga</title>
</head>
<body>
    <fieldset>
        <h2>Data Keluarga</h2><hr>
        <form action="" method="post">
            <label for=""><b>Masukan Jumlah Anggota Keluarga</b></label><br><br>
            <input type="number" name="jmlh" min="0" required>
            <input type="submit" value="simpan" name="simpan">
            <input type="hidden" name="<?php echo $jmlh; ?>">
        </form>
        <?php
            if (isset($_POST['simpan'])) {
                $jmlh = $_POST['jmlh'];
                for ($i=1; $i <= $jmlh; $i++) { 
                    # code...
        ?>
        
        <form action="latpro1.php" method="post">
            <hr>
            <label for=""><b>Nama</b></label>
            <input type="text" name="nama[]" required>
            <label for=""><b>Nik</b></label>
            <input type="number" name="nik[]" min="0" required>
            <label for=""><b>Alamat</b></label>
            <textarea name="alamat[]" required></textarea>
            <label for=""><b>Umur</b></label>
            <input type="number" name="umur[]" min="0" required>
            <br><br>
            <?php } ?>
            <input type="submit" value="Proses" name="prosses">
        </form>
                
    </fieldset>
    <?php } ?>
</body>
</html>