
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politeknik Negeri Bali</title>
</head>
<body>
    <h1>Proposal</h1>
    <a href="tambah">Tambah</a>
    <table border="1">
        <tr>
            <td>NO</td>
            <td>NIM</td>
            <td>Judul Proposal</td>
            <td>Proposal</td>
            <td>Surat Kesediaan</td>
            <td>Status</td>
            <td>Model Proposal</td>
            <td>Action</td>
        </tr>
        <?php $no=1;?>
        <?php foreach($proposal->result_array() as $key):?>
        <tr>
            <?php $no; ?>
            <td><?php echo $no++; ?></td>
            <td><?php echo $key['nim']?></td>
            <td><?php echo $key['judulproposal']?></td>
            <td><?php echo $key['proposal']?></td>
            <td><?php echo $key['suratkesediaanpembimbing1']?></td>
            <td><?php echo $key['statusregistrasi']?></td>
            <td><?php echo $key['modelproposal']?></td>
            <td>
                <a href="<?php echo base_url('cProposal/ubah/'.$key['id_proposal'])?>">EDIT</a>|
                <a href="<?php echo base_url('cProposal/delete/'.$key['id_proposal'])?>">DELETE</a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
    
</body>
</html>