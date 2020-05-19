<div class="container-fluid">
    <h4>Detail Pesanan <div class="btn btn-sm btn-primary">No Id_inv_wis: <?php echo $inv_wis?></div></h4>
    <table class ="table table-bordered table-striped table-hover">
    <tr>
        <th>ID Wisata</th>
        <th>Nama Wisata</th>
        <th>Jumlah Pesanan</th>
        <th>Harga Satuan</th>
        <th>Sub-Total</th>
    </tr>
    <?php
    $total= 0;
    foreach ($pes_wis as $pes_wis) :
        $subtotal=$pes_wis->jumlah * $pes_wis->wis_hrg_weekday;
        $total+=$subtotal;
    ?>
    <tr>
        <td><?php echo $pes_wis->wis_id ?></td>
        <td><?php echo $pes_wis->wis_nama ?></td>
        <td><?php echo $pes_wis->jumlah ?></td>
        <td align="right"><?php echo number_format($pes_wis->wis_hrg_weekday,0,',','.') ?></td>
        <td align="right"><?php echo number_format($subtotal,0,',','.') ?></td>
    </tr>
    <tr>
            <td colspan="4">Grandtotal</td>
            <td align="right">Rp.<?php echo number_format($total,0,',','.') ?></td>
        </tr>

    <?php endforeach ?>

    </table>
    <a href="<?php echo base_url('C_admin/inv_wis') ?>"> <div class="btn btn-sm btn-primary">kembali</div> </a>
</div>