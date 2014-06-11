<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Jaguarlabs">
	<title>Fut App</title>
	
	<!-- CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/animate.css" rel="stylesheet">
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/css/style-responsive.css" rel="stylesheet">
	<link href="assets/third/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="assets/third/hovericon/css/component.css" rel="stylesheet">
	<link href="assets/css/superslides.css" rel="stylesheet" >
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	</head>
	
	<body class="tooltips" id="top" data-spy="scroll" data-target="#myScrollspy">
	
<!-- 	<div class="loader"></div>
 -->	
	<div class="wrapper">
		<div id="header-landing">
			<div id="nav-menu">
				<div class="container">
					<div id="logo">
					<img src="images/logo/logo_futapp.png" width="90px" height="43px"><span style="color:#FFF;">El DT que llevas dentro</span>
					</div>
					<div class="menus" id="myScrollspy">
						<ul class="nav scroll-nav">
							<li class="active"><a href="#top"><i class="fa fa-home"></i><span>Inicio</span></a></li>
							<li><a href="#video"><i class="fa fa-video-camera"></i><span>Vídeo</span></a></li>
							<li><a href="#ligas"><i class="fa fa-picture-o"></i><span>Ligas</span></a></li>
							<li><a href="#calendario"><i class="fa fa-calendar"></i><span>Calendario</span></a></li>
							<li><a href="#tips"><i class="fa fa-coffee"></i><span>Tips</span></a></li>
							<li><a href="#descarga"><i class="fa  fa-download"></i><span>Descarga</span></a></li>
							<li><a href="#twitter"><i class="fa  fa-twitter"></i><span>Twitter</span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="awesome-slogan">
				<h2><img src="images/logo/logo_futapp.png" width="40%" height="40%"></h2>
				<h4 id="headerstopwatch"></h4>
				<p>S&iacute;guenos en:</p>
				<div class="clear"></div>
				<div class="social-icons">
					<a href="https://www.facebook.com/pages/Fut-App/138220466328609" data-toggle="tooltip" title="Facebook" target="facebook"><img src="assets/img/social-icons/facebook.png" alt="Facebook icon"></a>
					<a href="https://twitter.com/FutApp" data-toggle="tooltip" title="Twitter" target="twitter"><img src="assets/img/social-icons/twitter.png" alt="Twitter icon"></a>
				</div>
			</div>
		</div>


		<div class="section-page-landing back-black" id="video">
			<div class="container">
				<div class="row">
					<div class="span8">
						<?php
							$videos = array();
							$videos[] = '//www.youtube.com/embed/yHbN6o-Ozzg';

							$video = $videos[array_rand($videos, 1)];
						?>
						<div class="flex-video widescreen" style="margin: 0 auto;text-align:center;">
						<iframe allowfullscreen="" src="<?php print $video; ?>?feature=player_detailpage" frameborder="0"></iframe>
						</div>
					</div>
				</div>  
				<br>
			</div>
		</div>


	<!-- 	<div class="section-page-landing back-black" id="video">
				<div class="container">
					<h2>&nbsp;</h2>
					<div class="row">
							<div class="the-box-landing border-hover-bottom text-center">
								<iframe width="400" height="300" src="//www.youtube.com/embed/aEOjl5oDgFo?list=UUGnjeahCJW1AF34HBmQTJ-Q" frameborder="0" allowfullscreen></iframe>
							</div>
					</div>
				</div>
		</div> -->


		<div class="section-page-landing section-light-grey" id="ligas">
	 		<div class="container" style="width:100% !important;padding-left:0px !important;padding-right:0px !important;">
				<div id="carousel1" class="carousel slide">

					<div class="carousel-inner">
							<?php
								$flags = array();
								$flags[] = array('title'=>'Liga Brasileña', 'flag'=>'brazil.gif');
								$flags[] = array('title'=>'Liga Croata', 'flag'=>'croatia.gif');
								$flags[] = array('title'=>'Liga Mexicana', 'flag'=>'mexico.gif');
								$flags[] = array('title'=>'Liga Camerunesa', 'flag'=>'cameroon.gif');
								$flags[] = array('title'=>'Liga Española', 'flag'=>'spain.gif');
								$flags[] = array('title'=>'Liga Holandesa', 'flag'=>'holland.gif');
								$flags[] = array('title'=>'Liga Chilena', 'flag'=>'chile.gif');
								$flags[] = array('title'=>'Liga Australiana', 'flag'=>'autralia.gif');
								$flags[] = array('title'=>'Liga Colombiana', 'flag'=>'colombia.gif');
								$flags[] = array('title'=>'Liga Costa Marfilesa', 'flag'=>'costademarfil.gif');
								$flags[] = array('title'=>'Liga Japonesa', 'flag'=>'japan.gif');
								$flags[] = array('title'=>'Liga Uruguaya', 'flag'=>'uruguay.gif');
								$flags[] = array('title'=>'Liga Costarricense', 'flag'=>'costarica.gif');
								$flags[] = array('title'=>'Liga Inglesa', 'flag'=>'england.gif');
								$flags[] = array('title'=>'Liga Italiana', 'flag'=>'italy.gif');
								$flags[] = array('title'=>'Liga Suiza', 'flag'=>'suiza.gif');
								$flags[] = array('title'=>'Liga Ecuatoriana', 'flag'=>'ecuador.gif');
								$flags[] = array('title'=>'Liga Francesa', 'flag'=>'francia.gif');
								$flags[] = array('title'=>'Liga Hondureña', 'flag'=>'honduras.gif');
								$flags[] = array('title'=>'Liga Argentina', 'flag'=>'argentina.gif');
								$flags[] = array('title'=>'Liga Bosnia-herzegovina', 'flag'=>'bosnia.gif');
								$flags[] = array('title'=>'Liga Iraní', 'flag'=>'iran.gif');
								$flags[] = array('title'=>'Liga Nigeriana', 'flag'=>'nigeria.gif');
								$flags[] = array('title'=>'Liga Alemana', 'flag'=>'germany.gif');
								$flags[] = array('title'=>'Liga Portuguesa', 'flag'=>'portugal.gif');
								$flags[] = array('title'=>'Liga Ghanesa', 'flag'=>'ghana.gif');
								$flags[] = array('title'=>'Liga MLS', 'flag'=>'us.gif');
								$flags[] = array('title'=>'Liga Belga', 'flag'=>'belgium.gif');
								$flags[] = array('title'=>'Liga Argelia', 'flag'=>'argelia.gif');
								$flags[] = array('title'=>'Liga Rusia', 'flag'=>'russia.gif');
								$flags[] = array('title'=>'Liga Coreana', 'flag'=>'korea.gif');

								$i = 0;
								foreach($flags as $k => $content){
									$isActive = ($i == 0) ? 'active' : '';
									print '<div class="item '.$isActive .' text-center">
											<img src="images/image005.jpg" alt="" class="tips_carousel" width="100%">
											<div class="carousel-caption" style="background: rgba(1,1,1,.75);">
												<div class="col-lg-12 col-centered">
													<h1 style="color:#fff;">'.$content['title'].'</h1>
												</div>
												<div class="col-md-6 col-md-offset-3">  
													<img src="images/banderas/'.$content['flag'].'" class="img-responsive text-center" alt="'.$content['title'].'">
												</div>
												<div class="col-lg-12 col-centered">
													<h2>Próximamente...</h2>
												</div>
											</div>
										</div>';
									$i++;	
								}
							?>
							

						
					</div>

					<a class="left carousel-control" href="#carousel1" data-slide="prev">
						<span class="icon-prev"></span>
					</a>
					<a class="right carousel-control" href="#carousel1" data-slide="next">
						<span class="icon-next"></span>
					</a>
				</div>
			</div>
		</div>

		<div class="section-page-landing section-transparent" style="background-position: 50% 2px;padding-top:100px;padding-bottom:100px;background: rgba(1,1,1,.75);">
			<div class="section-overlay">
				<div class="inner-section-space">
					<div class="container">
						<h2 class="text-center"><span>FutApp</span> el D.T. que llevas dentro</h2>
					</div>
				</div>
			</div>
		</div>

		 <div class="section-page-landing back-grey" id="calendario">
		 	<div class="container">
				<h2 class="text-left">Calendario mundialista 2014</h2>
		 		<div class="row">

		 			<div class="col-xs-6 col-sm-4"><img src="images/calendario/12_JUNIO.jpg" class="img-responsive"></div>
  					<div class="col-xs-6 col-sm-4"><img src="images/calendario/13_JUNIO.jpg" class="img-responsive"></div>
  					<div class="col-xs-6 col-sm-4"><img src="images/calendario/14_JUNIO.jpg" class="img-responsive"></div>
				</div>
				<div class="row">
		 			<div class="col-xs-6 col-sm-4"><img src="images/calendario/15_JUNIO.jpg" class="img-responsive"></div>
  					<div class="col-xs-6 col-sm-4"><img src="images/calendario/16_JUNIO.jpg" class="img-responsive"></div>
  					<div class="col-xs-6 col-sm-4"><img src="images/calendario/17_JUNIO.jpg" class="img-responsive"></div>
				</div>
				<div class="row">
		 			<div class="col-xs-6 col-sm-4"><img src="images/calendario/18_JUNIO.jpg" class="img-responsive"></div>
  					<div class="col-xs-6 col-sm-4"><img src="images/calendario/19_JUNIO.jpg" class="img-responsive"></div>
  					<div class="col-xs-6 col-sm-4"><img src="images/calendario/20_JUNIO.jpg" class="img-responsive"></div>
				</div>
				<div class="row">
		 			<div class="col-xs-6 col-sm-4"><img src="images/calendario/21_JUNIO.jpg" class="img-responsive"></div>
  					<div class="col-xs-6 col-sm-4"><img src="images/calendario/22_JUNIO.jpg" class="img-responsive"></div>
  					<div class="col-xs-6 col-sm-4"><img src="images/calendario/23_JUNIO.jpg" class="img-responsive"></div>
				</div>
				<div class="row">
		 			<div class="col-xs-6 col-sm-4"><img src="images/calendario/24_JUNIO.jpg" class="img-responsive"></div>
  					<div class="col-xs-6 col-sm-4"><img src="images/calendario/25_JUNIO.jpg" class="img-responsive"></div>
  					<div class="col-xs-6 col-sm-4"><img src="images/calendario/26_JUNIO.jpg" class="img-responsive"></div>
				</div>
			</div>
			<br>
		 </div>

		 <div class="section-page-landing section-light-grey" id="tips">
	 		<div class="container">
				<h2 class="text-center">Tips para FutApp</h2>
				<div id="carousel-example-generic" class="carousel slide">
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<img src="images/tuto/tuto1.jpg" alt="" class="tips_carousel">
						</div>
						<div class="item">
							<img src="images/tuto/tuto2.jpg" alt="" class="tips_carousel">
						</div>
						<div class="item">
							<img src="images/tuto/tuto3.jpg" alt="" class="tips_carousel">
						</div>
						<div class="item">
							<img src="images/tuto/tuto4.jpg" alt="" class="tips_carousel">
						</div>
						<div class="item">
							<img src="images/tuto/tuto5.jpg" alt="" class="tips_carousel">
						</div>
					</div>

					<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
						<span class="icon-prev"></span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
						<span class="icon-next"></span>
					</a>
				</div>
				<br>
			</div>
		</div>


		<div class="section-page-landing section-transparent" id="descarga" style="background-position: 50% 0px;background: rgba(1,1,1,.70);">
			<div class="section-overlay">
				<div class="inner-section-space">
					<div class="container">
						<div class="row">
						<h2 class="text-center">Con <span>Fut App</span> saca el director que llevas dentro, crea tu alineación, compártela en redes sociales y demuestra tus conocimientos de futbol.</h2>
						</div>
						<div class="row" style="padding-top:35px;padding-bottom:35px;">
							<div class="col-md-1 text-left"></div>
							<div class="col-md-5 text-left">
								<a href="#"><img src="images/itunes_apple.png" class="img-responsive" style="display: inline !important;"></a>
							</div>
							<div class="col-md-5 text-right">
								<a href="#"><img src="images/android-store.png" class="img-responsive" style="display: inline !important;"></a>
							</div>
							<div class="col-md-1 text-left"></div>
						</div>
					</div>
					<br>
				</div>
			</div>
		</div>

		<div class="section-page-landing" id="twitter">
			<div class="inner-section">
				<div class="container text-center" id="tweets">
					<h2><img src="images/logo/twitter_logo.png" width="70" height="50"><span><a href="https://twitter.com/FutApp" target="_blank">@FutApp</a></span></h2>
					<div class="text-center" id="twitter-feed"></div>
				</div>
			</div>
		</div>

		<footer>
			<div class="footer">
				<div class="container">
					<div class="col-md-4 text-left">&copy; 2014 <a href="#">FutApp</a> Todos los derechos reservados.</div>
					<div class="col-md-4 text-center"><a href="mailto:info@futapp.mx">info@futapp.mx</a></div>
					<div class="col-md-4 text-right">
						<span>Developed by <a href="http://www.jaguarlabs.com" target="_blank"><img src="images/logo_jl.png" width="35%"></a></span>
					</div>
				</div>
			</div>
		</footer>

		<div id="back-top">
			<a href="#top"><i class="fa fa-chevron-up"></i></a>
		</div>
		
		
	</div>
	
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/jquery.smooth-scroll.js"></script>
		<script src="assets/third/hovericon/js/modernizr.custom.js"></script>
		<script src="assets/third/parallax/jquery.parallax-1.1.3.js"></script>
		<script src="assets/third/backstretch/jquery.backstretch.min.js"></script>
		<script src="assets/js/jquery.animate-enhanced.min.js"></script>
		<script src="assets/js/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>
		<script>
			$.backstretch([
			  "images/image001.jpg",
			  "images/image003.jpg",
			  "images/image004.jpg",
			  ], {
				fade: 750,
				duration: 6000
			});
		</script>
		
		<script>
			$(function() {
				$('.slides').superslides({
					hashchange: true
				});
			});
		</script>

		<script src="assets/js/teplok-one-page.js"></script>
		<script type="text/javascript" src="assets/js/stopwatch.js"></script>
		<script type="text/javascript" src="twitter/twitterfeed.js"></script>
		<script type="text/javascript">
			$(window).load(function() {
				$(".loader").fadeOut("slow");
			})
		</script>

	</body>
</html>
