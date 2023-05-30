
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politeknik Negeri Bali</title>
</head>
<body>
    <h1>Tugas Akhir</h1>
    <a href="tambah">Tambah</a>
    <table border="1">
        <tr>
            <td>NO</td>
            <td>NIM</td>
            <td>Judul Tugas Akhir</td>
            <td>Tugas Akhir</td>
            <td>Surat Puas Pembimbing</td>
            <td>Surat Kesediaan Pembimbing 2</td>
            <td>Status</td>
            <td>Model Tugas Akhir</td>
            <td>Action</td>
        </tr>
        <?php foreach($TA->result_array() as $key):?>
        <tr>
            <?php $no=1; ?>
            <td><?php echo $no++; ?></td>
            <td><?php echo $key['nim']?></td>
            <td><?php echo $key['judulTA']?></td>
            <td><?php echo $key['tugasakhir']?></td>
            <td><?php echo $key['suratpuaspembimbing']?></td>
            <td><?php echo $key['suratkesediaanpembimbing2']?></td>
            <td><?php echo $key['statusregistrasi']?></td>
            <td><?php echo $key['modelTA']?></td>
            <td>
                <a href="<?php echo base_url('cTA/ubah/'.$key['id_TA'])?>">EDIT</a>|
                <a href="<?php echo base_url('cTA/delete/'.$key['id_TA'])?>">DELETE</a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
    
</body>
</html>