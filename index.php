<?php $baseurl = 'http://localhost/btpsae' ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

	<title>BTP Seminar And Expo (BTPSAE 2019)</title>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Indonesia Cyber Security Seminar and Competition (ICS2C 2018)">
	<meta name="author" content="Fakultas Informatika Universitas Telkom">
	
	<!-- viewport settings -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
			
	<!-- Font -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="<?= $baseurl ?>/assets/web/css/bootstrap.css">
	<!-- CSS 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">-->        
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?= $baseurl ?>/assets/web/css/helper.css">
	<link rel="stylesheet" href="<?= $baseurl ?>/assets/web/css/animate.min.css">
	<link rel="stylesheet" href="<?= $baseurl ?>/assets/web/css/font.css">
	<link rel="stylesheet" href="<?= $baseurl ?>/assets/web/css/salvattore.css">
	<link rel="stylesheet" href="<?= $baseurl ?>/assets/web/css/jquery.countdown.css">
	<link rel="stylesheet" href="<?= $baseurl ?>/assets/web/css/magnific-popup.css">
	<link rel="stylesheet" href="<?= $baseurl ?>/assets/web/css/jquery.mCustomScrollbar.css">
	<link rel="stylesheet" href="<?= $baseurl ?>/assets/web/css/owl.carousel.css">
	<link rel="stylesheet" href="<?= $baseurl ?>/assets/web/css/owl.theme.css">
	<link rel="stylesheet" href="<?= $baseurl ?>/assets/web/css/owl.transitions.css">
	<link rel="stylesheet" href="<?= $baseurl ?>/assets/web/css/revolution.css">
	<link rel="stylesheet" href="<?= $baseurl ?>/assets/web/css/revolution-extralayers.css">
	
	<link rel="stylesheet" href="<?= $baseurl ?>/assets/web/css/main.css">
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="<?= $baseurl ?>/assets/web/img/favicon.ico">
	
	<style>
	#download h2::after {
		content: "";
		display: block;
		width: 120px;
		height: 3px;
		background-color: #fac42b;
		margin-top: 12px;
		margin-bottom: 15px;
	}
	</style>

</head>

<body>
	
	<!-- PRELOADING --> 
	<div id="preload">
		<div class="preload">
			<div class="spinner"></div>
		</div>
	</div>
	
	<!-- NAVIGATION -->
	<nav id="nav-primary" class="navbar navbar-custom" role="navigation">
	  <div class="container">
		
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a href="index.html"><img src="<?= $baseurl ?>/assets/web/img/logo-h-53.png" alt="logo"></a>
		</div>

		<div class="collapse navbar-collapse" id="nav">
		  <ul class="nav navbar-nav navbar-right uppercase">
			<li><a data-toggle="elementscroll" href="#info">INFO</a></li>
			<li><a data-toggle="elementscroll" href="#speakers">SPEAKERS</a></li>
			<li><a data-toggle="elementscroll" href="#program">PROGRAM</a></li>
			<li><a data-toggle="elementscroll" href="#venue">VENUE</a></li>
			<li><a data-toggle="elementscroll" href="#register">PRIZE POOL</a></li>
			<li><a data-toggle="elementscroll" href="#sponsors">ORGANIZED</a></li>
			<li><a data-toggle="elementscroll" href="#footer">CONTACT</a></li>
		  </ul>
		</div>
		
	  </div>
	</nav>
	
	<!-- FULLSCREEN SLIDER -->
	<div class="tp-banner-container">
		<div class="tp-banner">
			<ul>	
				<!-- SLIDE 1 -->
				<li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000" data-thumb="<?= $baseurl ?>/assets/web/img/slider/slide_thumb_1.jpg"  data-saveperformance="off"  data-title="Slide">
					<!-- MAIN IMAGE -->
					<img src="<?= $baseurl ?>/assets/web/img/slider/slide1.jpg"  alt="fullslide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
					<!-- LAYERS -->
			
					<!-- LAYER NR. 1 -->
					<div class="tp-caption light_heavy_70_shadowed lfb ltt tp-resizeme"
						data-x="483"
						data-y="center" data-voffset="-70"
						data-width="['auto']"
						data-height="['auto']"
						data-speed="600"
						data-start="800"
						data-easing="Power4.easeOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1"
						data-endspeed="500"
						data-endeasing="Power4.easeIn"
						style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">Bandung Techno Park <br> Seminar & Expo 2020
			
					</div>

					<!-- LAYER NR. 2 -->
					<div class="tp-caption light_medium_30_shadowed lfb ltt tp-resizeme"
						data-x="483"
						data-y="center" data-voffset="40"
						data-width="['auto']"
						data-height="['auto']"
						data-speed="600"
						data-start="900"
						data-easing="Power4.easeOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1"
						data-endspeed="500"
						data-endeasing="Power4.easeIn"
						style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">Towards Sustainable Science Techno Park
					</div>	
			
				<!-- SLIDE 2 -->
				<li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000" data-thumb="<?= $baseurl ?>/assets/web/img/slider/slide_thumb_1.jpg"  data-saveperformance="off"  data-title="Slide">
					<!-- MAIN IMAGE -->
					<img src="<?= $baseurl ?>/assets/web/img/slider/slide1ori.jpg"  alt="fullslide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
					<!-- LAYERS -->
			
					<!-- LAYER NR. 1 -->
					<div class="tp-caption light_heavy_70_shadowed lfb ltt tp-resizeme"
						data-x="483"
						data-y="center" data-voffset="-60"
						data-width="['auto']"
						data-height="['auto']"
						data-speed="600"
						data-start="800"
						data-easing="Power4.easeOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1"
						data-endspeed="500"
						data-endeasing="Power4.easeIn"
						style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">Seminar Teknologi
			
					</div>
			
					<!-- LAYER NR. 2 -->
					<div class="tp-caption light_medium_30_shadowed lfb ltt tp-resizeme"
						data-x="483"
						data-y="center" data-voffset="10"
						data-width="['auto']"
						data-height="['auto']"
						data-speed="600"
						data-start="900"
						data-easing="Power4.easeOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1"
						data-endspeed="500"
						data-endeasing="Power4.easeIn"
						style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">Focusing on The Mutual Collaboration 
					</div>				
				</li>

				<!-- SLIDE 3 -->
				<li data-transition="slidevertical" data-slotamount="1" data-masterspeed="1000" data-thumb="<?= $baseurl ?>/assets/web/img/slider/slide_thumb_1.jpg"  data-saveperformance="off"  data-title="Slide">
					<!-- MAIN IMAGE -->
					<img src="<?= $baseurl ?>/assets/web/img/slider/slide3.jpg"  alt="fullslide1"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
					<!-- LAYERS -->
			
					<!-- LAYER NR. 1 -->
					<div class="tp-caption light_heavy_70_shadowed lfb ltt tp-resizeme"
						data-x="483"
						data-y="center" data-voffset="-70"
						data-width="['auto']"
						data-height="['auto']"
						data-speed="600"
						data-start="800"
						data-easing="Power4.easeOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1"
						data-endspeed="500"
						data-endeasing="Power4.easeIn"
						style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">Expo Inovasi Produk
			
					</div>
			
					<!-- LAYER NR. 2 -->
					<div class="tp-caption light_medium_30_shadowed lfb ltt tp-resizeme"
						data-x="483"
						data-y="center" data-voffset="10"
						data-width="['auto']"
						data-height="['auto']"
						data-speed="600"
						data-start="900"
						data-easing="Power4.easeOut"
						data-splitin="none"
						data-splitout="none"
						data-elementdelay="0.01"
						data-endelementdelay="0.1"
						data-endspeed="500"
						data-endeasing="Power4.easeIn"
						style="z-index: 3; max-width: auto; max-height: auto; white-space: nowrap;">Product and services of Bandung Techno Park <br>& the tenants in showcase
					</div>				
				</li>
	
			</ul>		
			<div class="tp-bannertimer"></div>	
		</div>
	</div>

	<!-- HIGHLIGHT -->
	<section id="highlight">
		<div class="container-fluid">
			<div class="row">
			
				<div id="left" class="left col-lg-9 col-md-8 text-right">

					<h2>Join the BTP Seminar and Expo</h2>
					<p>Toward Sustainable Science Techno Park</p>
				</div>
				
				<div id="right" class="col-lg-3 col-md-4 text-left">
					<div id="countdown"></div>
				</div>
			
			</div>
		</div>
	</section>
	
	<!-- INFO -->
	<section id="info">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-12 text-center">
					<h1>BTP Seminar And Expo (BTP SaE 2020)</h1>
					<p class="lead"><strong>Towards Sustainable Science Techno Park</strong><br />
					BTP Seminar And Expo (BTP SaE 2020) adalah Kompetisi tahunan yang diselenggarakan oleh Bandung Techno Park</p>
				</div>
				
				<div class="col-lg-10 col-lg-offset-1 col-md-12 text-center">
					<div class="row">
					
						<div class="feature col-lg-4 col-md-4 col-sm-4">
							<i class="pe-4x pe-7s-refresh-2"></i>
							<h4>Seminar</h4>
							<p>Seminar BTP SaE 2020 akan berfokus pada kolaborasi Pentahelix dengan Science Techno Park.</p>
						</div>
						
						<div class="feature col-lg-4 col-md-4 col-sm-4">
							<i class="pe-4x pe-7s-micro"></i>
							<h4>Expo</h4>
							<p>Expo BTP SaE 2020 akan menunjukan semuah produk dan layanan dari Bandung Techno Park dan penyewa sebuah karya.</p>
						</div>
						
						<div class="feature col-lg-4 col-md-4 col-sm-4">
							<i class="pe-4x pe-7s-rocket"></i>
							<h4>FGD Industries</h4>
							<p>Bandung Techno Park sebagai pusat solusi utama yang akan menghadirkan produk dan layanan serta menyesuaikan dengan kebutuhan industri yang dihadapi Industry 4.0 dan Global Challenges.</p>
						</div>
													
					</div>
				</div>
				
			</div>
		</div>
	</section>
			 
	<!-- SPEAKERS -->
	<section id="speakers">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-12">
					<h2 class="uppercase"><center>BTP Seminar And Expo (BTPSAE 2020)</center></h2>
					<h3 class="uppercase"><center>Topics : Towards Sustainable Science Techno Park</center></h3>
					<p class="lead">Seminar dan Expo BTP SAE 2020 menampilkan 5 Pembicara Hebat pada bidang Akademik, Bisnis, Komunitas, Pemerintah dan Media</p>
				</div> 
				
				<ul id="list-speaker" class="list-unstyled"> 
					
					<!-- SPEAKER 1 -->	
					<li class="col-lg-3 col-md-3 col-sm-4">
						<div class="speaker">
							<figure class="effect-ming">
								<img class="img-responsive" src="<?= $baseurl ?>/assets/web/img/speakers/mochamad-ashari.jpg" alt=""/>
								<figcaption>
									<span><a class="html-popup" href="speaker-detail.html"><img class="img-responsive" src="<?= $baseurl ?>/assets/web/img/plus.png" alt=""></a></span>
								</figcaption>			
							</figure>
							
							<div class="caption text-center">
								<h4>Prof. Adiwijaya</h4>
								<p class="company">Rektor Universitas Telkom</p>
							</div>   
						</div>
					</li>
					
					<!-- SPEAKER 2 -->	
					<li class="col-lg-3 col-md-3 col-sm-4">
						<div class="speaker">
							<figure class="effect-ming">
								<img class="img-responsive" src="<?= $baseurl ?>/assets/web/img/speakers/bssn-mayjen-djokosetiadi.jpg" alt=""/>
								<figcaption>
									<span><a class="html-popup" href="speaker-detail.html"><img class="img-responsive" src="<?= $baseurl ?>/assets/web/img/plus.png" alt=""></a></span>
								</figcaption>			
							</figure>
							
							<div class="caption text-center">
								<h4>Stephanus Widjaja</h4>
								<p class="company">Pendiri Asosiasi Bisnis Indonesia Singapura (BisaKita.com) & Telkom Indonesia</p>
							</div>   
						</div>
					</li>
					
					<!-- SPEAKER 3 -->	
					<li class="col-lg-3 col-md-3 col-sm-4">
						<div class="speaker">
							<figure class="effect-ming">
								<img class="img-responsive" src="<?= $baseurl ?>/assets/web/img/speakers/agus-barnas.jpg" alt=""/>
								<figcaption>
									<span><a class="html-popup" href="speaker-detail.html"><img class="img-responsive" src="<?= $baseurl ?>/assets/web/img/plus.png" alt=""></a></span>
								</figcaption>			
							</figure>
							
							<div class="caption text-center">
								<h4>No Name</h4>
								<p class="company">Wakil Presiden dari Forum Alumni Universitas Telkom(FAST)</p>
							</div>   
						</div>
					</li>
					
					<!-- SPEAKER 4 -->	
					<li class="col-lg-3 col-md-3 col-sm-4">
						<div class="speaker">
							<figure class="effect-ming">
								<img class="img-responsive" src="<?= $baseurl ?>/assets/web/img/speakers/ahmad-m-ramli.jpg" alt=""/>
								<figcaption>
									<span><a class="html-popup" href="speaker-detail.html"><img class="img-responsive" src="<?= $baseurl ?>/assets/web/img/plus.png" alt=""></a></span>
								</figcaption>			
							</figure>
							
							<div class="caption text-center">
								<h4>Bambang Brodjonegoro</h4>
								<p class="company">Kementrian Riset & Teknologi</p>
							</div>   
						</div>
					</li>
					
					<!-- SPEAKER 5 -->	
					<li class="col-lg-3 col-md-3 col-sm-4">
						<div class="speaker">
							<figure class="effect-ming">
								<img class="img-responsive" src="<?= $baseurl ?>/assets/web/img/speakers/foto-profil-pak-edi-witjara.jpg" alt=""/>
								<figcaption>
									<span><a class="html-popup" href="speaker-detail.html"><img class="img-responsive" src="<?= $baseurl ?>/assets/web/img/plus.png" alt=""></a></span>
								</figcaption>			
							</figure>
							
							<div class="caption text-center">
								<h4>No Name</h4>
								<p class="company">Kumparan/CNN</p>
							</div>   
						</div>
					</li>
				
				</ul>
				
				<div class="col-lg-12 col-md-12 col-sm-12 text-center">
					<a href="#" class="button button-small button-line-dark">Daftar Peserta Seminar</a>
				</div>
				
			</div>
		</div>
	</section>
	
	<!-- DOWNLOAD -->
	<section id="download">
		<div class="container">
			<div class="row">
			
				<div class="col-lg-12">
					<div class="row">
					
						<div class="col-lg-4 col-md-4 col-sm-3">
							<img class="img-responsive" src="<?= $baseurl ?>/assets/web/img/ctf-hacking-competition-ics2c-2018.png" alt="">
						</div>
						
						<div class="col-lg-8 col-md-8 col-sm-9">
							<h2 class="uppercase">Cyber Security Competition</h2>
							<h4><strong>Demonstrate your hacking expertise in finding vulnerabilities within various problems!</strong></h4>
							<br>
							<p align="justify">Cyber Security Competition <strong>ICS2C 2018</strong> merupakan kompetisi keamanan jaringan dan informasi berskala nasional yang mengangkat konsep Capture The Flag pada babak penyisihan. Kompetisi ini terbuka untuk umum dalam bentuk tim yang terdiri dari 1 - 3 orang.</p>
							<p align="justify">15 Tim dengan nilai tertinggi pada babak penyisihan berhak mengikuti babak grand final yang akan di selenggarakan di kampus Universitas Telkom.</p>
							<br>
							<a class="button button-small button-line-dark" href="#">Download Rulebook</a> 
							<a class="button button-small button-line-dark" href="#">Register Competition</a>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
	</section>
	
	<!-- PROGRAM -->
	<section id="program">
		<div class="container">
			<div class="row">
			
				<div class="col-lg-12">
				
					<h2 class="uppercase">SCHEDULE</h2>
					<p class="lead">...</p>
					
					<!-- SCHEDULE TAB -->
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#day1" id="day1-tab" role="tab" data-toggle="tab" aria-controls="day1" aria-expanded="true">Expo</a></li>
						<li role="presentation" class=""><a href="#day2" role="tab" id="day2-tab" data-toggle="tab" aria-controls="day2" aria-expanded="false">Seminar</a></li>
						<li role="presentation" class=""><a href="#day3" role="tab" id="day3-tab" data-toggle="tab" aria-controls="day3" aria-expanded="false">FGD Industries</a></li>
					</ul>
					
					<!-- CONTENT -->    
					<div id="myTabContent" class="tab-content">
						
						<!-- DAY 1 -->
						<div role="tabpanel" class="tab-pane fade active in" id="day1" aria-labelledby="day1-tab">
							<div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">

								<!-- PROGRAM 1-->
								<div class="panel panel-default">
								
									<!-- Program Heading -->
									<div class="panel-heading" role="tab" id="heading1">									   
										<div class="row">
											<div class="col-lg-2 col-md-2 col-sm-4"><p class="date">08.00 - 17.00</p></div>											
											<div class="col-lg-9 col-md-9 col-sm-8">												
												<h4 class="panel-title">
													<a href="javascript:;">Expo</a>
												</h4>
											</div>
										</div>										
									</div>
									
								</div>
								
								
							
							</div>
						</div>
						
						<!-- DAY 2 -->
						<div role="tabpanel" class="tab-pane fade in" id="day2" aria-labelledby="day2-tab">
							<div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
								<!-- PROGRAM 1-->
								<div class="panel panel-default">
								
									<!-- Program Heading -->
									<div class="panel-heading" role="tab" id="heading1">									   
										<div class="row">
											<div class="col-lg-2 col-md-2 col-sm-4"><p class="date">08.00 - 08.30</p></div>											
											<div class="col-lg-9 col-md-9 col-sm-8">												
												<h4 class="panel-title">
													<a href="javascript:;">Expo Tour</a>
												</h4>
											</div>
										</div>										
									</div>
									
								</div>

								<!-- PROGRAM 2-->
								<div class="panel panel-default">
								
									<!-- Program Heading -->
									<div class="panel-heading" role="tab" id="heading1">									   
										<div class="row">
											<div class="col-lg-2 col-md-2 col-sm-4"><p class="date">08.30 - 08.50</p></div>											
											<div class="col-lg-9 col-md-9 col-sm-8">												
												<h4 class="panel-title">
													<a href="javascript:;">Coffee Morning</a>
												</h4>
											</div>
										</div>										
									</div>
									
								</div>

								<!-- PROGRAM 3-->
								<div class="panel panel-default">
								
									<!-- Program Heading -->
									<div class="panel-heading" role="tab" id="heading1">									   
										<div class="row">
											<div class="col-lg-2 col-md-2 col-sm-4"><p class="date">08.50 - 09.00</p></div>											
											<div class="col-lg-9 col-md-9 col-sm-8">												
												<h4 class="panel-title">
													<a href="javascript:;">Registration</a>
												</h4>
											</div>
										</div>										
									</div>
									
								</div>

								<!-- PROGRAM 4-->
								<div class="panel panel-default">
								
									<!-- Program Heading -->
									<div class="panel-heading" role="tab" id="heading1">									   
										<div class="row">
											<div class="col-lg-2 col-md-2 col-sm-4"><p class="date">09.00 - 09.05</p></div>											
											<div class="col-lg-9 col-md-9 col-sm-8">												
												<h4 class="panel-title">
													<a href="javascript:;">Opening MC</a>
												</h4>
											</div>
										</div>										
									</div>
									
								</div>

								<!-- PROGRAM 5-->
								<div class="panel panel-default">
								
									<!-- Program Heading -->
									<div class="panel-heading" role="tab" id="heading1">									   
										<div class="row">
											<div class="col-lg-2 col-md-2 col-sm-4"><p class="date">09.05 - 09.15</p></div>											
											<div class="col-lg-9 col-md-9 col-sm-8">												
												<h4 class="panel-title">
													<a href="javascript:;">Welcoming from Director of Bandung Techno Park</a>
												</h4>
											</div>
										</div>										
									</div>
									
								</div>

								<!-- PROGRAM 6-->
								<div class="panel panel-default">
								
									<!-- Program Heading -->
									<div class="panel-heading" role="tab" id="heading1">									   
										<div class="row">
											<div class="col-lg-2 col-md-2 col-sm-4"><p class="date">09.15 - 09.45</p></div>											
											<div class="col-lg-9 col-md-9 col-sm-8">												
												<h4 class="panel-title">
													<a href="javascript:;">Keynote Speaker</a>
												</h4>
											</div>
										</div>										
									</div>
									
								</div>

								<!-- PROGRAM 7-->
								<div class="panel panel-default">
								
									<!-- Program Heading -->
									<div class="panel-heading" role="tab" id="heading1">									   
										<div class="row">
											<div class="col-lg-2 col-md-2 col-sm-4"><p class="date">09.45 - 10.00</p></div>											
											<div class="col-lg-9 col-md-9 col-sm-8">												
												<h4 class="panel-title">
													<a href="javascript:;">MoU signing & Photo session</a>
												</h4>
											</div>
										</div>										
									</div>
									
								</div>

								<!-- PROGRAM 8-->
								<div class="panel panel-default">
								
									<!-- Program Heading -->
									<div class="panel-heading" role="tab" id="heading1">									   
										<div class="row">
											<div class="col-lg-2 col-md-2 col-sm-4"><p class="date">10.00 - 10.15</p></div>											
											<div class="col-lg-9 col-md-9 col-sm-8">												
												<h4 class="panel-title">
													<a href="javascript:;">Academic : Telkom University Rector <br>Topic : "<i>The Role of Academia in Supporting the Growth of Economic through Innovation</i>"</a>
												</h4>
											</div>
										</div>										
									</div>
									
								</div>

								<!-- PROGRAM 9-->
								<div class="panel panel-default">
								
									<!-- Program Heading -->
									<div class="panel-heading" role="tab" id="heading1">									   
										<div class="row">
											<div class="col-lg-2 col-md-2 col-sm-4"><p class="date">10.15 - 10.30</p></div>											
											<div class="col-lg-9 col-md-9 col-sm-8">												
												<h4 class="panel-title">
													<a href="javascript:;">Bussiness : Telkom Group <br>Topic : "<i>The Needed Competencies Facing Global Challenges</i>"</a>
												</h4>
											</div>
										</div>										
									</div>
									
								</div>

								<!-- PROGRAM 10-->
								<div class="panel panel-default">
								
									<!-- Program Heading -->
									<div class="panel-heading" role="tab" id="heading1">									   
										<div class="row">
											<div class="col-lg-2 col-md-2 col-sm-4"><p class="date">10.30 - 10.45</p></div>											
											<div class="col-lg-9 col-md-9 col-sm-8">												
												<h4 class="panel-title">
													<a href="javascript:;">Bussiness : Mr. Stephanus Widjaja, Founder of Business Indonesia Singapore Association <br>Topic : "<i>The Needed Competencies Facing Global Challenges</i>"</a>
												</h4>
											</div>
										</div>										
									</div>
									
								</div>

								<!-- PROGRAM 11-->
								<div class="panel panel-default">
								
									<!-- Program Heading -->
									<div class="panel-heading" role="tab" id="heading1">									   
										<div class="row">
											<div class="col-lg-2 col-md-2 col-sm-4"><p class="date">10.45 - 11.00</p></div>											
											<div class="col-lg-9 col-md-9 col-sm-8">												
												<h4 class="panel-title">
													<a href="javascript:;">Community : Mr. Nugroho Gito Prasodjo (VP FAST & CTO Accenture)<br>Topic : "<i>The Opportunities for Collaboration between Comumunities & STP</i>"</a>
												</h4>
											</div>
										</div>										
									</div>
									
								</div>

								<!-- PROGRAM 12-->
								<div class="panel panel-default">
								
									<!-- Program Heading -->
									<div class="panel-heading" role="tab" id="heading1">									   
										<div class="row">
											<div class="col-lg-2 col-md-2 col-sm-4"><p class="date">11.00 - 11.15</p></div>											
											<div class="col-lg-9 col-md-9 col-sm-8">												
												<h4 class="panel-title">
													<a href="javascript:;">Government : Ministry of Research & Technology<br>Topic : "<i>The Role of Government in Supporting the Growth of STP</i>"</a>
												</h4>
											</div>
										</div>										
									</div>
									
								</div>

								<!-- PROGRAM 13-->
								<div class="panel panel-default">
								
									<!-- Program Heading -->
									<div class="panel-heading" role="tab" id="heading1">									   
										<div class="row">
											<div class="col-lg-2 col-md-2 col-sm-4"><p class="date">11.15 - 11.30</p></div>											
											<div class="col-lg-9 col-md-9 col-sm-8">												
												<h4 class="panel-title">
													<a href="javascript:;">Media : Kumparan/CNN *<br>Topic : "<i>The Role of Media in Supporting the Growth of Economic through Innovation</i>"</a>
												</h4>
											</div>
										</div>										
									</div>
									
								</div>

								<!-- PROGRAM 14-->
								<div class="panel panel-default">
								
									<!-- Program Heading -->
									<div class="panel-heading" role="tab" id="heading1">									   
										<div class="row">
											<div class="col-lg-2 col-md-2 col-sm-4"><p class="date">11.30 - 11.45</p></div>											
											<div class="col-lg-9 col-md-9 col-sm-8">												
												<h4 class="panel-title">
													<a href="javascript:;">Open discussion & Closing by moderator</a>
												</h4>
											</div>
										</div>										
									</div>
									
								</div>

								<!-- PROGRAM 15-->
								<div class="panel panel-default">
								
									<!-- Program Heading -->
									<div class="panel-heading" role="tab" id="heading1">									   
										<div class="row">
											<div class="col-lg-2 col-md-2 col-sm-4"><p class="date">11.45 - 11.55</p></div>											
											<div class="col-lg-9 col-md-9 col-sm-8">												
												<h4 class="panel-title">
													<a href="javascript:;">Photo session</a>
												</h4>
											</div>
										</div>										
									</div>
									
								</div>

								<!-- PROGRAM 16-->
								<div class="panel panel-default">
								
									<!-- Program Heading -->
									<div class="panel-heading" role="tab" id="heading1">									   
										<div class="row">
											<div class="col-lg-2 col-md-2 col-sm-4"><p class="date">11.55 - 12.00</p></div>											
											<div class="col-lg-9 col-md-9 col-sm-8">												
												<h4 class="panel-title">
													<a href="javascript:;">Closing MC</a>
												</h4>
											</div>
										</div>										
									</div>
									
								</div>

								<!-- PROGRAM 17-->
								<div class="panel panel-default">
								
									<!-- Program Heading -->
									<div class="panel-heading" role="tab" id="heading1">									   
										<div class="row">
											<div class="col-lg-2 col-md-2 col-sm-4"><p class="date">12.00 - 13.00</p></div>											
											<div class="col-lg-9 col-md-9 col-sm-8">												
												<h4 class="panel-title">
													<a href="javascript:;">Lunch & Break</a>
												</h4>
											</div>
										</div>										
									</div>
									
								</div>
							</div>
						</div>
						
						<!-- DAY 3 -->
						<div role="tabpanel" class="tab-pane fade in" id="day3" aria-labelledby="day3-tab">
							<div class="panel-group" id="accordion3" role="tablist" aria-multiselectable="true">
								<!-- PROGRAM 1-->
								<div class="panel panel-default">
								
									<!-- Program Heading -->
									<div class="panel-heading" role="tab" id="heading1">									   
										<div class="row">
											<div class="col-lg-2 col-md-2 col-sm-4"><p class="date">13.00 - 14.00</p></div>											
											<div class="col-lg-9 col-md-9 col-sm-8">												
												<h4 class="panel-title">
													<a href="javascript:;">Expo Tour</a>
												</h4>
											</div>
										</div>										
									</div>
									
								</div>

								<!-- PROGRAM 2-->
								<div class="panel panel-default">
								
									<!-- Program Heading -->
									<div class="panel-heading" role="tab" id="heading1">									   
										<div class="row">
											<div class="col-lg-2 col-md-2 col-sm-4"><p class="date">14.00 - 14.30</p></div>											
											<div class="col-lg-9 col-md-9 col-sm-8">												
												<h4 class="panel-title">
													<a href="javascript:;">BTP Product & Services</a>
												</h4>
											</div>
										</div>										
									</div>
									
								</div>

								<!-- PROGRAM 3-->
								<div class="panel panel-default">
								
									<!-- Program Heading -->
									<div class="panel-heading" role="tab" id="heading1">									   
										<div class="row">
											<div class="col-lg-2 col-md-2 col-sm-4"><p class="date">14.30 - 15.30</p></div>											
											<div class="col-lg-9 col-md-9 col-sm-8">												
												<h4 class="panel-title">
													<a href="javascript:;">Industry needs</a>
												</h4>
											</div>
										</div>										
									</div>
									
								</div>

								<!-- PROGRAM 4-->
								<div class="panel panel-default">
								
									<!-- Program Heading -->
									<div class="panel-heading" role="tab" id="heading1">									   
										<div class="row">
											<div class="col-lg-2 col-md-2 col-sm-4"><p class="date">15.30 - 16.30</p></div>											
											<div class="col-lg-9 col-md-9 col-sm-8">												
												<h4 class="panel-title">
													<a href="javascript:;">Discussion</a>
												</h4>
											</div>
										</div>										
									</div>
									
								</div>

								<!-- PROGRAM 5-->
								<div class="panel panel-default">
								
									<!-- Program Heading -->
									<div class="panel-heading" role="tab" id="heading1">									   
										<div class="row">
											<div class="col-lg-2 col-md-2 col-sm-4"><p class="date">16.30 - 17.00</p></div>											
											<div class="col-lg-9 col-md-9 col-sm-8">												
												<h4 class="panel-title">
													<a href="javascript:;">Pitching (tentative)</a>
												</h4>
											</div>
										</div>										
									</div>
									
								</div>
							</div>
						</div>
					
					</div>
					
				</div>
				
			</div>
		</div>
	</section>
	
	<!-- VENUE -->
	<section id="venue">
	
		<div class="venue">
			<div class="venue-inner">
				<div class="container">
					<div class="row">
						
						<div class="col-lg-8 col-md-8 col-sm-8">
							<h2 class="uppercase">lokasi</h2>
							<p class="lead">BTPSAE bertempat di Telkom University<br />Kampus berbasis ICT, Bandung Technoplex Telkom University</p>
							<h4>Telkom University</h4>
							<img class="img-responsive" src="<?= $baseurl ?>/assets/web/img/logo-telkom-university-grey.png" alt="hotel">
						</div>
						
						<div class="col-lg-4 col-md-4 col-sm-4">
							<i class="pe-4x pe-7s-map-2"></i>
							<h4 class="uppercase">alamat</h4>
							<p>Jl. Telekomunikasi Terusan Buah Batu, 40257 , Bandung , Indonesia<br />+62 (22) 7564 108<br />1.5 km from Buahbatu Tol Gateway</p>
							
							<a class="button button-xsmall button-line-light" href="https://www.telkomuniversity.ac.id">more information</a>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				
				<div class="col-lg-3 col-md-3">
					<h3>Accomodation  Alternatives</h3>
					<p>...</p>
				</div>
				
				<div class="col-lg-9 col-md-9">
					
					<!-- hotel carousel -->
					<div id="hotel-carousel">
						<div class="item">
							<div class="hotel">
								<img class="img-responsive" src="<?= $baseurl ?>/assets/web/img/accomodation/asrama-universitas-telkom.jpg" alt="">
								
								<div class="caption">
									<h5 class="uppercase">Asrama Universitas Telkom</h5>
									<span class="rating">
									  <i class="fa fa-star"></i>
									  <i class="fa fa-star"></i>
									  <i class="fa fa-star"></i>
									</span>
									
									<p class="small">Asrama Universitas Telkom juga disewakan untuk finalis cyber competition.</p>
									<a class="button button-xsmall button-line-dark" href="#">details</a>
								</div>
								
							</div>
						</div>
						
						<div class="item">
							<div class="hotel">
								<img class="img-responsive" src="<?= $baseurl ?>/assets/web/img/accomodation/hotel-asrilia-bandung.jpg" alt="">
								
								<div class="caption">
									<h5 class="uppercase">Hotel Asrilia Bandung</h5>
									<span class="rating">
									  <i class="fa fa-star"></i>
									  <i class="fa fa-star"></i>
									  <i class="fa fa-star"></i>
									</span>
									
									<p class="small">Hotel Asrilia berlokasi di jalan buahbatu sekitar 5km dari kampus.</p>
									<a class="button button-xsmall button-line-dark" href="#">details</a>
								</div>
								
							</div>
						</div>
						
						<div class="item">
							<div class="hotel">
								<img class="img-responsive" src="<?= $baseurl ?>/assets/web/img/accomodation/ojol.jpg" alt="">
								
								<div class="caption">
									<h5 class="uppercase">Ojek Online</h5>
									<span class="rating">
									  <i class="fa fa-star"></i>
									  <i class="fa fa-star"></i>
									  <i class="fa fa-star"></i>
									</span>
									
									<p class="small">Ojek online dapat menjadi salah satu alternatif sarana transportasi.</p>
									<a class="button button-xsmall button-line-dark" href="#">details</a>
								</div>
								
							</div>
						</div>
					</div>
					
				</div>
				
			</div>
		</div>
		
	</section>
	
	<!-- FUNFACTS -->
	<section id="funfacts">
		<div class="funfacts-inner">
			<div class="container">
				<div class="row">
					
					<h2 class="hidden">funfacts</h2>
					
					<div class="col-lg-10 col-lg-offset-1">
						<div id="funfacts-carousel">
							
							<div class="item">
								<i class="pe pe-4x pe-7s-world"></i>
								<div class="desc">
									<p class="number">72.5</p>
									<p class="description">Million total prize</p>
								</div>
							</div>
							
							<div class="item">
								<i class="pe pe-4x pe-7s-display2"></i>
								<div class="desc">
									<p class="number">5</p>
									<p class="description">Team Winners</p>
								</div>
							</div>
							
							<div class="item">
								<i class="pe pe-4x pe-7s-micro"></i>
								<div class="desc">
									<p class="number">5</p>
									<p class="description">speakers</p>
								</div>
							</div>
							
							<div class="item">
								<i class="pe pe-va pe-4x pe-7s-id"></i>
								<div class="desc">
									<p class="number">300</p>
									<p class="description">seat attenders</p>
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	
	<!-- REGISTER -->
	<section id="register">
		<div class="container">
			<div class="row">
			
				<div class="col-lg-12">
					<h2 class="uppercase text-center">PRIZE POOL</h2>
					<p class="lead text-center">CAPTURE THE FLAG'S (CTF) PRIZE POOL</p>
				</div>
			
				<div class="col-lg-12">                        
					<!-- PRICE TABLES -->
					<div id="price-carousel">
						
						<div class="price-table early-bird">
							<div class="icon">
								<i class="pe-5x pe-7s-wristwatch"></i> 
							</div>
							
							<div class="table-header">
								<h3>Juara I</h3>
								<p class="price">30 jt</p>
							</div>
							
							<ul class="desc list-unstyled">
								<li>Sertifikat</li>
							</ul>
						</div>
						
						<div class="price-table standart">
							<div class="icon">
								<i class="pe-5x pe-7s-wristwatch"></i> 
							</div>
							
							<div class="table-header">
								<h3>Juara II</h3>
								<p class="price">20 jt</p>
							</div>
							
							<ul class="desc list-unstyled">
								<li>Sertifikat</li>
							</ul>
						</div>
						
						<div class="price-table vip">
							<div class="icon">
								<i class="pe-5x pe-7s-wristwatch"></i> 
							</div>
							
							<div class="table-header">
								<h3>Juara III</h3>
								<p class="price">10 jt</p>
							</div>
							
							<ul class="desc list-unstyled">
								<li>Sertifikat</li>
							</ul>
						</div>
						
						<div class="price-table early-bird">
							<div class="icon">
								<i class="pe-5x pe-7s-wristwatch"></i> 
							</div>
							
							<div class="table-header">
								<h3>Juara Harapan I</h3>
								<p class="price">7.5 jt</p>
							</div>
							
							<ul class="desc list-unstyled">
								<li>Sertifikat</li>
							</ul>
						</div>
						
						<div class="price-table standart">
							<div class="icon">
								<i class="pe-5x pe-7s-wristwatch"></i> 
							</div>
							
							<div class="table-header">
								<h3>Juara Harapan II</h3>
								<p class="price">5 jt</p>
							</div>
							
							<ul class="desc list-unstyled">
								<li>Sertifikat</li>
							</ul>
						</div>
					
					</div>
				</div>
				
				<div class="col-lg-12 text-center">
					<a class="button button-small button-line-dark html-popup" href="#">register competition now</a>
				</div>
				
			</div>
		</div>
	</section>
	
	<!-- SPONSORS -->
	<section id="sponsors">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="uppercase">ORGANIZED</h2>
					<p class="lead">Hosted By and Organized By:</p>
					
					<div id="sponsors-carousel">
						
						<div class="sponsor">
							<img class="img-responsive" src="<?= $baseurl ?>/assets/web/img/sponsorship/logo-telkom-university.png" alt="">
						</div>
						
						<div class="sponsor">
							<img class="img-responsive" src="<?= $baseurl ?>/assets/web/img/sponsorship/logo-klz.png" alt="">
						</div>
						
					</div>
					
				</div>
				<div class="col-lg-12" style="margin-top:10px">
					<p class="lead">Supported By:</p>
					
					<div id="sponsors-carousel2">
						
						<div class="sponsor">
							<img class="img-responsive" src="<?= $baseurl ?>/assets/web/img/sponsorship/logo-kemenko-polhukam.png" alt="">
						</div>
						
						<div class="sponsor">
							<img class="img-responsive" src="<?= $baseurl ?>/assets/web/img/sponsorship/logo-kemkominfo.png" alt="">
						</div>
						
						<div class="sponsor">
							<img class="img-responsive" src="<?= $baseurl ?>/assets/web/img/sponsorship/logo-bssn.png" alt="">
						</div>
						
						<div class="sponsor">
							<img class="img-responsive" src="<?= $baseurl ?>/assets/web/img/sponsorship/logo-telkom.png" alt="">
						</div>
						
						<div class="sponsor">
							<img class="img-responsive" src="<?= $baseurl ?>/assets/web/img/sponsorship/logo-dds.png" alt="">
						</div>
						
						<div class="sponsor">
							<img class="img-responsive" src="<?= $baseurl ?>/assets/web/img/sponsorship/logo-ypt.png" alt="">
						</div>
						
					</div>
					
				</div>
			</div>
		</div>
	</section>
	
	<!-- google map -->
	<div style="width:100%; overflow:hidden"><img src="<?= $baseurl ?>/assets/web/img/google-maps-alamat-universitas-telkom.jpg" height="219"></div>
	
	<!-- FOOTER -->        
	<footer id="footer">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-3 col-md-3 col-sm-6">
					<h4 class="uppercase">BTPSAE 2020</h4>
					<p class="small">Bandung Techno Park Seminar And Expo</p>
					<ul class="list-unstyled list-inline uppercase">
						<li><a href="#"><i class="fa fa-lg fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-lg fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-lg fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-lg fa-google-plus"></i></a></li>
					</ul>
				</div>
				
				<div class="col-lg-3 col-md-3 col-sm-6">
					<h4 class="uppercase">FAQ</h4>
					<!--<p class="small">Etiam nec porta risus. Aliquam id odio orci. Duis accumsan feugiat feugiat.</p>-->
					
					<dl class="faqs">
						<dt>Apakah seminar BTPSAE berbayar?</dt>
						<dd class="small">Seminar ini gratis.</dd>
					
						<dt>Apa itu seminar BTPSAE?</dt>
						<dd class="small">Seminar ini menjelaskan peran akademisi dalam mendukung pertumbuhan ekonomi melalui inovasi. Diharapkan yang hadir dapat memahami pertumbuhan ekonomi melalui inovasi.</dd>
					
						<dt>Apakah ada perbedaan dari seminar lainnya ?</dt>
						<dd class="small">Perbedaan dari seminar yang lain adalah seminar ini dapat memberikan feedback pada pertumbuhan ekonomi dari peran akademisi.</dd>
					</dl>
				</div>
				
				
				<div class="col-lg-6 col-md-6 col-sm-12">
					<h4 class="uppercase">subscribe information</h4>
					
					<div class="row">
						<div class="col-lg-8"> 
							<input type="email" id="newsletter_email">
						</div> 
						<div class="col-lg-4">     
							<button class="button button-big button-line-light" onclick="newsletter_send();">subscribe</button>
						</div>
					</div>
					
				</div>
			
			</div>
		</div>
	</footer>
	
	<!-- SUBFOOTER -->
	<div class="subfooter">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<span>Copyright 2020 BTPSAE. All rights reserved</span>
				</div>
				<div class="col-lg-8">
					<ul class="list-unstyled list-inline pull-right uppercase">
						<li><a href="#">Terms</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Press Kit</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
				
			</div>
		</div>
	</div> 
	

	
	<!--<script src="http://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>-->
	<script src="<?= $baseurl ?>/assets/web/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPQXi7ZBZ73SPXi7JfHycSCi30thvQGCg&amp;sensor=false&amp;libraries=places"></script>
	<script src="<?= $baseurl ?>/assets/web/js/jquery.themepunch.tools.min.js"></script>
	<script src="<?= $baseurl ?>/assets/web/js/jquery.themepunch.revolution.min.js"></script>
	<script src="<?= $baseurl ?>/assets/web/js/bootstrap.min.js"></script>
	<script src="<?= $baseurl ?>/assets/web/js/jquery.sticky.js"></script>
	<script src="<?= $baseurl ?>/assets/web/js/jquery.magnific-popup.min.js"></script>
	<script src="<?= $baseurl ?>/assets/web/js/salvattore.js"></script>
	<script src="<?= $baseurl ?>/assets/web/js/jquery.countdown.js"></script>
	<script src="<?= $baseurl ?>/assets/web/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="<?= $baseurl ?>/assets/web/js/waypoints.min.js"></script>
	<script src="<?= $baseurl ?>/assets/web/js/jquery.counterup.min.js"></script>
	<script src="<?= $baseurl ?>/assets/web/js/owl.carousel.min.js"></script>
	<script src="<?= $baseurl ?>/assets/web/js/retina.js"></script>
	
	<script src="<?= $baseurl ?>/assets/web/js/main.js"></script>
</body>
</html>