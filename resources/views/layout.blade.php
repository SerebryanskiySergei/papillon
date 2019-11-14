<!DOCTYPE html>
<!--[if IE 7 ]>  <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>  <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>  <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!-- Meta -->
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="" />
<meta name="author" content="" />
<meta name="robots" content="" />
<meta name="description" content="" />
<meta name="format-detection" content="telephone=no">
<!-- Favicons Icon -->
<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
<!-- Page Title Here -->
<title>Papillon - Салон депиляции</title>
<!-- Mobile Specific -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
	<![endif]-->
<!-- Stylesheets -->
<link rel="stylesheet" type="text/css" href="css/plugins.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link class="skin"  rel="stylesheet" type="text/css" href="css/skin/skin-1.css">
<link  rel="stylesheet" type="text/css" href="css/templete.css">

<!-- Revolution Slider Css -->
<link rel="stylesheet" type="text/css" href="plugins/revolution/v5.4.3/css/settings.css">
<!-- Revolution Navigation Style -->
<link rel="stylesheet" type="text/css" href="plugins/revolution/v5.4.3/css/navigation.css">
<!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,300,400,600,700,800,900|El+Messiri:100,200,300,400,500,600,700,800,900|Raleway:100,200,300,400,500,600,700,800,900|Montserrat:100,200,300,400,500,600,700,800,900|Open+Sans:300,400,600,700,800|Roboto:100,300,400,500,700,900" rel="stylesheet">
</head>
<body>
<div class="page-wraper">
<div id="loading-area"></div>
    <!-- header -->
    <header class="site-header header-transparent spa-header fullwidth">
		<div class="top-bar">
			<div class="container-fluid">
				<div class="row">
					<div class="dez-topbar-right topbar-social">
						<ul>
							<li><a href="https://vk.com/sergei_serebro" class="site-button-link facebook hover"><i class="fa fa-vk"></i></a></li>
							<li><a href="https://www.instagram.com/papillon_vrn" class="site-button-link instagram hover"><i class="fa fa-instagram"></i></a></li>
						</ul>
					</div>
					<div class="dez-topbar-right">
						<ul>
							<li><i class="fa fa-phone m-r5"></i>+7 (920) 246-57-64</li>
                            <li><i class="fa fa-envelope-o m-r5"></i> depilationvrn@gmail.com </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- main header -->
        <div class="sticky-header main-bar-wraper">
            <div class="main-bar clearfix ">
                <div class="container-fluid clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion">
						<a href="index.html"><img src="images/logo.png" alt=""></a>
					</div>
                    <!-- nav toggle button -->
                    <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed" aria-expanded="false" >
						<i class="flaticon-menu"></i>
					</button>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse">
                        <ul class="nav navbar-nav">
							<li class="active"> <a href="javascript:;">Главная</a></li>
							<li> <a href="javascript:;">Отзывы</a></li>
							<li> <a href="javascript:;">Прайс</a></li>
							<li> <a href="javascript:;">Для неё</a></li>
							<li class="has-mega-menu "> <a href="javascript:;">Для него</a></li>
						</ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
    <!-- header END -->
    @yield('content')
    <!-- Footer -->
    <footer class="bg-white spa-footer p-t100" id="footer1">
		<img src="images/skew/footer.svg" alt=""/>
		<div class="footer-top text-black">
            <div class="container">
                <div class="row equal-wraper2">
					<div class="col-md-4 col-sm-4 ">
                        <div class="ft-gallery-box">
							<div class="ft-gallery-media beauty-care owl-spa-btn">
								<div class="item  wow fadeInDown" data-wow-duration="1.50s" data-wow-delay="0.1s"><img src="images/gallery/ft-gallery/pic1.jpg" alt=""/></div>
								<div class="item  wow fadeInDown" data-wow-duration="1.50s" data-wow-delay="0.1s"><img src="images/gallery/ft-gallery/pic1.jpg" alt=""/></div>
							</div>
						</div>

						<div class="text-center m-t100">
							<h2>Свяжитесь с нами</h2>
							<ul class="list-inline">
                                <li><a href="https://vk.com/sergei_serebro" class="site-button facebook circle"><i class="fa text-white fa-vk"></i></a></li>
                                <li><a href="https://www.instagram.com/papillon_vrn" class="site-button instagram circle"><i class="fa text-white fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 text-center equal-col">
						<h2 class="m-b30 text-white min-title">Наше расположение</h2>
                        <img src="images/product/product/pic1.png" alt="" class="wow zoomIn" data-wow-duration="1.50s" data-wow-delay="0.1s"/>
                    </div>
					<div class="col-md-4 col-sm-4 text-center equal-col dis-tbl">
                        <div class="widget widget_getintuch dis-tbl-cell">
                            <h2 class="m-b30 text-white min-title">Салон депиляции Papillon:</h2>
                            <p class="p-lr20">Воронеж, Ленинский район, Свободы, 14, офис 808. 394018</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="footer-bg"></div>
        <!-- footer bottom part -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center"> <span>Copyright © 2019 Papillon. Все права защищены.</span> </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END-->
    <button class="scroltop fa fa-chevron-up" ></button>
</div>
<!-- JavaScript  files ========================================= -->
<script src="js/jquery.min.js"></script>
<!-- jquery.min js -->
<script src="plugins/wow/wow.js"></script>
<!-- Wow Animation js -->
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- bootstrap.min js -->
<script src="plugins/bootstrap-select/bootstrap-select.min.js"></script>
<!-- Form js -->
<script src="plugins/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<!-- Form js -->
<script src="plugins/magnific-popup/magnific-popup.js"></script>
<!-- magnific-popup js -->
<script src="plugins/counter/waypoints-min.js"></script>
<!-- waypoints js -->
<script src="plugins/counter/counterup.min.js"></script>
<!-- counterup js -->
<script src="plugins/imagesloaded/imagesloaded.js"></script>
<!-- masonry  -->
<script src="plugins/masonry/masonry-3.1.4.js"></script>
<!-- masonry  -->
<script src="plugins/masonry/masonry.filter.js"></script>
<!-- masonry  -->
<script src="plugins/owl-carousel/owl.carousel.js"></script>
<!-- OWL  Slider  -->
<script src="plugins/paroller/skrollr.min.js"></script>
<!-- Paroller Js -->
<script src="js/custom.js"></script>
<!-- custom fuctions  -->
<script src="js/dz.carousel.js"></script>
<!-- sortcode fuctions  -->

<script src="plugins/tilt/tilt.jquery.js"></script>
<script src="plugins/particles/particles.js"></script>
<!-- revolution JS FILES -->
<script src="plugins/revolution/v5.4.3/js/jquery.themepunch.tools.min.js"></script>
<script src="plugins/revolution/v5.4.3/js/jquery.themepunch.revolution.min.js"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="plugins/revolution/v5.4.3/js/extensions/revolution.extension.actions.min.js"></script>
<script src="plugins/revolution/v5.4.3/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="plugins/revolution/v5.4.3/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="plugins/revolution/v5.4.3/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="plugins/revolution/v5.4.3/js/extensions/revolution.extension.migration.min.js"></script>
<script src="plugins/revolution/v5.4.3/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="plugins/revolution/v5.4.3/js/extensions/revolution.extension.video.min.js"></script>
<script src="plugins/revolution/v5.4.3/js/extensions/revolution.extension.slideanims.min.js"></script>
<script  src="js/rev.slider.js"></script>
<!-- custom fuctions  -->
<script>
jQuery(document).ready(function() {
	dz_rev_slider_1();

});	/*ready*/
</script>
</body>
</html>
