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
        echo "Selamat Pesanan Telah Diperoses! dimohon segera membayar dengan harga: Rp".number_format($grand_total,0,',','.')." Melalui nomor rekening yang tersedia";
        $this->cart->destroy();
    } else {
        echo"Anda belum memesan Wisata!";
    }
    ?>
        </p>
    
    </div>
</div>