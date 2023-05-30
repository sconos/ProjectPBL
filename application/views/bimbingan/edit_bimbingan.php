<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politeknik Negeri Bali</title>
</head>
<body>
    <h1>Edit Bimbingan</h1>
    <table>
        <form action="<?php echo base_url('cBimbingan/edit')?>" method="POST">
            <tr>
                <td>ID Pembimbing</td>
                <td>:</td>
                <td><input type="text" name="id_pembimbing" value="<?php echo $bimbingan['id_pembimbing'] ?>" readonly></td>
            </tr>
            <tr>
                <td>Pembahasan</td>
                <td>:</td>
                <td><input type="text" name="pembahasan" value="<?php echo $bimbingan['pembahasan'] ?>"></td>
            </tr>
            <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td><input type="date" name="tanggal" value="<?php echo $bimbingan['tanggal'] ?>"></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td><input type="text" name="statusbimbingan" value="<?php echo $bimbingan['statusbimbingan'] ?>"></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id_bimbingan" value="<?php echo $bimbingan['id_bimbingan'] ?>"></td>
            </tr>
            <tr>
                <td><button type="submit">Simpan</button></td>
            </tr>
        </form>
    </table>
</body>
</html>