<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gaji</title>
</head>
<body>
    <fieldset>
        <legend><h1>Form Gaji</h1></legend>
        <form action="gajipro.php" method="post">
            <label for="">Nama Pegawai</label>
            <input type="text" name="nama" required><br><br>
            <label for="">Nip</label>
            <input type="number" name="nip" required><br><br>
            <label for="">Alamat</label>
            <textarea name="alamat"></textarea><br><br>
            <label for="">Jumlah Hari Kerja</label>
            <input type="number" name="jmlhr" max="30" required><br><br>
            <input type="submit" value="Simpan" name="proses">
        </form>
    </fieldset>
</body>
</html>