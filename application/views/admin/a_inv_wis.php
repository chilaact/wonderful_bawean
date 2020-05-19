<br><br><br>
<div class="container-fluid">
    <h4>Invoice pemesanan wisata</h4>
    <table class ="table table-bordered table-striped table-hover">
        <tr>
            <th>id invoice wisata</th>
            <th>id user</th>
            <th>atasnama</th>
            <th>tgl_pesan</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($inv_wis as $inv):  ?>
        <tr>
            <td><?php echo $inv->id?></td>
            <td><?php echo $inv->us_id?></td>
            <td><?php echo $inv->atasnama?></td>
            <td><?php echo $inv->tgl_pesan?></td>
            <td><?php echo anchor('C_admin/detail_inv_wis/'.$inv->id,'<div class="btn btn-sm btn-primary">Detail</div>');  ?></td>

        </tr>
        <?php endforeach; ?>

    </table>
</div>