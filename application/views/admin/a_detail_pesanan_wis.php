<div class="container-fluid">
    <h4>Detail Pesanan</h4>
    <table class ="table table-bordered table-striped table-hover">
    <tr>
        <th>ID produk</th>
        <th>Nama Produk</th>
        <th>Jumlah Pesanan</th>
        <th>Harga Satuan</th>
        <th>Sub-Total</th>
    </tr>
    <?php
    $total= 0;
    foreach ($pes_wis as $pes) :
        $subtotal=$pes->jumlah * $pes->produk_hrg;
        $total+=$subtotal;
    ?>
    <tr>
        <td><?php echo $pes->produk_id ?></td>
        <td><?php echo $pes->produk_nama ?></td>
        <td><?php echo $pes->jumlah ?></td>
        <td align="right"><?php echo number_format($pes->produk_hrg,0,',','.') ?></td>
        <td align="right"><?php echo number_format($subtotal,0,',','.') ?></td>
    </tr>
    

    <?php endforeach ?>
    <tr>
            <td colspan="4">Grandtotal</td>
            <td align="right">Rp.<?php echo number_format($total,0,',','.') ?></td>
        </tr>

    </table>
    <a href="<?php echo base_url('C_admin/inv_wis') ?>"> <div class="btn btn-sm btn-primary">kembali</div> </a>
</div>