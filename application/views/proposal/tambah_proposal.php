<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politeknik Negeri Bali</title>
</head>
<body>
    <h1>Tambah Proposal</h1>
    <table>
        <form action="<?php echo base_url('cproposal/tambahData')?>" method="POST" enctype="multipart/form-data">
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Judul</td>
                <td>:</td>
                <td><input type="text" name="judulproposal"></td>
            </tr>
            <tr>
                <td>Proposal</td>
                <td>:</td>
                <td><input type="file" name="proposal"></td>
            </tr>
            <tr>
                <td>Surat Kesediaan Pembimbing 1</td>
                <td>:</td>
                <td><input type="file" name="suratkesediaanpembimbing1"></td>
            </tr>
            <tr>
                <td>status</td>
                <td>:</td>
                <td><input type="text" name="statusregistrasi"></td>
            </tr>
            <tr>
                <td>Model Proposal</td>
                <td>:</td>
                <td><input type="text" name="modelproposal"></td>
            </tr>
            <tr>
                <td><button type="submit">Simpan</button></td>
            </tr>
        </form>
    </table>
</body>
</html>