<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politeknik Negeri Bali</title>
</head>
<body>
    <h1>Tambah Ujian Proposal</h1>
    <table>
        <form action="<?php echo base_url('cUproposal/tambahData')?>" method="POST" enctype="multipart/form-data">
            <tr>
                <td>Kode Ujian</td>
                <td>:</td>
                <td><input type="text" name="kodeujian"></td>
            </tr>
            <tr>
                <td>Waktu</td>
                <td>:</td>
                <td><input type="datetime-local" name="waktu"></td>
            </tr>
            <tr>
                <td>Tempat</td>
                <td>:</td>
                <td><input type="text" name="tempat"></td>
            </tr>
            <tr>
                <td>Berita Acara</td>
                <td>:</td>
                <td><input type="text" name="beritaacara"></td>
            </tr>
            <tr>
                <td>Proposal</td>
                <td>:</td>
                <td><input type="text" name="id_proposal"></td>
            </tr>
            <tr>
                <td><button type="submit">Simpan</button></td>
            </tr>
        </form>
    </table>
</body>
</html>