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
<link rel="icon" href="images/favicon.png" type="image/x-icon" />
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
    <script src="https://api-maps.yandex.ru/2.1/?apikey=4127a7fc-e815-435e-adc6-eaf0517a8310&lang=ru_RU" type="text/javascript"></script>
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
						<a href="/"><img src="images/logo-papillon-transparent.png" alt=""></a>
					</div>
                    <!-- nav toggle button -->
                    <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed" aria-expanded="false" >
						<i class="flaticon-menu"></i>
					</button>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse">
                        <ul class="nav navbar-nav">
							<li class="active"> <a href="/">Для нее</a></li>
                            <li> <a href="/for_him">Для него</a></li>
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
    <footer class="site-footer map-footer text-white">
        <div class="footer-top bg-primary">
            <div class="container-fluid">
                <div class="row equal-wraper" >
                    <div class="col-md-6 col-sm-6 p-a0 equal-col">
                        <div id="map" style="border:0; min-height:500px; width:100%; height:100%;"></div>
                    </div>
                    <div class="col-md-6 col-sm-6 equal-col">
                        <div class="p-tb60 p-lr15">
                            <div class="max-w600">
                                <div class="footer-logo m-b30">
                                    <img src="images/logo-papillon-white.png" alt="" width="120"/>
                                </div>
                                <div class="m-b0">
                                    <h5 class="m-b10 text-white">Мы ждем вас по адресу:</h5>
                                    <p>г. Воронеж, ул. Свободы, д. 14 (БЦ БИК), 8 этаж, оф. 811</p>
                                    <p class="m-b25">График работы: с 8:00 до 22:00, без выходных</p>
                                    <div class="subscribe-form m-b20">
                                        <form role="search">
                                            <div class="input-group">
                                                <input name="text" class="form-control" placeholder="Email" type="text">
                                                <span class="input-group-btn">
													<button type="submit" class="site-button radius-xl">Подпишитесь на рассылку</button>
												</span>
                                            </div>
                                        </form>
                                    </div>
                                    <ul class="list-inline m-a0">
                                        <li><a href="https://www.instagram.com/papillon_vrn" class="site-button instagram footer-instagram circle"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="footer-bottom text-left row bg-primary-dark">
                            <div class="col-md-12 col-sm-12 text-left p-lr30">
                                <span>Copyright &copy; 2019 Papillon</span>
                                <div class="widget-link m-t10 ">
                                    <ul>
                                        <li><a href="javascript:;">Для нее</a></li>
                                        <li><a href="javascript:;"> Для него</a></li>
                                        <li><a href="javascript:;"> Отзывы</a></li>
                                        <li><a href="javascript:;"> Прайс</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
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
    ymaps.ready(init);
    function init(){
        // Создание карты.
        var myMap = new ymaps.Map("map", {
            center: [51.65902194, 39.19683768],
            zoom: 16
        });
        myMap.balloon.open([51.65902194, 39.19683768], {
            contentHeader: 'Papillon',
            contentBody: 'ул.Свободы 14 (БЦ БИК), оф.811',
            balloonPane: 'outerBalloon'
        });
    }
});	/*ready*/
</script>
</body>
</html>
