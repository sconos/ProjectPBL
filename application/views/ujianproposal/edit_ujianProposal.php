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
        <form action="<?php echo base_url('cUProposal/edit')?>" method="POST" enctype="multipart/form-data">
            <tr>
                <td>Waktu</td>
                <td>:</td>
                <td><input type="date" name="waktu" value="<?php echo $ujianProposal['waktu'] ?>"></td>
            </tr>
            <tr>
                <td>Tempat</td>
                <td>:</td>
                <td><input type="text" name="tempat" value="<?php echo $ujianProposal['tempat'] ?>"></td>
            </tr>
            <tr>
                <td>Berita Acara</td>
                <td>:</td>
                <td><input type="text" name="beritaacara" value="<?php echo $ujianProposal['beritaacara'] ?>"></td>
            </tr>
            <tr>
                <td>Proposal</td>
                <td>:</td>
                <td><input type="text" name="id_proposal" value="<?php echo $ujianProposal['id_proposal'] ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="kodeujian" value="<?php echo $ujianProposal['kodeujian'] ?>"></td>
            </tr>
            <tr>
                <td><button type="submit">Simpan</button></td>
            </tr>
        </form>
    </table>
</body>
</html>