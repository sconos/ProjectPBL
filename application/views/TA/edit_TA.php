<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politeknik Negeri Bali</title>
</head>
<body>
    <h1>Edit Tugas Akhir</h1>
    <table>
        <form action="<?php echo base_url('cTA/edit')?>" method="POST" enctype="multipart/form-data">
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="nim" value="<?php echo $TA['nim'] ?>" readonly></td>
            </tr>
            <tr>
                <td>judul</td>
                <td>:</td>
                <td><input type="text" name="judulTA" value="<?php echo $TA['judulTA'] ?>"></td>
            </tr>
            <tr>
                <td>Tugas Akhir</td>
                <td>:</td>
                <td><input type="text" name="tugasakhir"></td>
            </tr>
            <tr>
                <td>Surat Puas Pembimbing</td>
                <td>:</td>
                <td><input type="text" name="suratpuaspembimbing" value="<?php echo $TA['suratpuaspembimbing'] ?>"></td>
            </tr>
            <tr>
                <td>Surat Kesediaan Pembimbing 2</td>
                <td>:</td>
                <td><input type="text" name="suratkesediaanpembimbing2" value="<?php echo $TA['suratkesediaanpembimbing2'] ?>"></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td><input type="text" name="statusregistrasi" value="<?php echo $TA['statusregistrasi'] ?>"></td>
            </tr>
            <tr>
                <td>Model Tugas Akhir</td>
                <td>:</td>
                <td><input type="text" name="modelTA" value="<?php echo $TA['modelTA'] ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_TA" value="<?php echo $TA['id_TA'] ?>"></td>
            </tr>
            <tr>
                <td><button type="submit">Simpan</button></td>
            </tr>
        </form>
    </table>
</body>
</html>