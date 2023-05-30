
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politeknik Negeri Bali</title>
</head>
<body>
    <h1>Ujian Proposal</h1>
    <a href="tambah">Tambah</a>
    <table border="1">
        <tr>
            <td>Kode Ujian</td>
            <td>Waktu</td>
            <td>Tempat</td>
            <td>Berita Acara</td>
            <td>Proposal</td>
            <td>Action</td>
        </tr>
        <?php foreach($ujianProposal->result_array() as $key):?>
        <tr>
            <td><?php echo $key['kodeujian']?></td>
            <td><?php echo $key['waktu']?></td>
            <td><?php echo $key['tempat']?></td>
            <td><?php echo $key['beritaacara']?></td>
            <td><?php echo $key['id_proposal']?></td>

            <td>
                <a href="<?php echo base_url('cUProposal/ubah/'.$key['kodeujian'])?>">EDIT</a>|
                <a href="<?php echo base_url('cUProposal/delete/'.$key['kodeujian'])?>">DELETE</a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
    
</body>
</html>