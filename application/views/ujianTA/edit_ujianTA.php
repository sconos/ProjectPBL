<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politeknik Negeri Bali</title>
</head>
<body>
    <h1>Edit ujianTA</h1>
    <table>
        <form action="<?php echo base_url('cUjianTA/edit')?>" method="POST" enctype="multipart/form-data">
            <td>Waktu</td>
                <td>:</td>
                <td><input type="date" name="waktu" value="<?php echo $ujianTA['waktu'] ?>"></td>
            </tr>
            <tr>
                <td>Tempat</td>
                <td>:</td>
                <td><input type="text" name="tempat" value="<?php echo $ujianTA['tempat'] ?>"></td>
            </tr>
            <tr>
                <td>Berita Acara</td>
                <td>:</td>
                <td><input type="text" name="urlberitaacara" value="<?php echo $ujianTA['urlberitaacara'] ?>"></td>
            </tr>
            <tr>
                <td>Jenis Ujian</td>
                <td>:</td>
                <td><input type="text" name="jenisujian" value="<?php echo $ujianTA['jenisujian'] ?>"></td>
            </tr>
            <tr>
                <td>Tugas Akhir</td>
                <td>:</td>
                <td><input type="text" name="id_TA" value="<?php echo $ujianTA['id_TA'] ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="kodeujian" value="<?php echo $ujianTA['kodeujian'] ?>"></td>
            </tr>
            <tr>
                <td><button type="submit">Simpan</button></td>
            </tr>
        </form>
    </table>
</body>
</html>