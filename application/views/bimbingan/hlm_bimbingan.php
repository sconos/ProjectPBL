
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politeknik Negeri Bali</title>
</head>
<body>
    <h1>Bimbingan</h1>
    <a href="tambah">Tambah</a>
    <table border="1">
        <tr>
            <td>NO</td>
            <td>id Pembimbing</td>
            <td>Pembahasan</td>
            <td>Tanggal</td>
            <td>status</td>
            <td>Action</td>
        </tr>
        <?php foreach($bimbingan->result_array() as $key):?>
        <tr>
            <?php $no=1; ?>
            <td><?php echo $no++; ?></td>
            <td><?php echo $key['id_pembimbing']?></td>
            <td><?php echo $key['pembahasan']?></td>
            <td><?php echo $key['tanggal']?></td>
            <td><?php echo $key['statusbimbingan']?></td>
            <td>
                <a href="<?php echo base_url('cBimbingan/ubah/'.$key['id_bimbingan'])?>">EDIT</a>|
                <a href="<?php echo base_url('cBimbingan/delete/'.$key['id_bimbingan'])?>">DELETE</a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
    
</body>
</html>