<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    
	<title>FYP</title>
    <link rel="stylesheet" href="{{ asset('/assets/rabia/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/assets/rabia/bootstrap.min.js') }}">
	<link rel="stylesheet" href="{{ asset('/assets/rabia/css/all.min.css')}}">

    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">







	<!--<link rel="stylesheet" type="text/css" href=" ('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css')">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="('images/owl.css/favicon.ico" type="image/x-icon')}}">

<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i&display=swap" rel="stylesheet">
<-->
<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i&display=swap" rel="stylesheet">




<link href="{{ asset ('/assets/rabia/Uaques/font-awesome-all.css')}}" rel="stylesheet">
<link href="{{ asset ('/assets/rabia/Uaques/flaticons')}}" rel="stylesheet">
<link href="{{ asset ('/assets/rabia/Uaques/owl.css')}}" rel="stylesheet">
<link href="{{ asset ('/assets/rabia/Uaques/bootstrap.css')}}" rel="stylesheet">
<link href="{{ asset ('/assets/rabia/Uaques/jquery.fancybox.min.css')}}" rel="stylesheet">
<link href="{{ asset ('/assets/rabia/Uaques/animate.css')}}" rel="stylesheet">
<link href="{{ asset ('/assets/rabia/Uaques/imagebg.css')}}" rel="stylesheet">
<link href="{{ asset ('/assets/rabia/Uaques/color.css')}}" rel="stylesheet">
<link href="{{ asset ('/assets/rabia/Uaques/style.css')}}" rel="stylesheet">
<link href="{{ asset ('/assets/rabia/Uaques/responsive.css')}}" rel="stylesheet">

	<script src="{{ asset ('/assets/rabia/Uaques/bootstrap.bundle.js')}}" type="text/javascript" charset="utf-8" async defer></script>
    <script src="{{ asset ('/assets/rabia/Uaques/bootstrap.bundle.min.js')}}" type="text/javascript" charset="utf-8" async defer></script>

	<style>
body {
  background-image: url("/assets/rabia/Uaques/bgwater.jpeg");
  background-color: #cccccc;
}
</style>
</head>
<body class="boxed_wrapper">
<header class="main-header style-two">
 <!-- header-top -->
 <div class="header-top">
    <div class="auto-container clearfix">
        <div class="top-left pull-left">
            <ul class="info-box clearfix"> 
                <li><i class="fas fa-phone"></i>For Orders <a href="tel:8120703692" class="phone">812-070-3692</a></li>
                <li><i class="far fa-envelope-open"></i><a href="mailto:donations@example.org">donations@example.org</a></li>
                <li><i class="far fa-clock"></i>Monday to Friday 9am to 5pm</li>
            </ul>
        </div>
        <div class="top-right pull-right">
            <ul class="social-links clearfix">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
            </ul>
        </div>
    </div>


<nav class="navbar bg-light navbar-light  navbar-expand-sm mt-1 sticky-top">
    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
    <div class="container">
        <div class="p-5 text-center bg-light">
       <h1 class="mb-3">
        <img src="/assets/rabia/Uaques/logo.png"
             height="10"
             alt="AQwarn Logo">
             <span class="">AQwarn</span></h1>
    </div>

        <div class="main-menu">
                            
                                <ul class="navigation clearfix">
                                    <li class="current dropdown"><a href="/home">Home</a>
                                    </li>
                                    <li class="dropdown"><a href="#">Pages</a>
                                        <ul>
                                            <li><a href="/aboutus">About Us</a></li>
                                            <li><a href="/ourservices">Our Services</a></li>
                                            <li><a href="/ourfaqs">Our Faq's</a></li>
                                            <li><a href="/errorpage">Error Page</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Shop</a>
                                        <ul>
                                            <li><a href="/shopdeliveryform">Order Form</a></li>
                                            <li><a href="/shopdetails">Shop Details</a></li>
                                            <li><a href="/ourshop">Our Shop</a></li>

                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Element</a>
                                        <ul>
                                            <li><a href="/feature layout">Feature Layout</a></li>
                                            <li><a href="/video">Video Layout</a></li>
                                            <li><a href="/information layout">Info Layout</a></li>
                                            <li><a href="/counter">Counter Layout</a></li>
                                            <li><a href="/filteration">Filtration Layout</a></li>
                                            <li><a href="/our mission layout">Our Mission Layout</a></li>
                                            <li><a href="/service 01">Service Layout 01</a></li>
                                            <li><a href="/service 02">Service Layout 02</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Blog</a>
                                        <ul>
                                            <li><a href="/blogs">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/contact">Contact</a></li>
                                    <li class="dropdown "><a class="navbar-brand" href="/cartdetails"><i class="fa fa-cart-arrow-down" style="font-size:30px;color:primary"></i>
                                        {{-- <img src="assets/rabia/Uaques/cart.png" alt="Avatar Logo" style="width:65px;" class="rounded-circle"> --}}

                                        <span class="badge badge-info">

                                        {{ getitems_count() }}
                                    </span>
                                      </a></li>
                                    <li class="dropdown"><a href="/profile"><i class="fa fa-user" style="font-size:30px;color:primary"></i></a>
                                       
                                    </li>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
    </nav>
       <!--sticky Header-->
       <div class="sticky-header">
        <div class="auto-container clearfix">
            <figure class="logo-box"><a href="index.html"><img src="images/small-logo.png" alt=""></a></figure>
            <div class="menu-area">
                <nav class="main-menu clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- main-header end -->
@yield('content')




<footer class="main-footer">
    <div class="footer-top">
        <div class="border-shap">
            <div class="border-3" style="background-image: url(images/icons/border-4.png);"></div>
        </div>
        <div class="auto-container">
            <div class="inner-box clearfix">
                <div class="subscribe-form pull-left">
                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Email address to subscribe" required="">
                            <button type="submit" class="theme-btn style-two">subscribe</button>
                        </div>
                    </form>
                </div>
                <div class="footer-social pull-right">
                    <ul class="social-links clearfix">
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-upper">
        <div class="auto-container">
            <div class="widget-section wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="logo-widget footer-widget">
                            <figure class="footer-logo"><img src="/assets/rabia/Uaques/logo.png" alt=""> <span class="text text-white"><i>AQwarn</i></span></figure>
                            <div class="text">AQwarn the automatic system with smart sensor, which will sense the water level and generate an alert via web Application. The user does not need to monitor the water level, this automatic system have the ability to transfer data without human interaction through a network. </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="links-widget footer-widget">
                            <h3 class="widget-title">About Us</h3>
                            <div class="widget-content">
                                <ul class="list clearfix">
                                    <li><a href="#">Why Choose Us</a></li>
                                    <li><a href="#">Free Water Bottles</a></li>
                                    <li><a href="#">Water Dispensers</a></li>
                                    <li><a href="#">Bottled Water Coolers</a></li>
                                    <li><a href="#">Contact us</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="shediul-widget footer-widget">
                            <h3 class="widget-title">Business Hours</h3>
                            <div class="widget-content">
                                <ul class="list clearfix">
                                    <li>Monday-Friday: 9am to 5pm</li>
                                    <li>Saturday: 10am to 4pm</li>
                                    <li>Sunday: Closed</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                        <div class="contact-widget footer-widget">
                            <h3 class="widget-title">Contact us</h3>
                            <div class="widget-content">
                                <ul class="list clearfix">
                                    <li>Satellite Town, Gujranwala Pakistan</li>
                                    <li>Call Us <a href="tel:12078761059">03007430245</a></li>
                                    <li>E-mail: <a href="mailto:info@example.com">superadmin@gmail.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="copyright">Copyrights &copy; 2022 <a href="#">valotheme</a>. All rights reserved.</div>
        </div>
    </div>
</footer>
<!-- main-footer end -->

<!-- jequery plugins -->
<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/validation.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/scrollbar.js"></script>

<!-- main-js -->
<script src="js/script.js"></script>

</body>
</html>
