<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
</head>
<body>
    <h1>Tambah Barang</h1>
    <table>
        <form action="<?php echo base_url('cbimbingan/tambahData')?>" method="POST">
            <tr>
                <td>ID Pembimbing</td>
                <td>:</td>
                <td><input type="text" name="id_pembimbing"></td>
            </tr>
            <tr>
                <td>Pembahasan</td>
                <td>:</td>
                <td><input type="text" name="pembahasan"></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td><input type="date" name="tanggal"></td>
            </tr>
            <tr>
                <td>status</td>
                <td>:</td>
                <td><input type="text" name="statusbimbingan"></td>
            </tr>
            <tr>
                <td><button type="submit">Simpan</button></td>
            </tr>
        </form>
    </table>
</body>
</html>