 <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo m-0 p-0"><a href="#" class="mb-0">wonderful <br>&nbsp;&nbsp;&nbsp;bawean</a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="<?= base_url('C_wisata/index'); ?>" class="nav-link">Home</a></li>
                <li><a href="<?= base_url('C_wisata/daftar_wis'); ?>" class="nav-link">Daftar Wisata</a></li>
                <li><a href="<?= base_url('C_hotel/index'); ?>" class="nav-link">Hotel & Penginapan</a></li>
                <li><a class="nav-link"><?php $pesanan = 'Booking : '.$this->cart->total_items() .' items' ?> <?php echo $pesanan ?></a></li>
                <li><a href="<?= base_url('C_wisata/profil'); ?>" class="nav-link">Profile</a></li>
                <li><a href="<?= base_url('C_login/logout'); ?>" class="nav-link">Logout</a></li>
                <li><form action="search" method="post">
                <input type="text" name="keyword" placeholder="search...">
                <input type="submit" name="submit_search" value="search">
              </form></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

  </div>
