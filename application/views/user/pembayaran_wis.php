<br><br><br><br>
<div class="container-fluid">
    <div class="alert alert-success">
        <p class="text-center align-middle">
        <?php 
    $grand_total = 0;

    if ($pesan_wis = $this->cart->contents()) {
        foreach ($pesan_wis as $items) {
            $grand_total= $grand_total + $items['subtotal']; 
        }
        echo "Total harga Pesanan Wisata: Rp".number_format($grand_total,0,',','.');
    ?>
    </p>
     </div><br><br>
     <h3>Masukkan Atasnama pemesan dan Tanggal pemesanan tiket Wisata</h3>
     <form method="post" action="<?php echo base_url('C_wisata/proses_pem_wis')?>">

        <div class="form-group">
            <label>Atasnama</label>
            <input type="text" name="atasnama" placeholder="Atasnama" class="form-control">
        </div>
        <div class="form-group">
            <label>Tanggal Pemesanan</label>
            <input type="date" name="tgl_pesan" class="form-control">
        </div>
        <input type="text" name="us_id" value="<?php echo"$user->us_id" ?>" hidden>
        <button type="submit" class="btn btn-sm btn-primary">Pesan</button>
     </form>
    <?php
        }else{
        echo"Anda belum memesan Wisata!";
    }?>
    
        
    
    
</div>