<br><br><br>
<div class="container-fluid">
    <h4>Invoice pemesanan wisata</h4>
    <table class ="table table-bordered table-striped table-hover">
        <tr>
            <th>id invoice pesanan</th>
            <th>id user</th>
            <th>atasnama</th>
            <th>tgl_pesan</th>
            <th colspan="2" style="text-align: center;">Aksi</th>
        </tr>
        <?php foreach ($inv_wis as $inv):  ?>
        <tr>
            <td><?php echo $inv->id?></td>
            <td><?php echo $inv->us_id?></td>
            <td><?php echo $inv->atasnama?></td>
            <td><?php echo $inv->tgl_pesan?></td>
            <td><a class="btn btn-primary" href="<?= base_url('C_admin/detail_inv_wis/'.$inv->id); ?>">Edit</a></td>
            <td><a class="btn btn-danger" href="<?php echo ('./delete_inv/'.$inv->id) ?>">Delete</a></td>

        </tr>
        <?php endforeach; ?>

    </table>
</div>