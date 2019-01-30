<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from demo.devitems.com/uniqlo/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Nov 2018 04:36:05 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home-2 || Minimalist eCommerce HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    

    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="{{ asset('/assets/frontend/uniqlo/css/bootstrap.min.css')}}">
    <!-- Owl Carousel main css -->
    <link rel="stylesheet" href="{{ asset('/assets/frontend/uniqlo/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/assets/frontend/uniqlo/css/owl.theme.default.min.css')}}">
    <!-- This core.css')}} file contents all plugings css file. -->
    <link rel="stylesheet" href="{{ asset('/assets/frontend/uniqlo/css/core.css')}}">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="{{ asset('/assets/frontend/uniqlo/css/shortcode/shortcodes.css')}}">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{ asset('/assets/frontend/uniqlo/style.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{ asset('/assets/frontend/uniqlo/css/responsive.css')}}">
    <!-- User style -->
    <link rel="stylesheet" href="{{ asset('/assets/frontend/uniqlo/css/custom.css')}}">


    <!-- Modernizr JS -->
    <script src="{{ asset('/assets/frontend/uniqlo/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->  

    <!-- Body main wrapper start -->
    <div class="wrapper fixed__footer">
        <!-- Start Header Style -->
        <header id="header" class="htc-header">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__area sticky__header header--2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-lg-2 col-sm-3 col-xs-3">
                            <div class="logo">
                                <a href="/">
                                    <img src="{{ asset('/assets/frontend/uniqlo/images/logo/2.png')}}" alt="logo">
                                </a>
                            </div>
                        </div>
                        <!-- Start MAinmenu Ares -->
                        <div class="col-md-8 col-lg-8 col-sm-6 col-xs-6">
                            <nav class="mainmenu__nav hidden-xs hidden-sm">
                                <ul class="main__menu">
                                    <li class="drop"><a href="/">Home</a>
                                        <ul class="dropdown">
                                            <li><a href="/home1">Home 1</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/about">About</a></li>
                                    <li class="drop"><a href="/blog">Blog</a>
                                        <ul class="dropdown">
                                            <li><a href="/blog">blog</a></li>
                                            <li><a href="/blog-details">blog details</a></li>
                                        </ul>
                                    </li>
                                    <li class="drop"><a href="/shop">Shop</a>
                                        <ul class="dropdown mega_dropdown">
                                            <!-- Start Single Mega MEnu -->
                                            <li><a class="mega__title" href="/shop">Shop Pages</a>
                                                <ul class="mega__item">
                                                    <li><a href="/shop">shop</a></li>
                                                    <li><a href="/sideshop">shop sidebar</a></li>
                                                    <li><a href="/cart">cart</a></li>
                                                    <li><a href="/checkout">checkout</a></li>
                                                    <li><a href="">wishlist</a></li>
                                                </ul>
                                            </li>
                                            <!-- End Single Mega MEnu -->
                                            <!-- Start Single Mega MEnu -->
                                            <li><a class="mega__title" href="/shop">Variable Product</a>
                                                <ul class="mega__item">
                                                    <li><a href="#">Category</a></li>
                                                    <li><a href="#">My Account</a></li>
                                                    <li><a href="">Wishlist</a></li>
                                                    <li><a href="/cart">Shopping Carte</a></li>
                                                    <li><a href="/checkout">Checkout</a></li>
                                                </ul>
                                            </li>
                                            <!-- End Single Mega MEnu -->
                                            <!-- Start Single Mega MEnu -->
                                            <li><a class="mega__title" href="/shop">Product Types</a>
                                                
                                    <li><a href="contact.html">contact</a></li>
                                </ul>
                            </nav>
                            <div class="mobile-menu clearfix visible-xs visible-sm">
                                <nav id="mobile_dropdown">
                                    <ul>
                                        <li><a href="/">Home</a>
                                            <ul>
                                                <li><a href="/home1">Home 1</a></li>
                                                
                                            </ul>
                                        </li>
                                        <li><a href="/about">About</a></li>
                                        <li><a href="/blog">blog</a>
                                            <ul>
                                                <li><a href="/blog">blog</a></li>
                                                <li><a href="/blog-details">blog details</a></li>
                                            </ul>
                                        </li>
                                        
                                        <li><a href="contact.html">contact</a></li>
                                    </ul>
                                </nav>
                            </div>                          
                        </div>
                        <!-- End MAinmenu Ares -->
                        <div class="col-md-2 col-sm-4 col-xs-3">  
                            <ul class="menu-extra">
                                <li class="search search__open hidden-xs"><span class="ti-search"></span></li>
                                <li class="cart__menu"><span class="ti-shopping-cart"></span></li>
                                <li class="toggle__menu hidden-xs hidden-sm"><span class="ti-menu"></span></li>
                                @guest
												<li class="nav-item">
													<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
												</li>
												<li class="nav-item">
													@if (Route::has('register'))
													<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
													@endif
												</li>
												@else
												<li class="nav-item dropdown">
													<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
														{{ Auth::user()->name }} <span class="caret"></span>
													</a>
                                                    

													<div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
														<a class="dropdown-item" href="{{ route('logout') }}"
														onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
														{{ __('Logout') }}
													</a>

													<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
														@csrf
													</form>
												</div>
											</li>
											@endguest
                            </ul>
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
        <!-- End Header Style -->
        
        <div class="body__overlay"></div>
        <!-- Start Offset Wrapper -->
        <div class="offset__wrapper">
            <!-- Start Search Popap -->
            <div class="search__area">
                <div class="container" >
                    <div class="row" >
                        <div class="col-md-12" >
                            <div class="search__inner">
                                <form action="#" method="get">
                                    <input placeholder="Search here... " type="text">
                                    <button type="submit"></button>
                                </form>
                                <div class="search__close__btn">
                                    <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Search Popap -->
            <!-- Start Offset MEnu -->
            <div class="offsetmenu">
                <div class="offsetmenu__inner">
                    <div class="offsetmenu__close__btn">
                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                    </div>
                    <div class="off__contact">
                        <div class="logo">
                            <a href="/">
                                <img src="{{ asset('/assets/frontend/uniqlo/images/logo/uniqlo.png')}}" alt="logo">
                            </a>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetu adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
                    </div>
                    <ul class="sidebar__thumd">
                        <li><a href="#"><img src="{{ asset('/assets/frontend/uniqlo/images/sidebar-img/1.jpg')}}" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="{{ asset('/assets/frontend/uniqlo/images/sidebar-img/2.jpg')}}" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="{{ asset('/assets/frontend/uniqlo/images/sidebar-img/3.jpg')}}" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="{{ asset('/assets/frontend/uniqlo/images/sidebar-img/4.jpg')}}" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="{{ asset('/assets/frontend/uniqlo/images/sidebar-img/5.jpg')}}" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="{{ asset('/assets/frontend/uniqlo/images/sidebar-img/6.jpg')}}" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="{{ asset('/assets/frontend/uniqlo/images/sidebar-img/7.jpg')}}" alt="sidebar images"></a></li>
                        <li><a href="#"><img src="{{ asset('/assets/frontend/uniqlo/images/sidebar-img/8.jpg')}}" alt="sidebar images"></a></li>
                    </ul>
                    <div class="offset__widget">
                        <div class="offset__single">
                            <h4 class="offset__title">Language</h4>
                            <ul>
                                <li><a href="#"> Engish </a></li>
                                <li><a href="#"> French </a></li>
                                <li><a href="#"> German </a></li>
                            </ul>
                        </div>
                        <div class="offset__single">
                            <h4 class="offset__title">Currencies</h4>
                            <ul>
                                <li><a href="#"> USD : Dollar </a></li>
                                <li><a href="#"> EUR : Euro </a></li>
                                <li><a href="#"> POU : Pound </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="offset__sosial__share">
                        <h4 class="offset__title">Follow Us On Social</h4>
                        <ul class="off__soaial__link">
                            <li><a class="bg--twitter" href="https://twitter.com/devitemsllc" target="_blank" title="Twitter"><i class="zmdi zmdi-twitter"></i></a></li>
                            
                            <li><a class="bg--instagram" href="https://www.instagram.com/devitems/" target="_blank" title="Instagram"><i class="zmdi zmdi-instagram"></i></a></li>

                            <li><a class="bg--facebook" href="https://www.facebook.com/devitems/?ref=bookmarks" target="_blank" title="Facebook"><i class="zmdi zmdi-facebook"></i></a></li>

                            <li><a class="bg--googleplus" href="https://plus.google.com/" target="_blank" title="Google Plus"><i class="zmdi zmdi-google-plus"></i></a></li>

                            <li><a class="bg--google" href="#" target="_blank" title="Google"><i class="zmdi zmdi-google"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Offset MEnu -->
            <!-- Start Cart Panel -->
            <div class="shopping__cart">
                <div class="shopping__cart__inner">
                    <div class="offsetmenu__close__btn">
                        <a href="#"><i class="zmdi zmdi-close"></i></a>
                    </div>
                    <div class="shp__cart__wrap">
                        <div class="shp__single__product">
                            <div class="shp__pro__thumb">
                                <a href="#">
                                    <img src="{{ asset('/assets/frontend/uniqlo/images/product/sm-img/1.jpg')}}" alt="product images">
                                </a>
                            </div>
                            <div class="shp__pro__details">
                                <h2><a href="product-details.html">BO&Play Wireless Speaker</a></h2>
                                <span class="quantity">QTY: 1</span>
                                <span class="shp__price">$105.00</span>
                            </div>
                            <div class="remove__btn">
                                <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                            </div>
                        </div>
                        <div class="shp__single__product">
                            <div class="shp__pro__thumb">
                                <a href="#">
                                    <img src="{{ asset('/assets/frontend/uniqlo/images/product/sm-img/2.jpg')}}" alt="product images">
                                </a>
                            </div>
                            <div class="shp__pro__details">
                                <h2><a href="product-details.html">Brone Candle</a></h2>
                                <span class="quantity">QTY: 1</span>
                                <span class="shp__price">$25.00</span>
                            </div>
                            <div class="remove__btn">
                                <a href="#" title="Remove this item"><i class="zmdi zmdi-close"></i></a>
                            </div>
                        </div>
                    </div>
                    <ul class="shoping__total">
                        <li class="subtotal">Subtotal:</li>
                        <li class="total__price">$130.00</li>
                    </ul>
                    <ul class="shopping__btn">
                        <li><a href="/cart">View Cart</a></li>
                        <li class="shp__checkout"><a href="/checkout">Checkout</a></li>
                    </ul>
                </div>
            </div>
            <!-- End Cart Panel -->
        </div>
        <!-- End Offset Wrapper -->
        <!-- Start Slider Area -->
        <div class="slider__container slider--two">
            <div class="slider__activation__wrap--2">
                <!-- Start Single Slide -->
                <div class="slider__full--screen" style="background: rgba(0, 0, 0, 0) url({{ asset('/assets/frontend/uniqlo/images/slider/bg/2.jpg')}}) no-repeat scroll center center / cover ;">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="slider__content--2 text-center">
                                    <div class="slider__inner--2 text-center">
                                        <h1>New Product Collection</h1>
                                        <div class="slider__btn">
                                            <a class="htc__btn" href="/cart">shop now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
            </div>
        </div>
        <!-- Start Slider Area -->
        <section class="htc__new__product bg__white ptb--100">
            <div class="container">
                <div class="row">
                    <div class="new__product__wrap clearfix">
                        <!-- Start New Product -->
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                            <div class="new__product foo">
                                <div class="new__product__thumb">
                                    <a href="product-details.html">
                                        <img src="{{ asset('/assets/frontend/uniqlo/images/new-product/1.jpg')}}" alt="new product">
                                    </a>
                                </div>
                                <div class="new__product__details">
                                    <h2><a href="product-details.html">New Product Collection</a></h2>
                                    <div class="new__product__btn">
                                        <a class="htc__btn shop__now__btn" href="/cart">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End New Product -->
                        <!-- Start New Product -->
                        <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 smt-30 xmt-30">
                            <div class="new__product text__align--left foo">
                                <div class="new__product__thumb">
                                    <a href="product-details.html">
                                        <img src="{{ asset('/assets/frontend/uniqlo/images/new-product/2.jpg')}}" alt="new product">
                                    </a>
                                </div>
                                <div class="new__product__details">
                                    <h2><a href="product-details.html">Basket Collection</a></h2>
                                    <div class="new__product__btn">
                                        <a class="htc__btn shop__now__btn" href="/cart">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End New Product -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Start Our Product Area -->
        <section class="htc__best__product__area pb--100 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title text-center">
                            <h2 class="title__line">Best Products</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="best__product__list clearfix mt--30">
                        <!-- Start Single Product -->
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="best__product foo">
                                <div class="best__product__inner">
                                    <div class="best__product__thumb">
                                        <a href="#">
                                            <img src="{{ asset('/assets/frontend/uniqlo/images/product/13.png')}}" alt="product images">
                                        </a>
                                    </div>
                                    <div class="bst__pro__hover__info">
                                        <div class="bst__pro__hover__action">
                                            <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                            <span class="bst__pro__prize">$16.00</span>
                                            <ul class="bst__pro__action">
                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                <li><a title="Add To Cart" href="/cart"><span class="ti-shopping-cart"></span></a></li>
                                                <li><a title="Add To Wishlist" class="add-to-cart" href=""><span class="ti-heart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="best__product foo">
                                <div class="best__product__inner">
                                    <div class="best__product__thumb">
                                        <a href="#">
                                            <img src="{{ asset('/assets/frontend/uniqlo/images/product/2.png')}}" alt="product images">
                                        </a>
                                    </div>
                                    <div class="bst__pro__hover__info">
                                        <div class="bst__pro__hover__action">
                                            <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                            <span class="bst__pro__prize">$16.00</span>
                                            <ul class="bst__pro__action">
                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                <li><a title="Add To Cart" href="/cart"><span class="ti-shopping-cart"></span></a></li>
                                                <li><a title="Add To Wishlist" class="add-to-cart" href=""><span class="ti-heart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="best__product foo">
                                <div class="best__product__inner">
                                    <div class="best__product__thumb">
                                        <a href="#">
                                            <img src="{{ asset('/assets/frontend/uniqlo/images/product/3.png')}}" alt="product images">
                                        </a>
                                    </div>
                                    <div class="bst__pro__hover__info">
                                        <div class="bst__pro__hover__action">
                                            <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                            <span class="bst__pro__prize">$16.00</span>
                                            <ul class="bst__pro__action">
                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                <li><a title="Add To Cart" href="/cart"><span class="ti-shopping-cart"></span></a></li>
                                                <li><a title="Add To Wishlist" class="add-to-cart" href=""><span class="ti-heart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="best__product foo">
                                <div class="best__product__inner">
                                    <div class="best__product__thumb">
                                        <a href="#">
                                            <img src="{{ asset('/assets/frontend/uniqlo/images/product/4.png')}}" alt="product images">
                                        </a>
                                    </div>
                                    <div class="bst__pro__hover__info">
                                        <div class="bst__pro__hover__action">
                                            <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                            <span class="bst__pro__prize">$16.00</span>
                                            <ul class="bst__pro__action">
                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                <li><a title="Add To Cart" href="/cart"><span class="ti-shopping-cart"></span></a></li>
                                                <li><a title="Add To Wishlist" class="add-to-cart" href=""><span class="ti-heart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="best__product foo">
                                <div class="best__product__inner">
                                    <div class="best__product__thumb">
                                        <a href="#">
                                            <img src="{{ asset('/assets/frontend/uniqlo/images/product/5.png')}}" alt="product images">
                                        </a>
                                    </div>
                                    <div class="bst__pro__hover__info">
                                        <div class="bst__pro__hover__action">
                                            <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                            <span class="bst__pro__prize">$16.00</span>
                                            <ul class="bst__pro__action">
                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                <li><a title="Add To Cart" href="/cart"><span class="ti-shopping-cart"></span></a></li>
                                                <li><a title="Add To Wishlist" class="add-to-cart" href=""><span class="ti-heart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12">
                            <div class="best__product foo">
                                <div class="best__product__inner">
                                    <div class="best__product__thumb">
                                        <a href="#">
                                            <img src="{{ asset('/assets/frontend/uniqlo/images/product/6.png')}}" alt="product images">
                                        </a>
                                    </div>
                                    <div class="bst__pro__hover__info">
                                        <div class="bst__pro__hover__action">
                                            <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                            <span class="bst__pro__prize">$16.00</span>
                                            <ul class="bst__pro__action">
                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                <li><a title="Add To Cart" href="/cart"><span class="ti-shopping-cart"></span></a></li>
                                                <li><a title="Add To Wishlist" class="add-to-cart" href=""><span class="ti-heart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-md-3 col-lg-3 hidden-sm col-xs-12">
                            <div class="best__product foo">
                                <div class="best__product__inner">
                                    <div class="best__product__thumb">
                                        <a href="#">
                                            <img src="{{ asset('/assets/frontend/uniqlo/images/product/7.png')}}" alt="product images">
                                        </a>
                                    </div>
                                    <div class="bst__pro__hover__info">
                                        <div class="bst__pro__hover__action">
                                            <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                            <span class="bst__pro__prize">$16.00</span>
                                            <ul class="bst__pro__action">
                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                <li><a title="Add To Cart" href="/cart"><span class="ti-shopping-cart"></span></a></li>
                                                <li><a title="Add To Wishlist" class="add-to-cart" href=""><span class="ti-heart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                        <!-- Start Single Product -->
                        <div class="col-md-3 col-lg-3 hidden-sm col-xs-12">
                            <div class="best__product foo">
                                <div class="best__product__inner">
                                    <div class="best__product__thumb">
                                        <a href="#">
                                            <img src="{{ asset('/assets/frontend/uniqlo/images/product/8.png')}}" alt="product images">
                                        </a>
                                    </div>
                                    <div class="bst__pro__hover__info">
                                        <div class="bst__pro__hover__action">
                                            <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                            <span class="bst__pro__prize">$16.00</span>
                                            <ul class="bst__pro__action">
                                                <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                                <li><a title="Add To Cart" href="/cart"><span class="ti-shopping-cart"></span></a></li>
                                                <li><a title="Add To Wishlist" class="add-to-cart" href=""><span class="ti-heart"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Product -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Our Product Area -->
        <!-- Start Blog Area -->
        <section class="htc__blog__area bg__white pb--100">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="section__title text-center">
                            <h2 class="title__line">Recent News</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="blog__wrap clearfix mt--60 xmt-30">
                        <!-- Start Single Blog -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="blog foo">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="/blog-details">
                                            <img src="{{ asset('/assets/frontend/uniqlo/images/blog/blog-img/1.jpg')}}" alt="blog images">
                                        </a>
                                        <div class="blog__post__time">
                                            <div class="post__time--inner">
                                                <span class="date">14</span>
                                                <span class="month">sep</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog__hover__info">
                                        <div class="blog__hover__action">
                                            <ul class="bl__meta">
                                                <li>By :<a href="#">Admin</a></li>
                                                <li>Product</li>
                                            </ul>
                                            <p class="blog__des"><a href="/blog-details">Lorem ipsum dolor sit amet consectetu adipisicing elit sed do eius.</a></p>
                                            <div class="blog__btn">
                                                <a class="read__more__btn" href="/blog-details">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                        <!-- Start Single Blog -->
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="blog foo">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="/blog-details">
                                            <img src="{{ asset('/assets/frontend/uniqlo/images/blog/blog-img/2.jpg')}}" alt="blog images">
                                        </a>
                                        <div class="blog__post__time">
                                            <div class="post__time--inner">
                                                <span class="date">14</span>
                                                <span class="month">sep</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog__hover__info">
                                        <div class="blog__hover__action">
                                            <ul class="bl__meta">
                                                <li>By :<a href="#">Admin</a></li>
                                                <li>Product</li>
                                            </ul>
                                            <p class="blog__des"><a href="/blog-details">Lorem ipsum dolor sit amet consectetu adipisicing elit sed do eius.</a></p>
                                            <div class="blog__btn">
                                                <a class="read__more__btn" href="/blog-details">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                        <!-- Start Single Blog -->
                        <div class="col-md-4 col-lg-4 hidden-sm col-xs-12">
                            <div class="blog foo">
                                <div class="blog__inner">
                                    <div class="blog__thumb">
                                        <a href="/blog-details">
                                            <img src="{{ asset('/assets/frontend/uniqlo/images/blog/blog-img/3.jpg')}}" alt="blog images">
                                        </a>
                                        <div class="blog__post__time">
                                            <div class="post__time--inner">
                                                <span class="date">14</span>
                                                <span class="month">sep</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="blog__hover__info">
                                        <div class="blog__hover__action">
                                            <ul class="bl__meta">
                                                <li>By :<a href="#">Admin</a></li>
                                                <li>Product</li>
                                            </ul>
                                            <p class="blog__des"><a href="/blog-details">Lorem ipsum dolor sit amet consectetu adipisicing elit sed do eius.</a></p>
                                            <div class="blog__btn">
                                                <a class="read__more__btn" href="/blog-details">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Blog -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Blog Area -->
        <!-- Start Footer Area -->
        <footer class="htc__foooter__area bg__gray">
            <div class="container">
                <div class="row">
                    <div class="footer__container clearfix">
                         <!-- Start Single Footer Widget -->
                        <div class="col-md-3 col-lg-3 col-sm-6">
                            <div class="ft__widget">
                                <div class="ft__logo">
                                    <a href="/">
                                        <img src="{{ asset('/assets/frontend/uniqlo/images/logo/uniqlo.png')}}" alt="footer logo">
                                    </a>
                                </div>
                                <div class="footer__details">
                                    <p>Get 10% discount with notified about the latest news and updates.</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer Widget -->
                        <!-- Start Single Footer Widget -->
                        <div class="col-md-3 col-lg-3 col-lg-offset-1 col-sm-6 smb-30 xmt-30">
                            <div class="ft__widget">
                                <h2 class="ft__title">Newsletter</h2>
                                <div class="newsletter__form">
                                    <div class="input__box">
                                        <div id="mc_embed_signup">
                                            <form action="http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                                <div id="mc_embed_signup_scroll" class="htc__news__inner">
                                                    <div class="news__input">
                                                        <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Email Address" required>
                                                    </div>
                                                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                                    <div class="clearfix subscribe__btn"><input type="submit" value="Send" name="subscribe" id="mc-embedded-subscribe" class="bst__btn btn--white__color">
                                                        
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>        
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer Widget -->
                        <!-- Start Single Footer Widget -->
                        <div class="col-md-3 col-lg-3 col-sm-6 smt-30 xmt-30">
                            <div class="ft__widget contact__us">
                                <h2 class="ft__title">Contact Us</h2>
                                <div class="footer__inner">
                                    <p>319 Clematis St.<Br>Suite 100 WPB, FL 33401</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Footer Widget -->
                        <!-- Start Single Footer Widget -->
                        <div class="col-md-3 col-lg-2 col-sm-6 smt-30 xmt-30">
                            <div class="ft__widget">
                                <h2 class="ft__title">Follow Us</h2>
                                <ul class="social__icon">
                                    <li><a href="https://twitter.com/devitemsllc" target="_blank"><i class="zmdi zmdi-twitter"></i></a></li>
                                    <li><a href="https://www.instagram.com/devitems/" target="_blank"><i class="zmdi zmdi-instagram"></i></a></li>
                                    <li><a href="https://www.facebook.com/devitems/?ref=bookmarks" target="_blank"><i class="zmdi zmdi-facebook"></i></a></li>
                                    <li><a href="https://plus.google.com/" target="_blank"><i class="zmdi zmdi-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End Single Footer Widget -->
                    </div>
                </div>
                <!-- Start Copyright Area -->
                <div class="htc__copyright__area">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="copyright__inner">
                                <div class="copyright">
                                    <p>© 2017 <a href="https://devitems.com/" target="_blank">Devitems</a>
                                All Right Reserved.</p>
                                </div>
                                <ul class="footer__menu">
                                    <li><a href="/">Home</a></li>
                                    <li><a href="/shop">Product</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Copyright Area -->
            </div>
        </footer>
        <!-- End Footer Area -->
    </div>
    <!-- Body main wrapper end -->
    <!-- QUICKVIEW PRODUCT -->
    <div id="quickview-wrapper">
        <!-- Modal -->
        <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal__container" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-product">
                            <!-- Start product images -->
                            <div class="product-images">
                                <div class="main-image images">
                                    <img alt="big images" src="{{ asset('/assets/frontend/uniqlo/images/product/big-img/1.jpg')}}">
                                </div>
                            </div>
                            <!-- end product images -->
                            <div class="product-info">
                                <h1>Simple Fabric Bags</h1>
                                <div class="rating__and__review">
                                    <ul class="rating">
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                        <li><span class="ti-star"></span></li>
                                    </ul>
                                    <div class="review">
                                        <a href="#">4 customer reviews</a>
                                    </div>
                                </div>
                                <div class="price-box-3">
                                    <div class="s-price-box">
                                        <span class="new-price">$17.20</span>
                                        <span class="old-price">$45.00</span>
                                    </div>
                                </div>
                                <div class="quick-desc">
                                    Designed for simplicity and made from high quality materials. Its sleek geometry and material combinations creates a modern look.
                                </div>
                                <div class="select__color">
                                    <h2>Select color</h2>
                                    <ul class="color__list">
                                        <li class="red"><a title="Red" href="#">Red</a></li>
                                        <li class="gold"><a title="Gold" href="#">Gold</a></li>
                                        <li class="orange"><a title="Orange" href="#">Orange</a></li>
                                        <li class="orange"><a title="Orange" href="#">Orange</a></li>
                                    </ul>
                                </div>
                                <div class="select__size">
                                    <h2>Select size</h2>
                                    <ul class="color__list">
                                        <li class="l__size"><a title="L" href="#">L</a></li>
                                        <li class="m__size"><a title="M" href="#">M</a></li>
                                        <li class="s__size"><a title="S" href="#">S</a></li>
                                        <li class="xl__size"><a title="XL" href="#">XL</a></li>
                                        <li class="xxl__size"><a title="XXL" href="#">XXL</a></li>
                                    </ul>
                                </div>
                                <div class="social-sharing">
                                    <div class="widget widget_socialsharing_widget">
                                        <h3 class="widget-title-modal">Share this product</h3>
                                        <ul class="social-icons">
                                            <li><a target="_blank" title="rss" href="#" class="rss social-icon"><i class="zmdi zmdi-rss"></i></a></li>
                                            <li><a target="_blank" title="Linkedin" href="#" class="linkedin social-icon"><i class="zmdi zmdi-linkedin"></i></a></li>
                                            <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
                                            <li><a target="_blank" title="Tumblr" href="#" class="tumblr social-icon"><i class="zmdi zmdi-tumblr"></i></a></li>
                                            <li><a target="_blank" title="Pinterest" href="#" class="pinterest social-icon"><i class="zmdi zmdi-pinterest"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="addtocart-btn">
                                    <a href="#">Add to cart</a>
                                </div>
                            </div><!-- .product-info -->
                        </div><!-- .modal-product -->
                    </div><!-- .modal-body -->
                </div><!-- .modal-content -->
            </div><!-- .modal-dialog -->
        </div>
        <!-- END Modal -->
    </div>
    <!-- END QUICKVIEW PRODUCT -->
    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- jquery latest version -->
    <script src="{{ asset('/assets/frontend/uniqlo/js/vendor/jquery-1.12.0.min.js')}}"></script>
    <!-- Bootstrap framework js -->
    <script src="{{ asset('/assets/frontend/uniqlo/js/bootstrap.min.js')}}"></script>
    <!-- All js plugins included in this file. -->
    <script src="{{ asset('/assets/frontend/uniqlo/js/plugins.js')}}"></script>
    <script src="{{ asset('/assets/frontend/uniqlo/js/slick.min.js')}}"></script>
    <script src="{{ asset('/assets/frontend/uniqlo/js/owl.carousel.min.js')}}"></script>
    <!-- Waypoints.min.js')}}. -->
    <script src="{{ asset('/assets/frontend/uniqlo/js/waypoints.min.js')}}"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="{{ asset('/assets/frontend/uniqlo/js/main.js')}}"></script>

</body>


<!-- Mirrored from demo.devitems.com/uniqlo/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Nov 2018 04:36:15 GMT -->
</html>