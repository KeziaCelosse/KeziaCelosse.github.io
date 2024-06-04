<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $this->config->item('website_title'); ?></title>

	<!-- meta -->
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- css -->
	<link rel="stylesheet" href="<?php echo base_url()."assets/polo/"; ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()."assets/polo/"; ?>assets/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo base_url()."assets/polo/"; ?>assets/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url()."assets/polo/"; ?>assets/css/owl.theme.css">
	<link rel="stylesheet" href="<?php echo base_url()."assets/polo/"; ?>assets/css/animate.css">
	<link rel="stylesheet" href="<?php echo base_url()."assets/polo/"; ?>assets/css/style.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Fancybox JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>


	<!-- fonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic|Roboto+Condensed:300italic,400italic,700italic,400,300,700|Oxygen:400,300,700' rel='stylesheet'>

	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--[if lt IE 9]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
</head>
<body id="home">

	<!-- ****************************** Preloader ************************** -->

	<div id="preloader"></div>

	<!-- ****************************** Sidebar ************************** -->

	<nav id="sidebar-wrapper">
		<a id="menu-close" href="#" class="close-btn toggle"><i class="ion-ios-close-empty"></i></a>
	    <ul class="sidebar-nav">
		    <li><a href="#home">Home</a></li>
			<li><a href="#features">What to Expect</a></li>
			<li><a href="#gallery">Gallery</a></li>
			<li><a href="#team">Development Team</a></li>
			<li><a href="#testimonial">Description</a></li>
			<li><a href="#contact">Contact us</a></li>
	    </ul>
	</nav>

	<!-- ****************************** Header ************************** -->

	<header class="sticky" id="header" style="position: absolute; z-index: 9999;">
		<section class="container">
			<section class="row" id="logo_menu">
				<section class="col-xs-8"><a class="logo" href="">R U B Y</a></section>
				<section class="col-xs-4"><a id="menu-toggle" href="#" class="toggle wow rotateIn" data-wow-delay="1s"><i class="ion-navicon"></i></a></section>
			</section>
		</section>
	</header>

	<!-- ****************************** Banner ************************** -->


	<section id="banner" >
		<section class="container">
			<a class="slidedown wow animated zoomIn" data-wow-delay="2s" href="#features"><i class="ion-ios-download-outline"></i></a>
			<section class="row">
				<div class="col-md-6">
					<div class="headings">
						<h1 class="wow animated fadeInDown">Ruby Trail</h1>
						<p class="wow animated fadeInLeft">Didorong rasa ingin tahu, Ruby, gadis kecil bermantel pink, terjebak dalam petualangan seru di hutan lebat penuh misteri, di mana rintangan dan teka-teki menantang kecerdasannya.</p>
						<div class="row">
							<div class="col-xs-6 col-sm-6 col-md-5">
								<div>
									<a href="#" class="polo-btn store wow animated bounceInUp"><i class="ion-ios-game-controller-b"></i> Play </a>
								</div>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-5">
    						<div>
        					<a href="https://youtu.be/ksx2yCT6a3I?si=GoO1xvp5XN4ytlrd" class="polo-btn store wow animated bounceInUp" data-fancybox><i class="ion-play"></i> Youtube</a>
    						</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 hidden-xs hidden-sm">
					<div class="hand-container">
					<img class="girl img_res wow animated bounceInUp" data-wow-duration="1.2s" src="<?php echo base_url()."assets/polo/"; ?>assets/img/girl.png" style="width: 300px; height: 300px; margin-top: 250px; margin-left: 100px;">
					<div class="clearfix"></div>
					</div>
				</div>
			</section>
		</section>
	</section>

	<!-- ****************************** Features Section ************************** -->

	<section id="features" class="block">
		<section class="container">
			<section class="row">
				<div class="title-box"><h1 class="block-title wow animated rollIn" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
				<span class="bb-top-left"></span>
				<span class="bb-bottom-left"></span>
				What To Expect 
				<span class="bb-top-right"></span>
				<span class="bb-bottom-right"></span>
				</h1></div>
			</section>
			
			<section class="row">
			<div class="col-sm-6 col-md-4">
    			<div class="feature-box wow animated flipInX" data-wow-delay="0.3s">
        		<img src="<?php echo base_url()."assets/polo/"; ?>assets/img/gbl.png" style="width: 100px;">
        		<h2>Game-Based Learning</h2>
        		<p>Metode pembelajaran inovatif yang menggabungkan unsur permainan ke dalam proses belajar</p>
    			</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="feature-box wow animated flipInX" data-wow-delay="0.3s">
					<img src="<?php echo base_url()."assets/polo/"; ?>assets/img/proto.png" style="width: 100px;">
						<h2>Easy Prototyping</h2>
						<p>Model permainan yang sederhana sehingga dapat dimainkan oleh siapa saja</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="feature-box wow animated flipInX" data-wow-delay="0.3s">
					<img src="<?php echo base_url()."assets/polo/"; ?>assets/img/1.png" style="width: 100px;">
						<h2>Pixel Graphic</h2>
						<p>Pesona dan fleksibilitas yang unik dalam game ini membangkitkan nostalgia dan mengispirasi kreativitas</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="feature-box wow animated flipInX" data-wow-delay="0.6s">
					<img src="<?php echo base_url()."assets/polo/"; ?>assets/img/data.png" style="width: 100px;">
						<h2>Data Sync</h2>
						<p>Memastikan bahwa data disetiap penyimpanan identic dan mencerminkan perubahan terbaru</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="feature-box wow animated flipInX" data-wow-delay="0.6s">
					<img src="<?php echo base_url()."assets/polo/"; ?>assets/img/adventure.png" style="width: 100px;">
						<h2>Advanture</h2>
						<p>Jelajahi hutan yang penuh rahasia tersembunyi, bahaya tak terduga, dan penemuan menakjubkan.</p>
					</div>
				</div>
				<div class="col-sm-6 col-md-4">
					<div class="feature-box wow animated flipInX" data-wow-delay="0.6s">
					<img src="<?php echo base_url()."assets/polo/"; ?>assets/img/akun2.png" style="width: 100px;">
						<h2>Account System</h2>
						<p>Tingkatkan level Anda dan buka dunia baru. Login ke akun dan mulai mainkan game ini sekarang!</p>
					</div>
				</div>
			</section>
			<div class="clearfix"></div>
		</section>
	</section>

	<!-- ****************************** Gallery Section ************************** -->

	<section id="gallery" class="block">
		<section class="container">
			<section class="row">
				<div class="title-box" style="color:#fff;"><h1 class="block-title wow animated rollIn" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
				<span class="bb-top-left" style="border-color: #fff; "></span>
				<span class="bb-bottom-left" style="border-color: #fff; "></span>
				Gallery
				<span class="bb-top-right" style="border-color: #fff; "></span>
				<span class="bb-bottom-right" style="border-color: #fff; "></span>
				</h1></div>
			</section>
			<section class="row">
				<div class="col-xs-12">
					<div id="screenshots" class="owl-carousel owl-theme">
					  <div class="item"><img src="<?php echo base_url()."assets/polo/"; ?>assets/img/bintang1.png" class="img_res wow animated zoomIn"></div>
					  <div class="item"><img src="<?php echo base_url()."assets/polo/"; ?>assets/img/bintang4.png" class="img_res wow animated zoomIn"></div>
					  <div class="item"><img src="<?php echo base_url()."assets/polo/"; ?>assets/img/bintang6.png" class="img_res wow animated zoomIn"></div>
					  <div class="item"><img src="<?php echo base_url()."assets/polo/"; ?>assets/img/bintang3.png" class="img_res wow animated zoomIn"></div>
					  <div class="item"><img src="<?php echo base_url()."assets/polo/"; ?>assets/img/bintang8.png" class="img_res wow animated zoomIn"></div>
					  <div class="item"><img src="<?php echo base_url()."assets/polo/"; ?>assets/img/bintang5.png" class="img_res wow animated zoomIn"></div>
					  <div class="item"><img src="<?php echo base_url()."assets/polo/"; ?>assets/img/bintang2.png" class="img_res wow animated zoomIn"></div>
					  <div class="item"><img src="<?php echo base_url()."assets/polo/"; ?>assets/img/bintang7.png" class="img_res wow animated zoomIn"></div>
					  
					</div>
					 <div class="customNavigation">
					  <a class="btn prev gallery-nav wow animated bounceInLeft"><i class="ion-ios-arrow-left"></i></a> 
					  <a class="btn next gallery-nav wow animated bounceInRight"><i class="ion-ios-arrow-right"></i></a>
					</div>
				</div>
			</section>




		</section>
	</section>

	<!-- ****************************** Team Section ************************** -->

	<section id="team" class="block">
		<section class="container">
			<section class="row">
				<div class="col-md-12">
					<div class="title-box">
						<h1 class="block-title wow animated rollIn" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
							<span class="bb-top-left"></span>
							<span class="bb-bottom-left"></span>
							Development Team
							<span class="bb-top-right"></span>
							<span class="bb-bottom-right"></span>
						</h1>
					</div>
				</div>
			</section>
			<section class="row">
				<section class="col-md-6 col-sm-6">
					<div class="team-member wow animated fadeIn" data-wow-delay="0.3s">
						<img src="<?php echo base_url()."assets/polo/"; ?>assets/img/gita.jpg" class="img_res team-pic">
						<h2 class="wow animated fadeInDown" data-wow-delay="0.7s">Gita Pretty Gebyola Nababan</h2>
						<p class="wow animated fadeIn" data-wow-delay="0.7s">UI/UX, Typography, Animation</p>
						<ul class="team-social">
							<li class="wow animated fadeInLeft facebook"><a href="#"><i class="ion-social-facebook"></i></a></li>
							<li class="wow animated fadeInLeft linkedin"><a href="#"><i class="ion-social-linkedin"></i></a></li>
							<li class="wow animated fadeInRight googleplus"><a href="#"><i class="ion-social-googleplus-outline"></i></a></li>
							<li class="wow animated fadeInRight github"><a href="#"><i class="ion-social-github"></i></a></li>
						</ul>
					</div>
				</section>
				<section class="col-md-6 col-sm-6">
					<div class="team-member wow animated fadeIn" data-wow-delay="0.3s">
						<img src="<?php echo base_url()."assets/polo/"; ?>assets/img/kezia.jpg" class="img_res team-pic">
						<h2 class="wow animated fadeInDown" data-wow-delay="0.7s">Kezia Deby C Pangaribuan</h2>
						<p class="wow animated fadeIn" data-wow-delay="0.7s">Programmer, Environment, Object & Props,</p>
						<ul class="team-social">
							<li class="wow animated fadeInLeft facebook"><a href="#"><i class="ion-social-facebook"></i></a></li>
							<li class="wow animated fadeInLeft linkedin"><a href="#"><i class="ion-social-linkedin"></i></a></li>
							<li class="wow animated fadeInRight googleplus"><a href="#"><i class="ion-social-googleplus-outline"></i></a></li>
							<li class="wow animated fadeInRight github"><a href="#"><i class="ion-social-github"></i></a></li>
						</ul>
					</div>
				</section>
			</section>
		</section>
	</section>

	<!-- ****************************** Testimonial ************************** -->

	<section id="testimonial" class="block">
		<section class="container">
			<section class="row">
				<div class="title-box"><h1 class="block-title wow animated rollIn" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
				<span class="bb-top-left"></span>
				<span class="bb-bottom-left"></span>
				Description
				<span class="bb-top-right"></span>
				<span class="bb-bottom-right"></span>
				</h1></div>
			</section>
		</section>
		<section class="container">
			<section class="row">
				<section class="col-xs-12">
					<div id="review" class="owl-carousel owl-theme">
						<div class="item">
							<div class="row" style="display: flex;flex-direction: column-reverse;align-items: center;align-content: space-around;flex-wrap: wrap;justify-content: center;">
								<div class="col-sm-6 text-center">
									<!-- <div class="client-pic"><img class="img_res" src="assets/img/client-one.png"></div>
									<p class="review-star">
										<i class="ion-ios-star"></i>
										<i class="ion-ios-star"></i>
										<i class="ion-ios-star"></i>
										<i class="ion-ios-star"></i>
										<i class="ion-ios-star-outline"></i>
									</p>-->
								</div>
								<div class="col-xs-12 text-center">
									<p class="review-desc" style="margin-left: auto; margin-right: auto; text-align: center;">
									Di sebuah desa hiduplah seorang anak kecil yang ceria dan pemberani bernama Ruby. Pada suatu pagi, Ibu nya menyuruh Ruby untuk memetik nenas di kebun belakang rumah mereka yang bersebelahan dengan hutan. Karena penasaran, Ruby dengan sengaja masuk ke hutan itu dan kemudian tersesat. 
									Selama berada di dalam hutan, Ruby harus berhadapan dengan banyak rintangan dan harus menyelesaikan sebuah soal sains agar bisa maju ke level selanjutnya.


									</p>
									<!-- <p class="client-name">
										Shahjahan Jewel
									</p> -->
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row" style="display: flex;flex-direction: column-reverse;align-items: center;align-content: space-around;flex-wrap: wrap;justify-content: center;">
								<div class="col-sm-6 text-center">
									<!-- <div class="client-pic"><img class="img_res" src="assets/img/client-one.png"></div>
									<p class="review-star">
										<i class="ion-ios-star"></i>
										<i class="ion-ios-star"></i>
										<i class="ion-ios-star"></i>
										<i class="ion-ios-star"></i>
										<i class="ion-ios-star-outline"></i>
									</p>-->
								</div>
								<div class="col-xs-12 text-center">
									<p class="review-desc" style="margin-left: auto; margin-right: auto; text-align: center;">
									Selama perjalanannya, Ruby tak lupa untuk mengumpulkan nanas yang dia temukan di dalam hutan. Dia ingin memberikan nanas-nanas itu kepada Ibunya. Setelah menyelesaikan semua teka-teki dan mengumpulkan cukup nanas, Ruby pun akhirnya dapat kembali ke rumah dengan selamat. 
									Petualangan Ruby di hutan ajaib menjadi pelajaran berharga baginya. Dia belajar untuk selalu berani menghadapi rintangan, pantang menyerah, dan selalu bersyukur atas apa yang dia miliki. Ruby juga belajar bahwa rasa ingin tahu yang tinggi harus diimbangi dengan kehati-hatian dan tanggung jawab.
									</p>
									<!-- <p class="client-name">
										Shahjahan Jewel
									</p> -->
								</div>
							</div>
						</div>
						<!-- <div class="item">
							<div class="row">
								<div class="col-sm-4 col-sm-offset-1">
									<div class="client-pic"><img class="img_res" src="assets/img/client-one.png"></div>
									<p class="review-star">
										<i class="ion-ios-star"></i>
										<i class="ion-ios-star"></i>
										<i class="ion-ios-star"></i>
										<i class="ion-ios-star"></i>
										<i class="ion-ios-star-outline"></i>
									</p>
								</div>
								<div class="col-sm-6">
									<p class="review-desc">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									</p>
									<p class="client-name">
										Shahjahan Jewel
									</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="row">
								<div class="col-sm-4 col-sm-offset-1">
									<div class="client-pic"><img class="img_res" src="assets/img/client-one.png"></div> 
									<p class="review-star">
										<i class="ion-ios-star"></i>
										<i class="ion-ios-star"></i>
										<i class="ion-ios-star"></i>
										<i class="ion-ios-star"></i>
										<i class="ion-ios-star-outline"></i>
									</p>
								</div>
								<div class="col-sm-6">
									<p class="review-desc">
										Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									</p>
									<p class="client-name">
										Shahjahan Jewel
									</p>-->
								</div>
							</div>
						</div>
					</div>
				</section>
			</section>
		</section>
	</section>

	<!-- ****************************** Subscribe Section ************************** -->

	<section id="subscribe">
		<section class="container">
			<section class="row">
				<div class="col-sm-10 col-sm-offset-1">
					<h2 style="text-align: center;"><strong>Subscribe</strong></h2>
					<p class="susbcribe-text">
					Berlangganan newsletter kami dan dapatkan update terbaru tentang game, berita eksklusif, akses spesial ke beta test dan konten menarik, serta penawaran menarik dan diskon spesial.
					Masukkan alamat email Anda di bawah ini</p>
				</div>
			</section>
		</section>
		<section class="container subscribe-wrap">
			<section class="row">
				<div class="col-sm-12">
					<div class="row">
						<form role="form">
							<div class="col-xs-10">
								<div class="form-group">
									<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
								</div>
							</div>
							<div class="col-xs-2">
								<button type="submit" class="btn-custom">
								<i class="ion-ios-arrow-thin-right"></i>
								</button>
							</div>
						</form>
					</div>
				</div>
			</section>
		</section>
	</section>

	<!-- ****************************** Contact Section ************************** -->

	<section id="contact">
			<section class="container contact-wrap">
				<section class="row">
					<div class="title-box"><h1 class="block-title wow animated rollIn" style="text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">
					<span class="bb-top-left"></span>
					<span class="bb-bottom-left"></span>
					Contact Us
					<span class="bb-top-right"></span>
					<span class="bb-bottom-right"></span>
					</h1></div>
				</section>
			</section>
			<section class="address">
				<div class="container">
					<div class="col-sm-12">
						<ul class="address-list">
							<li><i class="ion-ios-location" style="background-color: rgb(255, 102, 0);"></i> <span>Telkom University <br>Bandung</span></li>
							<li><i class="ion-ios-telephone" style="background-color: #63cfea;"></i> <span>0823-6094-1732</span></li>
							<li><i class="ion-email" style="background-color: #6ecba9;"></i> <span>rubytrail@gmail.com</span></li>
							<li><i class="ion-earth" style="background-color: #ff6969;"></i> <span>www.rubytrail.com</span></li>
						</ul>
					</div>
				</div>
			</section>
			<section class="mailbox">
				<div class="container">
					<div class="col-sm-12">
						<form name="sentMessage" id="contactForm" novalidate>
	                        <div class="row">
	                            <div class="col-md-6">
	                                <div class="form-group">
	                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
	                                    <p class="help-block text-danger"></p>
	                                </div>
	                                <div class="form-group">
	                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
	                                    <p class="help-block text-danger"></p>
	                                </div>
	                                <div class="form-group">
	                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
	                                    <p class="help-block text-danger"></p>
	                                </div>
	                            </div>
	                            <div class="col-md-6">
	                                <div class="form-group">
	                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
	                                    <p class="help-block text-danger"></p>
	                                    <div id="success"></div>
		                                <button type="submit" class="polo-btn contact-submit"><i class="ion-paper-airplane"></i></button>
	                                </div>
	                            </div>
	                        </div>
	                    </form>
					</div>
				</div>
			</section>
			<div class="clearfix"></div>
		</section>

		<!-- ****************************** Footer ************************** -->

		<section id="footer">
			<section class="container">
				<section class="row">
					<div class="col-sm-6">
						<span>Game</span>
						<h1 class="footer-logo">
							<a href="https://themewagon.com/">R U B Y</a>
						</h1>
					</div>
					<div class="col-sm-6">
						<p class="copyright">All &copy; Copyright Reserved 2014</p>
					</div>
				</section>
			</section>
		</section>


	<!-- All the scripts -->

	<script src="<?php echo base_url()."assets/polo/"; ?>assets/js/jquery-2.1.3.min.js"></script>
	<script src="<?php echo base_url()."assets/polo/"; ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()."assets/polo/"; ?>assets/js/wow.min.js"></script>
	<script src="<?php echo base_url()."assets/polo/"; ?>assets/js/owl.carousel.js"></script>
	<script src="<?php echo base_url()."assets/polo/"; ?>assets/js/script.js"></script>
	
</body>
</html>
