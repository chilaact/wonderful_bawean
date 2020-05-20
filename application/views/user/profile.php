  <div class="site-block-wrap" style="height: 5em">
    <div class="owl-carousel with-dots">
      <div class="site-blocks-cover overlay overlay" style="background-color: #5F9EA0; height: 5em" data-aos="fade" id="home-section">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-6 mt-lg-5 text-center">
              <h1 class="text-shadow">My Profile</h1>   
              <p>Update Your Profile Account !</p>          
            </div>
          </div>
        </div>    
      </div>  
    </div>     
  </div>

  <div class="row">
      <div class="col-lh-6">
          <?= $this->session->flashdata('message'); ?>
      </div>
  </div>   

<div class="site-section" style="background-color: #5F9EA0;">

    <?php foreach ($profile as $prof ) : ?>

<div class="container">
<br>
<br>
    <div class="row" id="main">
        <div class="col-md-4 well" id="leftPanel">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <img style="width: 20rem; height: 25rem;" src="<?php echo base_url().'/assets/image/profile/'.$prof->us_img ?>">
                        <h2><?= $prof->us_nama ?></h2>
                        <p>Member Since <?= $prof->us_date_created; ?> </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 well" id="rightPanel">

    <div class="row">
    <div class="col-md-12">
        <form role="form">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <h1>My Profile</h1>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-primary" href="<?= base_url('C_wisata/edit_prof/'.$prof->us_id); ?>">Edit</a></h2>
                </div>
            </div>
            
            <hr class="colorgraph">
            <table class="table table-bordered table-hover table-striped" style="font-size: 20pt">
                <tr>
                    <td>Nama</td>
                    <td style="text-align: center;">:</td>
                    <td><?= $prof->us_nama ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td style="text-align: center;">:</td>
                    <td><?= $prof->us_email ?></td>
                </tr>
                <tr>
                    <td>No HP</td>
                    <td style="text-align: center;">:</td>
                    <td><?= $prof->us_nohp ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td style="text-align: center;">:</td>
                    <td><?= $prof->us_alamat ?></td>
                </tr>
            </table>
        </form>
    </div>
</div>
</div>
        </div>
     </div>  
     <?php endforeach; ?>     
</div>
</div>
</body>
</html>

