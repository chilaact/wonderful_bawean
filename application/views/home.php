<html lang="en">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap Testimonial Carousel</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700|Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  body {
    font-family: "Open Sans", sans-serif;
  }
  h2 {
    color: #333;
    text-align: center;
    text-transform: uppercase;
    font-family: "Roboto", sans-serif;
    font-weight: bold;
    position: relative;
    margin: 30px 0 60px;
  }
  h2::after {
    content: "";
    width: 100px;
    position: absolute;
    margin: 0 auto;
    height: 3px;
    background: #8fbc54;
    left: 0;
    right: 0;
    bottom: -10px;
  }
  .col-center {
    margin: 0 auto;
    float: none !important;
  }
  .carousel {
    margin: 50px auto;
    padding: 0 70px;
  }
  .carousel .item {
    color: #999;
    font-size: 14px;
      text-align: center;
    overflow: hidden;
      min-height: 290px;
  }
  .carousel .item .img-box {
    width: 135px;
    height: 135px;
    margin: 0 auto;
    padding: 5px;
    border: 1px solid #ddd;
    border-radius: 50%;
  }
  .carousel .img-box img {
    width: 100%;
    height: 100%;
    display: block;
    border-radius: 50%;
  }
  .carousel .testimonial {
    padding: 30px 0 10px;
  }
  .carousel .overview {	
    font-style: italic;
  }
  .carousel .overview b {
    text-transform: uppercase;
    color: #7AA641;
  }
  .carousel .carousel-control {
    width: 40px;
      height: 40px;
      margin-top: -20px;
      top: 50%;
    background: none;
  }
  .carousel-control i {
      font-size: 68px;
    line-height: 42px;
      position: absolute;
      display: inline-block;
    color: rgba(0, 0, 0, 0.8);
      text-shadow: 0 3px 3px #e6e6e6, 0 0 0 #000;
  }
  .carousel .carousel-indicators {
    bottom: -40px;
  }
  .carousel-indicators li, .carousel-indicators li.active {
    width: 10px;
    height: 10px;
    margin: 1px 3px;
    border-radius: 50%;
  }
  .carousel-indicators li {	
    background: #999;
    border-color: transparent;
    box-shadow: inset 0 2px 1px rgba(0,0,0,0.2);
  }
  .carousel-indicators li.active {	
    background: #555;		
    box-shadow: inset 0 2px 1px rgba(0,0,0,0.2);
  }
  </style>
  </head>
</html>

 <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
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
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#daftar-wisata-section" class="nav-link">Daftar Wisata</a></li>
                <li><a href="#daftar-hotel-section" class="nav-link">Hotel & Penginapan</a></li>
                <li><a href="#about-section" class="nav-link">About</a></li>
                <li><a href="#contact-section" class="nav-link">Contact</a></li>
                <li><a href="<?= base_url('C_home/faq'); ?>" class="nav-link">FAQ</a></li>
                <li><a href="<?= base_url('C_login/index'); ?>" class="nav-link">Sign In</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

  <div class="site-block-wrap">
    <div class="owl-carousel with-dots">
      <div class="site-blocks-cover overlay overlay-2" data-aos="fade" id="home-section">
        <img src="<?php echo base_url() ?>assets/image/kpl.jpg">       
      </div>  
  
      <div class="site-blocks-cover overlay overlay-2" data-aos="fade" id="home-section">
        <img src="<?php echo base_url() ?>assets/image/89.jpg">
      </div>  
    </div>   
    
  </div>      


  <div class="site-section" id="daftar-wisata-section">
      <div class="container">
        <div class="row large-gutters">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
            <div class="ftco-media-1">
              <div class="ftco-media-1-inner">
                <a class="d-inline-block mb-4"><img src="<?php echo base_url() ?>assets/image/kastoba.jpg" alt="FImageo" class="img-fluid"></a>
                <div class="ftco-media-details">
                  <h3>Danau Kastoba</h3>
                  <p>Dsn. Candi - BAWEAN</p>
                  Harga Tiket Masuk <strong class="badge badge-bg badge-success">$20,000,000</strong>
                </div>
  
              </div> 
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
              <div class="ftco-media-1">
                  <div class="ftco-media-1-inner">
                    <a class="d-inline-block mb-4"><img src="<?php echo base_url() ?>assets/image/noko.jpg" alt="Image" class="img-fluid"></a>
                    <div class="ftco-media-details">
                      <h3>Pulau Noko</h3>
                      <p>Ds. Sidogedungbatu - BAWEAN</p>
                      Harga Tiket Masuk <strong class="badge badge-bg badge-success">$20,000,000</strong>
                    </div> 
      
                  </div> 
                </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
              <div class="ftco-media-1">
                  <div class="ftco-media-1-inner">
                    <a class="d-inline-block mb-4"><img src="<?php echo base_url() ?>assets/image/mangrove3.jpg" alt="Image" class="img-fluid"></a>
                    <div class="ftco-media-details">
                      <h3>Hutan Mangrove</h3>
                      <p>Ds. Daun - BAWEAN</p>
                      Harga Tiket Masuk <strong class="badge badge-bg badge-success">$20,000,000</strong>
                    </div>
      
                  </div> 
                </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
              <div class="ftco-media-1">
                <div class="ftco-media-1-inner">
                  <a class="d-inline-block mb-4"><img src="<?php echo base_url() ?>assets/image/mombhul4.jpg" alt="Image" class="img-fluid"></a>
                  <div class="ftco-media-details">
                    <h3>Mombhul Beach</h3>
                    <p>Ds. Sidogedungbatu - BAWEAN</p>
                    Harga Tiket Masuk <strong class="badge badge-bg badge-success">$20,000,000</strong>
                  </div>
    
                </div> 
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
                <div class="ftco-media-1">
                    <div class="ftco-media-1-inner">
                      <a class="d-inline-block mb-4"><img src="<?php echo base_url() ?>assets/image/airterjun.jpg" alt="Image" class="img-fluid"></a>
                      <div class="ftco-media-details">
                        <h3>Laccar Waterfall</h3>
                        <p>Dsn. Laccar - BAWEAN</p>
                        Harga Tiket Masuk <strong class="badge badge-bg badge-success">$20,000,000</strong>
                      </div>
        
                    </div> 
                  </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
                <div class="ftco-media-1">
                    <div class="ftco-media-1-inner">
                      <a class="d-inline-block mb-4"><img src="<?php echo base_url() ?>assets/image/tanjungan.jpg" alt="Image" class="img-fluid"></a>
                      <div class="ftco-media-details">
                        <h3>Tanjung Ghe'en</h3>
                        <p>Ds. Komalasa - BAWEAN</p>
                        Harga Tiket Masuk <strong class="badge badge-bg badge-success">$20,000,000</strong>
                      </div>
        
                    </div> 
                  </div>
            </div>

        </div>
      </div>
    </div>

    <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-6 mt-lg-5 text-center">
              <p><a href="<?= base_url('C_login/index'); ?>" class="btn btn-primary px-5 py-3">See More ---> </a></p>              
            </div>
          </div>
    </div>
    
    
    
    <section class="site-section" id="daftar-hotel-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-7 text-left">
            <h2 class="section-title mb-3">Hotel dan Penginapan</h2>
          </div>
        </div>
        <div class="row">
          

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="team-member">
              <figure>
                <img src="<?php echo base_url() ?>assets/image/pusaka.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3 bg-primary">
                <h3 class="mb-2">Hotel Pusaka Bawean</h3>
                <span class="position">Real Estate Agent</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="team-member">
              <figure>
                <img src="<?php echo base_url() ?>assets/image/miranda.jfif" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3 bg-primary">
                <h3 class="mb-2">Hotel Miranda</h3>
                <span class="position">Real Estate Agent</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4">
            <div class="team-member">
              <figure>
                <img src="<?php echo base_url() ?>assets/image/fathin.jpg" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3 bg-primary">
                <h3 class="mb-2">Hotel Fathin</h3>
                <span class="position">Real Estate Agent</span>
              </div>
            </div>
          </div>

          
        </div>
      </div>
    </section>

    <section class="py-5 bg-primary site-section how-it-works" id="howitworks-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-3 text-black">How It Works</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 text-center">
            <div class="pr-5 first-step">
              <span class="text-black">01.</span>
              <span class="custom-icon flaticon-house text-black"></span>
              <h3 class="text-black">Find Travel List</h3>
              <p class="text-black">Mencari di daftar wisata yang akan dikunjungi.</p>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="pr-5 second-step">
              <span class="text-black">02.</span>
              <span class="custom-icon flaticon-coin text-black"></span>
              <h3 class="text-dark">Order and Pay</h3>
              <p class="text-black">Melakukan proses pemesanan dan transaksi pembayaran.</p>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="pr-5">
              <span class="text-black">03.</span>
              <span class="custom-icon flaticon-home text-black"></span>
              <h3 class="text-dark">Enjoy Your Travelling.</h3>
              <p class="text-black">Nikmati perjalanan anda dalam penjelajahan ini :).</p>
            </div>
          </div>
        </div>
      </div>  
    </section>



    <section class="site-section" id="about-section">
      <div class="container">
        
        <div class="row large-gutters">
          <div class="col-lg-6 mb-5">

              <div class="owl-carousel slide-one-item with-dots">
                  <div><img src="<?php echo base_url() ?>assets/image/boyan.jpg" alt="Image" class="img-fluid"></div>
                  <div><img src="<?php echo base_url() ?>assets/image/atung.jpg" alt="Image" class="img-fluid"></div>
                  <div><img src="<?php echo base_url() ?>assets/image/beach.jpg" alt="Image" class="img-fluid"></div>
                </div>

          </div>
          <div class="col-lg-6 ml-auto">
            
            <h2 class="section-title mb-3">Wonderful Bawean Island</h2>
                <p>Pulau Bawean merupakan salah satu pulau yang terkenal di Jawa Timur. Secara administratif pulau ini merupakan bagian dari Kabupaten Gresik. Letaknya sekitar 120 kilometer di utara pusat Kabupaten Gresik. Pulau Bawean merupakan bagian dari Kepulauan Sunda Besar.</p>
                <p>Sebagai sebuah pulau, Bawean memiliki banyak keunikan yang tidak bisa dijumpai di daerah lain diantaranya :</p>

                <ul class="list-unstyled ul-check success">
                  <li>Rusa Bawean Tergolong Spesies Langka</li>
                  <li>Batu Onxy Berkualitas Tinggi</li>
                  <li>Buah Merah Khas Bawean</li>
                </ul>

                <p><a href="#" class="btn btn-primary mr-2 mb-2">Learn More</a></p>
            
          </div>
        </div>
      </div>
    </section>

    <section class="site-section testimonial-wrap" id="testimonials-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Testimonials<h2>
          </div>
        </div>

        <div class="row">
		<div class="col-md-8 col-center m-auto">
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Carousel indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>   
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner">
					<div class="item carousel-item active">
						<div class="img-box"><img src="/examples/images/clients/1.jpg" alt=""></div>
						<p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
						<p class="overview"><b>Paula Wilson</b>, Media Analyst</p>
					</div>
					<div class="item carousel-item">
						<div class="img-box"><img src="/examples/images/clients/2.jpg" alt=""></div>
						<p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
						<p class="overview"><b>Antonio Moreno</b>, Web Developer</p>
					</div>
					<div class="item carousel-item">
						<div class="img-box"><img src="/examples/images/clients/3.jpg" alt=""></div>
						<p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
						<p class="overview"><b>Michael Holz</b>, Seo Analyst</p>
					</div>
				</div>
				<!-- Carousel controls -->
				<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
			</div>
		</div>
	</div>

      </div>
    </section>  


    <section class="site-section bg-light bg-image" id="contact-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Contact Us</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7 mb-5">

            

            <form action="#" class="p-5 bg-white">
              
              <h2 class="h4 text-black mb-5">Get In Touch</h2> 

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" id="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label> 
                  <input type="subject" id="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-md-5">
            
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">youremail@domain.com</a></p>

            </div>
            
          </div>
        </div>
      </div>
    </section>

    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
              </div>
              <div class="col-md-3 mx-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              
            </div>
          </div>
          <div class="col-md-4">
            <div class="mb-4">
              <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <form action="#" method="post" class="footer-subscribe">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-black" type="button" id="button-addon2">Send</button>
                </div>
              </div>
            </form>  
            </div>
            
            <div class="">
              <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </div>


          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p class="copyright">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

