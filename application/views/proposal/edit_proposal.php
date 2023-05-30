<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politeknik Negeri Bali</title>
</head>
<body>
    <h1>Edit Proposal</h1>
    <table>
        <form action="<?php echo base_url('cProposal/edit')?>" method="POST" enctype="multipart/form-data">
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input type="text" name="nim" value="<?php echo $proposal['nim'] ?>" readonly></td>
            </tr>
            <tr>
                <td>judul</td>
                <td>:</td>
                <td><input type="text" name="judulproposal" value="<?php echo $proposal['judulproposal'] ?>"></td>
            </tr>
            <tr>
                <td>Proposal</td>
                <td>:</td>
                <td><input type="text" name="proposal" value="<?php echo $proposal['proposal'] ?>"></td>
            </tr>
            <tr>
                <td>Surat Kesediaan</td>
                <td>:</td>
                <td><input type="text" name="suratkesediaanpembimbing1" value="<?php echo $proposal['suratkesediaanpembimbing1'] ?>"></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td><input type="text" name="statusregistrasi" value="<?php echo $proposal['statusregistrasi'] ?>"></td>
            </tr>
            <tr>
                <td>Model Proposal</td>
                <td>:</td>
                <td><input type="text" name="modelproposal" value="<?php echo $proposal['modelproposal'] ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_proposal" value="<?php echo $proposal['id_proposal'] ?>"></td>
            </tr>
            <tr>
                <td><button type="submit">Simpan</button></td>
            </tr>
        </form>
    </table>
</body>
</html>