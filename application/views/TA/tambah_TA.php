<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politeknik Negeri Bali</title>
</head>
<body>
    <h1>Tambah Tugas Akhir</h1>
    <table>
        <form action="<?php echo base_url('cTA/tambahData')?>" method="POST" enctype="multipart/form-data">
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Judul</td>
                <td>:</td>
                <td><input type="text" name="judulTA"></td>
            </tr>
            <tr>
                <td>Tugas Akhir</td>
                <td>:</td>
                <td><input type="text" name="tugasakhir"></td>
            </tr>
            <tr>
                <td>Surat Puas Pembimbing</td>
                <td>:</td>
                <td><input type="text" name="suratpuaspembimbing"></td>
            </tr>
            <tr>
                <td>Surat Kesediaan Pembimbing 2</td>
                <td>:</td>
                <td><input type="text" name="suratkesediaanpembimbing2"></td>
            </tr>
            <tr>
                <td>status</td>
                <td>:</td>
                <td><input type="text" name="statusregistrasi"></td>
            </tr>
            <tr>
                <td>Model Tugas Akhir</td>
                <td>:</td>
                <td><input type="text" name="modelTA"></td>
            </tr>
            <tr>
                <td><button type="submit">Simpan</button></td>
            </tr>
        </form>
    </table>
</body>
</html>