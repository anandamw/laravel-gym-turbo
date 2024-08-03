@extends('users.layouts.app')
@section('content')
    <div class="page-wrapper">

        <!--Header-->
        <header class="header animated d-flex align-items-center header-16">
            <div class="container-fluid">
                <div class="row">
                    <!--Mobile Icons-->
                    <div class="col-4 col-sm-4 col-md-4 d-block d-lg-none mobile-icons">
                        <!--Mobile Toggle-->
                        <button type="button" class="btn--link site-header__menu js-mobile-nav-toggle mobile-nav--open">
                            <i class="icon anm anm-times-l"></i>
                            <i class="anm anm-bars-r"></i>
                        </button>
                        <!--End Mobile Toggle-->
                        <!--Search-->
                        <div class="site-search iconset">
                            <i class="icon anm anm-search-l"></i>
                        </div>
                        <!--End Search-->
                    </div>
                    <!--Mobile Icons-->
                    <div class="col-1 col-sm-1 col-md-1 col-lg-5 align-self-center d-menu-col">
                        <!--Desktop Menu-->
                        <nav class="grid__item" id="AccessibleNav">
                            <ul id="siteNav" class="site-nav medium left hidearrow">
                                <li class="lvl1 parent megamenu mdropdown"><a href="#;">Home <i
                                            class="anm anm-angle-down-l"></i></a>

                                </li>
                                <li class="lvl1 parent megamenu"><a href="#">Shop <i
                                            class="anm anm-angle-down-l"></i></a>

                                </li>
                                <li class="lvl1 parent megamenu"><a href="#">Features <i
                                            class="anm anm-angle-down-l"></i></a>

                                </li>
                                <li class="lvl1 parent dropdown"><a href="#">Lookbook <i
                                            class="anm anm-angle-down-l"></i></a>

                                </li>
                                <li class="lvl1 parent dropdown"><a href="#">Pages <i
                                            class="anm anm-angle-down-l"></i></a>

                                </li>
                                <li class="lvl1 parent dropdown"><a href="#">Blog <i
                                            class="anm anm-angle-down-l"></i></a>

                                </li>

                            </ul>
                        </nav>
                        <!--End Desktop Menu-->
                    </div>
                    <!--Desktop Logo-->
                    <div class="logo col-4 col-sm-4 col-md-4 col-lg-2 align-self-center">
                        <a href="index.html">
                            <img src="{{ asset('') }}assets_users/images/avon-logo.svg"
                                alt="Avone Multipurpose Html Template" title="Avone Multipurpose Html Template" />
                        </a>
                    </div>
                    <!--End Desktop Logo-->
                    <div class="col-4 col-sm-4 col-md-4 col-lg-5 align-self-center icons-col text-right">
                        <!--Search-->
                        <div class="site-search iconset">
                            <i class="icon anm anm-search-l"></i>
                        </div>
                        <div class="search-drawer">
                            <div class="container">
                                <span class="closeSearch anm anm-times-l"></span>
                                <h3 class="title">What are you looking for?</h3>
                                <div class="block block-search">
                                    <div class="block block-content">
                                        <form class="form minisearch" id="header-search" action="#" method="get">
                                            <label for="search" class="label"><span>Search</span></label>
                                            <div class="control">
                                                <div class="searchField">
                                                    <div class="search-category">
                                                        <select id="rgsearch-category">
                                                            <option value="0">All Categories</option>
                                                            <option value="4">Shop</option>
                                                            <option value="6">- All</option>
                                                            <option value="8">- Men</option>
                                                            <option value="10">- Women</option>
                                                            <option value="12">- Shoes</option>
                                                            <option value="14">- Blouses</option>
                                                            <option value="16">- Pullovers</option>
                                                            <option value="18">- Bags</option>
                                                            <option value="20">- Accessories</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-box">
                                                        <input id="search" type="text" name="q" value=""
                                                            placeholder="Search for products, brands..." class="input-text">
                                                        <button type="submit" title="Search" class="action search"
                                                            disabled=""><i class="icon anm anm-search-l"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Search-->
                        <!--Setting Dropdown-->
                        <div class="setting-link iconset">
                            <i class="icon icon-settings"></i>
                        </div>
                        <div id="settingsBox">
                            <div class="customer-links">
                                <p><a href="login.html" class="btn">Login</a></p>
                                <p class="text-center">New User? <a href="register.html" class="register">Create an
                                        Account</a></p>
                                <p class="text-center">Default welcome msg!</p>
                            </div>
                            <div class="currency-picker">
                                <span class="ttl">Select Currency</span>
                                <ul id="currencies" class="cnrLangList">
                                    <li class="selected"><a href="#;">INR</a></li>
                                    <li><a href="#;">GBP</a></li>
                                    <li><a href="#;">CAD</a></li>
                                    <li><a href="#;">USD</a></li>
                                    <li><a href="#;">AUD</a></li>
                                    <li><a href="#;">EUR</a></li>
                                    <li><a href="#;">JPY</a></li>
                                </ul>
                            </div>
                            <div class="language-picker">
                                <span class="ttl">SELECT LANGUAGE</span>
                                <ul id="language" class="cnrLangList">
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">French</a></li>
                                    <li><a>German</a></li>
                                </ul>
                            </div>
                        </div>
                        <!--End Setting Dropdown-->
                        <!--Wishlist-->
                        <div class="wishlist-link iconset">
                            <i class="icon anm anm-heart-l"></i>
                            <span class="wishlist-count">0</span>
                        </div>
                        <!--End Wishlist-->
                        <!--Minicart Dropdown-->
                        <div class="header-cart iconset">
                            <a href="#" class="site-header__cart btn-minicart" data-toggle="modal"
                                data-target="#minicart-drawer">
                                <i class="icon anm anm-basket-l"></i>
                                <span class="site-cart-count">2</span>
                            </a>
                        </div>
                        <!--End Minicart Dropdown-->
                    </div>
                </div>
            </div>
        </header>
        <!--End Header-->
        <!--Mobile Menu-->
        <div class="mobile-nav-wrapper" role="navigation">
            <div class="closemobileMenu"><i class="icon anm anm-times-l pull-right"></i> Close Menu</div>
            <ul id="MobileNav" class="mobile-nav">
                <li class="lvl1 parent megamenu"><a href="index.html">Home <i class="anm anm-plus-l"></i></a>

                </li>
                <li class="lvl1 parent megamenu"><a href="#">Shop <i class="anm anm-plus-l"></i></a>

                </li>
                <li class="lvl1 parent megamenu"><a href="product-layout1.html">Product <i
                            class="anm anm-plus-l"></i></a>

                </li>
                <li class="lvl1 parent megamenu"><a href="#">Lookbook <i class="anm anm-plus-l"></i></a>

                </li>
                <li class="lvl1 parent megamenu"><a href="about-us.html">Pages <i class="anm anm-plus-l"></i></a>

                </li>
                <li class="lvl1 parent megamenu"><a href="blog-left-sidebar.html">Blog <i class="anm anm-plus-l"></i></a>

                </li>

            </ul>
        </div>
        <!--End Mobile Menu-->

        <div id="page-content">
            <!--Home slider-->
            <div class="slideshow slideshow-wrapper">
                <div class="home-slideshow">
                    <div class="slide">
                        <div class="blur-up lazyload">
                            <img class="blur-up lazyload"
                                data-src="{{ asset('') }}assets_users/images/slideshow-banner/yoga-banner1.jpg"
                                src="{{ asset('') }}assets_users/images/slideshow-banner/yoga-banner1.jpg"
                                alt="NEW IN" title="NEW IN" />
                            <div class="slideshow__text-wrap slideshow__overlay bottomcenter whiteText">
                                <div class="slideshow__text-content">
                                    <div class="wrap-caption anim-tru bottom style1">
                                        <h2 class="h1 mega-title slideshow__title">NEW IN</h2>
                                        <span class="mega-subtitle slideshow__subtitle">WIDE RANGE OF YOGA
                                            CLOTHES</span>
                                        <span class="btn">Shop now</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="blur-up lazyload">
                            <img class="blur-up lazyload"
                                data-src="{{ asset('') }}assets_users/images/slideshow-banner/yoga-banner2.jpg"
                                src="{{ asset('') }}assets_users/images/slideshow-banner/yoga-banner2.jpg"
                                alt="RELAX &amp; RELEASE" title="RELAX &amp; RELEASE" />
                            <div class="slideshow__text-wrap slideshow__overlay topcenter">
                                <div class="slideshow__text-content">
                                    <div class="wrap-caption anim-tru style1">
                                        <h2 class="h1 mega-title slideshow__title">RELAX &amp; RELEASE</h2>
                                        <span class="mega-subtitle slideshow__subtitle">YOGA EQUIPMENT TO STRETCH YOUR
                                            BODY AND STILL YOUR MIND</span>
                                        <span class="btn">Shop now</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Home slider-->

            <!--Body Container-->
            <!--Image Banner-->
            <div class="section imgBanners style2">
                <div class="container">
                    <div class="section-header">
                        <h2>YOGA IS A LIFESTYLE</h2>
                        <p>Our wide selection of colourful and trendy yoga clothes has something for every yogi's
                            taste.<br> From high wasted yoga leggings, yoga outfit sets, padded yoga tops and supportive
                            yoga <br>bras to comfortable harem yoga pants and yoga jumpsuits. </p>
                    </div>
                    <div class="row">
                        <div class="col-6 col-sm-4 col-md-4 col-lg-4 img-banner-item">
                            <div class="imgBanner-grid-item">
                                <div class="inner">
                                    <a href="#">
                                        <span class="img">
                                            <img class="blur-up lazyload"
                                                data-src="{{ asset('') }}assets_users/images/collection-banner/yoga-s-banner1.jpg"
                                                src="{{ asset('') }}assets_users/images/collection-banner/yoga-s-banner1.jpg"
                                                alt="Trend Alert" title="Trend Alert" />
                                        </span>
                                    </a>
                                    <div class="details w-50 center">
                                        <h3 class="title">YOGA KITS</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-4 col-lg-4 img-banner-item">
                            <div class="imgBanner-grid-item">
                                <div class="inner">
                                    <a href="#">
                                        <span class="img">
                                            <img class="blur-up lazyload"
                                                data-src="{{ asset('') }}assets_users/images/collection-banner/yoga-s-banner2.jpg"
                                                src="{{ asset('') }}assets_users/images/collection-banner/yoga-s-banner2.jpg"
                                                alt="Hot Occasion" title="Hot Occasion" />
                                        </span>
                                    </a>
                                    <div class="details w-50 center">
                                        <h3 class="title">YOGA CLOTHES</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-4 col-lg-4 img-banner-item">
                            <div class="imgBanner-grid-item">
                                <div class="inner">
                                    <a href="#">
                                        <span class="img">
                                            <img class="blur-up lazyload"
                                                data-src="{{ asset('') }}assets_users/images/collection-banner/yoga-s-banner3.jpg"
                                                src="{{ asset('') }}assets_users/images/collection-banner/yoga-s-banner3.jpg"
                                                alt="Hot Occasion" title="Hot Occasion" />
                                        </span>
                                    </a>
                                    <div class="details w-50 center">
                                        <h3 class="title">YOGA MATS</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Image Banner-->

            <!--New Arrivals-->
            <div class="section product-slider products-grid-section">
                <div class="container">
                    <div class="section-header">
                        <h2>New Arrivals</h2>
                        <p>Shop our new arrivals from established brands</p>
                    </div>
                    <div class="productSlider grid-products">
                        <div class="col-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout1.html" class="product-img">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload"
                                        data-src="{{ asset('') }}assets_users/images/product-images/yoga-pro1.jpg"
                                        src="{{ asset('') }}assets_users/images/product-images/yoga-pro1.jpg"
                                        alt="" title="">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload"
                                        data-src="{{ asset('') }}assets_users/images/product-images/yoga-pro1-1.jpg"
                                        src="{{ asset('') }}assets_users/images/product-images/yoga-pro1-1.jpg"
                                        alt="" title="">
                                    <!-- End hover image -->
                                </a>
                                <!-- end product image -->
                                <div class="product-labels"><span class="lbl on-sale">Sale</span></div>
                                <!--Product Button-->
                                <div class="button-set style1">
                                    <ul>
                                        <li>
                                            <!--Quick View Button-->
                                            <a href="javascript:void(0)" title="Quick View"
                                                class="btn-icon quick-view-popup quick-view" data-toggle="modal"
                                                data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-l"></i>
                                                <span class="tooltip-label">Quick View</span>
                                            </a>
                                            <!--End Quick View Button-->
                                        </li>
                                        <li>
                                            <!--Wishlist Button-->
                                            <div class="wishlist-btn">
                                                <a class="btn-icon wishlist add-to-wishlist" href="wishlist.html">
                                                    <i class="icon anm anm-heart-l"></i>
                                                    <span class="tooltip-label">Add To Wishlist</span>
                                                </a>
                                            </div>
                                            <!--End Wishlist Button-->
                                        </li>
                                        <li>
                                            <!--Compare Button-->
                                            <div class="compare-btn">
                                                <a class="btn-icon compare add-to-compare" href="compare-variant1.html"
                                                    title="Add to Compare">
                                                    <i class="icon icon-reload"></i>
                                                    <span class="tooltip-label">Add to Compare</span>
                                                </a>
                                            </div>
                                            <!--End Compare Button-->
                                        </li>
                                    </ul>
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-layout1.html">4 mm Thick Yoga Mat</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$50.01</span>
                                </div>
                                <!-- End product price -->
                                <!--Product Review-->
                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                </div>
                                <!--End Product Review-->
                            </div>
                            <!-- End product details -->
                            <!--Cart Button-->
                            <form class="add" action="https://www.annimexweb.com/items/avone/cart-variant1.html"
                                method="post">
                                <button class="btn-icon btn btn-addto-cart simple-add-btn" type="button"
                                    tabindex="0">Add to Cart</button>
                            </form>
                            <!--end Cart Button-->
                        </div>
                        <div class="col-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout1.html" class="product-img">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload"
                                        data-src="{{ asset('') }}assets_users/images/product-images/yoga-pro2.jpg"
                                        src="{{ asset('') }}assets_users/images/product-images/yoga-pro2.jpg"
                                        alt="" title="">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload"
                                        data-src="{{ asset('') }}assets_users/images/product-images/yoga-pro2-1.jpg"
                                        src="{{ asset('') }}assets_users/images/product-images/yoga-pro2-1.jpg"
                                        alt="" title="">
                                    <!-- End hover image -->
                                </a>
                                <!-- end product image -->
                                <!--Product Button-->
                                <div class="button-set style1">
                                    <ul>
                                        <li>
                                            <!--Quick View Button-->
                                            <a href="javascript:void(0)" title="Quick View"
                                                class="btn-icon quick-view-popup quick-view" data-toggle="modal"
                                                data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-l"></i>
                                                <span class="tooltip-label">Quick View</span>
                                            </a>
                                            <!--End Quick View Button-->
                                        </li>
                                        <li>
                                            <!--Wishlist Button-->
                                            <div class="wishlist-btn">
                                                <a class="btn-icon wishlist add-to-wishlist" href="wishlist.html">
                                                    <i class="icon anm anm-heart-l"></i>
                                                    <span class="tooltip-label">Add To Wishlist</span>
                                                </a>
                                            </div>
                                            <!--End Wishlist Button-->
                                        </li>
                                        <li>
                                            <!--Compare Button-->
                                            <div class="compare-btn">
                                                <a class="btn-icon compare add-to-compare" href="compare-variant1.html"
                                                    title="Add to Compare">
                                                    <i class="icon icon-reload"></i>
                                                    <span class="tooltip-label">Add to Compare</span>
                                                </a>
                                            </div>
                                            <!--End Compare Button-->
                                        </li>
                                    </ul>
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-layout1.html">Bar Kit Resistance Band Yoga</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$30.00</span>
                                </div>
                                <!-- End product price -->
                                <!--Product Review-->
                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                </div>
                                <!--End Product Review-->
                            </div>
                            <!-- End product details -->
                            <!--Cart Button-->
                            <form class="add" action="https://www.annimexweb.com/items/avone/cart-variant1.html"
                                method="post">
                                <button class="btn-icon btn btn-addto-cart simple-add-btn" type="button"
                                    tabindex="0">Add to Cart</button>
                            </form>
                            <!--end Cart Button-->
                        </div>
                        <div class="col-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout1.html" class="product-img">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload"
                                        data-src="{{ asset('') }}assets_users/images/product-images/yoga-pro3.jpg"
                                        src="{{ asset('') }}assets_users/images/product-images/yoga-pro3.jpg"
                                        alt="" title="">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload"
                                        data-src="{{ asset('') }}assets_users/images/product-images/yoga-pro3-1.jpg"
                                        src="{{ asset('') }}assets_users/images/product-images/yoga-pro3-1.jpg"
                                        alt="" title="">
                                    <!-- End hover image -->
                                </a>
                                <!-- end product image -->
                                <!--Product Button-->
                                <div class="button-set style1">
                                    <ul>
                                        <li>
                                            <!--Quick View Button-->
                                            <a href="javascript:void(0)" title="Quick View"
                                                class="btn-icon quick-view-popup quick-view" data-toggle="modal"
                                                data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-l"></i>
                                                <span class="tooltip-label">Quick View</span>
                                            </a>
                                            <!--End Quick View Button-->
                                        </li>
                                        <li>
                                            <!--Wishlist Button-->
                                            <div class="wishlist-btn">
                                                <a class="btn-icon wishlist add-to-wishlist" href="wishlist.html">
                                                    <i class="icon anm anm-heart-l"></i>
                                                    <span class="tooltip-label">Add To Wishlist</span>
                                                </a>
                                            </div>
                                            <!--End Wishlist Button-->
                                        </li>
                                        <li>
                                            <!--Compare Button-->
                                            <div class="compare-btn">
                                                <a class="btn-icon compare add-to-compare" href="compare-variant1.html"
                                                    title="Add to Compare">
                                                    <i class="icon icon-reload"></i>
                                                    <span class="tooltip-label">Add to Compare</span>
                                                </a>
                                            </div>
                                            <!--End Compare Button-->
                                        </li>
                                    </ul>
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-layout1.html">Tops Bras Gym Sets Women's Sports</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$40.00</span>
                                </div>
                                <!-- End product price -->
                                <!--Product Review-->
                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                </div>
                                <!--End Product Review-->
                            </div>
                            <!-- End product details -->
                            <!--Cart Button-->
                            <form class="add" action="https://www.annimexweb.com/items/avone/cart-variant1.html"
                                method="post">
                                <button class="btn-icon btn btn-addto-cart simple-add-btn" type="button"
                                    tabindex="0">Add to Cart</button>
                            </form>
                            <!--end Cart Button-->
                        </div>
                        <div class="col-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout1.html" class="product-img">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload"
                                        data-src="{{ asset('') }}assets_users/images/product-images/yoga-pro4.jpg"
                                        src="{{ asset('') }}assets_users/images/product-images/yoga-pro4.jpg"
                                        alt="" title="">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload"
                                        data-src="{{ asset('') }}assets_users/images/product-images/yoga-pro4-1.jpg"
                                        src="{{ asset('') }}assets_users/images/product-images/yoga-pro4-1.jpg"
                                        alt="" title="">
                                    <!-- End hover image -->
                                </a>
                                <!-- end product image -->
                                <!--Product Button-->
                                <div class="button-set style1">
                                    <ul>
                                        <li>
                                            <!--Quick View Button-->
                                            <a href="javascript:void(0)" title="Quick View"
                                                class="btn-icon quick-view-popup quick-view" data-toggle="modal"
                                                data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-l"></i>
                                                <span class="tooltip-label">Quick View</span>
                                            </a>
                                            <!--End Quick View Button-->
                                        </li>
                                        <li>
                                            <!--Wishlist Button-->
                                            <div class="wishlist-btn">
                                                <a class="btn-icon wishlist add-to-wishlist" href="wishlist.html">
                                                    <i class="icon anm anm-heart-l"></i>
                                                    <span class="tooltip-label">Add To Wishlist</span>
                                                </a>
                                            </div>
                                            <!--End Wishlist Button-->
                                        </li>
                                        <li>
                                            <!--Compare Button-->
                                            <div class="compare-btn">
                                                <a class="btn-icon compare add-to-compare" href="compare-variant1.html"
                                                    title="Add to Compare">
                                                    <i class="icon icon-reload"></i>
                                                    <span class="tooltip-label">Add to Compare</span>
                                                </a>
                                            </div>
                                            <!--End Compare Button-->
                                        </li>
                                    </ul>
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-layout1.html">High Waist Workout Shorts</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$39.01</span>
                                </div>
                                <!-- End product price -->
                                <!--Product Review-->
                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                </div>
                                <!--End Product Review-->
                            </div>
                            <!-- End product details -->
                            <!--Cart Button-->
                            <form class="add" action="https://www.annimexweb.com/items/avone/cart-variant1.html"
                                method="post">
                                <button class="btn-icon btn btn-addto-cart simple-add-btn" type="button"
                                    tabindex="0">Add to Cart</button>
                            </form>
                            <!--end Cart Button-->
                        </div>
                        <div class="col-12 item">
                            <!-- start product image -->
                            <div class="product-image">
                                <!-- start product image -->
                                <a href="product-layout1.html" class="product-img">
                                    <!-- image -->
                                    <img class="primary blur-up lazyload"
                                        data-src="{{ asset('') }}assets_users/images/product-images/yoga-pro5.jpg"
                                        src="{{ asset('') }}assets_users/images/product-images/yoga-pro5.jpg"
                                        alt="" title="">
                                    <!-- End image -->
                                    <!-- Hover image -->
                                    <img class="hover blur-up lazyload"
                                        data-src="{{ asset('') }}assets_users/images/product-images/yoga-pro5-1.jpg"
                                        src="{{ asset('') }}assets_users/images/product-images/yoga-pro5-1.jpg"
                                        alt="" title="">
                                    <!-- End hover image -->
                                </a>
                                <!-- end product image -->
                                <!--Product Button-->
                                <div class="button-set style1">
                                    <ul>
                                        <li>
                                            <!--Quick View Button-->
                                            <a href="javascript:void(0)" title="Quick View"
                                                class="btn-icon quick-view-popup quick-view" data-toggle="modal"
                                                data-target="#content_quickview">
                                                <i class="icon anm anm-search-plus-l"></i>
                                                <span class="tooltip-label">Quick View</span>
                                            </a>
                                            <!--End Quick View Button-->
                                        </li>
                                        <li>
                                            <!--Wishlist Button-->
                                            <div class="wishlist-btn">
                                                <a class="btn-icon wishlist add-to-wishlist" href="wishlist.html">
                                                    <i class="icon anm anm-heart-l"></i>
                                                    <span class="tooltip-label">Add To Wishlist</span>
                                                </a>
                                            </div>
                                            <!--End Wishlist Button-->
                                        </li>
                                        <li>
                                            <!--Compare Button-->
                                            <div class="compare-btn">
                                                <a class="btn-icon compare add-to-compare" href="compare-variant1.html"
                                                    title="Add to Compare">
                                                    <i class="icon icon-reload"></i>
                                                    <span class="tooltip-label">Add to Compare</span>
                                                </a>
                                            </div>
                                            <!--End Compare Button-->
                                        </li>
                                    </ul>
                                </div>
                                <!--End Product Button-->
                            </div>
                            <!-- end product image -->
                            <!--start product details -->
                            <div class="product-details text-center">
                                <!-- product name -->
                                <div class="product-name">
                                    <a href="product-layout1.html">Fitness Set Tool Yoga Bolster</a>
                                </div>
                                <!-- End product name -->
                                <!-- product price -->
                                <div class="product-price">
                                    <span class="price">$12.00</span>
                                </div>
                                <!-- End product price -->
                                <!--Product Review-->
                                <div class="product-review">
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                    <i class="font-13 fa fa-star-o"></i>
                                </div>
                                <!--End Product Review-->
                            </div>
                            <!-- End product details -->
                            <!--Cart Button-->
                            <form class="add" action="https://www.annimexweb.com/items/avone/cart-variant1.html"
                                method="post">
                                <button class="btn-icon btn btn-addto-cart simple-add-btn" type="button"
                                    tabindex="0">Add to Cart</button>
                            </form>
                            <!--end Cart Button-->
                        </div>
                    </div>
                </div>
            </div>
            <!--End New Arrivals-->

        </div>
        <!--End Body Container-->

        <!--Featured Content-->
        <div class="section featuredContent featuredContentStyle2">
            <div class="container">
                <div class="row-fluid d-flex justify-content-between align-items-center">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 pl-0 px-0">
                        <img data-src="{{ asset('') }}assets_users/images/yoga-fw-bnr.jpg"
                            src="{{ asset('') }}assets_users/images/yoga-fw-bnr.jpg" alt="" title="">
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="row-text text-left">
                            <h3>How to make a yoga mat more sticky?</h3>
                            <div class="rte rte-setting featured-row__subtext">
                                <p>The earth friendly Eco Cork Yoga Mat is made from cork of Oak trees and natural
                                    rubber from sustainable rubber farms. We are here to serve your yoga and wellbeing
                                    journey.</p>
                            </div>
                            <a href="#" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Featured Content-->

        <!--Featured Content-->
        <div class="section featuredContent featuredContentStyle2 whiteBg">
            <div class="container">
                <div class="row-fluid d-flex justify-content-between align-items-center">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="row-text text-left">
                            <h3>Take a moment</h3>
                            <div class="rte rte-setting featured-row__subtext">
                                <p>Inhale, expand the chest, sit up tall. Pause. Exhale, release, relax the shoulders.
                                </p>
                                <p>Repeat as many times as you like before continuing with your day.</p>
                            </div>
                            <a href="#" class="btn">Explore meditation</a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 pl-0 px-0">
                        <img data-src="{{ asset('') }}assets_users/images/yoga-fw-bnr1.jpg"
                            src="{{ asset('') }}assets_users/images/yoga-fw-bnr1.jpg" alt="" title="">
                    </div>
                </div>
            </div>
        </div>
        <!--End Featured Content-->

        <!--Hero Parallax Banner-->
        <div class="section parallax-banner-style1 no-pt-section">
            <div class="hero hero--exlarge hero__overlay bg-size">
                <img class="bg-img" src="{{ asset('') }}assets_users/images/parallax-banner/yoga-banner.jpg"
                    alt="" style="display: none;">
                <div class="hero__inner">
                    <div class="container">
                        <div class="wrap-text topleft">
                            <span>MADE BY YOGIS</span>
                            <h2 class="h2 mega-title">HIGH QUALITY YOGA SUPPLIERS</h2>
                            <div class="rte-setting mega-subtitle">
                                <p>Yogis make yoga clothing that moves and flows with your body. Snug but not too tight,
                                    no riding up or down, flattering your unique body shape without unintentional
                                    exposure.</p>
                            </div>
                            <a href="#" class="btn">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Parallax Banner-->

        <!--Instagram-->
        <div class="section home-instagram no-pt-section">
            <div class="container">
                <div class="section-header">
                    <p>FOLLOW US@AVONE</p>
                </div>
                <!--Instagram Grid-->
                <div class="instagram-grid instagram-grid-style2 clearfix">
                    <ul class="clearfix">
                        <li class="instagram-item">
                            <a href="#;">
                                <img src="{{ asset('') }}assets_users/images/instagram-shop/ins-6.jpg"
                                    data-src="{{ asset('') }}assets_users/images/instagram-shop/ins-6.jpg"
                                    alt="" title="" class="blur-up lazyload" />
                                <span class="ins-icon"><i class="icon icon-instagram"></i></span>
                            </a>
                        </li>
                        <li class="instagram-item">
                            <a href="#;">
                                <img src="{{ asset('') }}assets_users/images/instagram-shop/ins-7.jpg"
                                    data-src="{{ asset('') }}assets_users/images/instagram-shop/ins-7.jpg"
                                    alt="" title="" class="blur-up lazyload" />
                                <span class="ins-icon"><i class="icon icon-instagram"></i></span>
                            </a>
                        </li>
                        <li class="instagram-item">
                            <a href="#;">
                                <img src="{{ asset('') }}assets_users/images/instagram-shop/ins-8.jpg"
                                    data-src="{{ asset('') }}assets_users/images/instagram-shop/ins-8.jpg"
                                    alt="" title="" class="blur-up lazyload" />
                                <span class="ins-icon"><i class="icon icon-instagram"></i></span>
                            </a>
                        </li>
                        <li class="instagram-item">
                            <a href="#;">
                                <img src="{{ asset('') }}assets_users/images/instagram-shop/ins-4.jpg"
                                    data-src="{{ asset('') }}assets_users/images/instagram-shop/ins-4.jpg"
                                    alt="" title="" class="blur-up lazyload" />
                                <span class="ins-icon"><i class="icon icon-instagram"></i></span>
                            </a>
                        </li>
                        <li class="instagram-item">
                            <a href="#;">
                                <img src="{{ asset('') }}assets_users/images/instagram-shop/ins-5.jpg"
                                    data-src="{{ asset('') }}assets_users/images/instagram-shop/ins-5.jpg"
                                    alt="" title="" class="blur-up lazyload" />
                                <span class="ins-icon"><i class="icon icon-instagram"></i></span>
                            </a>
                        </li>
                        <li class="instagram-item">
                            <a href="#;">
                                <img src="{{ asset('') }}assets_users/images/instagram-shop/ins-1.jpg"
                                    data-src="{{ asset('') }}assets_users/images/instagram-shop/ins-1.jpg"
                                    alt="" title="" class="blur-up lazyload" />
                                <span class="ins-icon"><i class="icon icon-instagram"></i></span>
                            </a>
                        </li>
                        <li class="instagram-item">
                            <a href="#;">
                                <img src="{{ asset('') }}assets_users/images/instagram-shop/ins-2.jpg"
                                    data-src="{{ asset('') }}assets_users/images/instagram-shop/ins-2.jpg"
                                    alt="" title="" class="blur-up lazyload" />
                                <span class="ins-icon"><i class="icon icon-instagram"></i></span>
                            </a>
                        </li>
                        <li class="instagram-item">
                            <a href="#;">
                                <img src="{{ asset('') }}assets_users/images/instagram-shop/ins-3.jpg"
                                    data-src="{{ asset('') }}assets_users/images/instagram-shop/ins-3.jpg"
                                    alt="" title="" class="blur-up lazyload" />
                                <span class="ins-icon"><i class="icon icon-instagram"></i></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!--End Instagram Grid-->
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 mt-4 text-center">
                        <a href="#;" class="btn">View Gallery</a>
                    </div>
                </div>
            </div>
        </div>
        <!--End Instagram-->


        <!--Store Feature-->
        <div class="store-features">
            <div class="container">
                <div class="row store-info">
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                        <i class="anm anm-free-delivery" aria-hidden="true"></i>
                        <h5>Free Shipping &amp; Return</h5>
                        <p class="sub-text">Free shipping on all US orders</p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                        <i class="anm anm-money" aria-hidden="true"></i>
                        <h5>Money Guarantee</h5>
                        <p class="sub-text">30 days money back guarantee</p>
                    </div>
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                        <i class="anm anm-phone-24" aria-hidden="true"></i>
                        <h5>Online Support</h5>
                        <p class="sub-text">We support online 24/7 on day</p>
                    </div>
                </div>
            </div>
        </div>
        <!--End Store Feature-->
    </div><!--End Page Wrapper-->

    <!--Footer-->
    <div class="footer footer-1">
        <div class="footer-top clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-3 about-us-col">
                        <img src="{{ asset('') }}assets_users/images/footer-logo.png" alt="Avone" />
                        <p>55 Gallaxy Enque,<br>2568 steet, 23568 NY</p>
                        <p><b>Phone</b>: (440) 000 000 0000</p>
                        <p><b>Email</b>: <a href="mailto:sales@yousite.com">sales@yousite.com</a></p>
                        <ul class="list--inline social-icons">
                            <li><a href="#" target="_blank"><i class="icon icon-facebook"></i></a></li>
                            <li><a href="#" target="_blank"><i class="icon icon-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="icon icon-pinterest"></i></a></li>
                            <li><a href="#" target="_blank"><i class="icon icon-instagram"></i></a></li>
                            <li><a href="#" target="_blank"><i class="icon icon-youtube"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-3 footer-links">
                        <h4 class="h4">Informations</h4>
                        <ul>
                            <li><a href="aboutus-style1.html">About us</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="privacy-policy.html">Privacy policy</a></li>
                            <li><a href="#">Terms &amp; condition</a></li>
                            <li><a href="my-account.html">My Account</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-3 footer-links">
                        <h4 class="h4">Customer Services</h4>
                        <ul>
                            <li><a href="#">Request Personal Data</a></li>
                            <li><a href="faqs-style1.html">FAQ's</a></li>
                            <li><a href="contact-style1.html">Contact Us</a></li>
                            <li><a href="#">Orders and Returns</a></li>
                            <li><a href="#">Support Center</a></li>
                        </ul>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 newsletter-col">
                        <div class="display-table">
                            <div class="display-table-cell footer-newsletter">
                                <form action="#" method="post">
                                    <label class="h4">Newsletter</label>
                                    <p>Enter your email to receive daily news and get 20% off coupon for all items.</p>
                                    <div class="input-group">
                                        <input type="email" class="input-group__field newsletter-input" name="EMAIL"
                                            value="" placeholder="Email address" required>
                                        <span class="input-group__btn">
                                            <button type="submit" class="btn newsletter__submit" name="commit"
                                                id="Subscribe"><span
                                                    class="newsletter__submit-text--large">Subscribe</span></button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom clearfix">
            <div class="container">
                <ul class="payment-icons list--inline">
                    <li><i class="anm anm-cc-visa" aria-hidden="true"></i></li>
                    <li><i class="anm anm-cc-mastercard" aria-hidden="true"></i></li>
                    <li><i class="anm anm-cc-amex" aria-hidden="true"></i></li>
                    <li><i class="anm anm-cc-paypal" aria-hidden="true"></i></li>
                    <li><i class="anm anm-cc-discover" aria-hidden="true"></i></li>
                    <li><i class="anm anm-cc-stripe" aria-hidden="true"></i></li>
                    <li><i class="anm anm-cc-jcb" aria-hidden="true"></i></li>
                </ul>
                <div class="copytext">
                    &copy; 2021 Avone. All Rights Reserved.
                </div>
            </div>
        </div>
    </div>
    <!--End Footer-->

    <!--Scoll Top-->
    <span id="site-scroll"><i class="icon anm anm-arw-up"></i></span>
    <!--End Scoll Top-->

    <!--MiniCart Drawer-->
    <div class="minicart-right-drawer modal right fade" id="minicart-drawer">
        <div class="modal-dialog">
            <div class="modal-content">
                <div id="cart-drawer" class="block block-cart">
                    <a href="javascript:void(0);" class="close-cart" data-dismiss="modal" aria-label="Close"><i
                            class="anm anm-times-r"></i></a>
                    <h4>Your cart (2 Items)</h4>
                    <div class="minicart-content">
                        <ul class="clearfix">
                            <li class="item clearfix">
                                <a class="product-image" href="#">
                                    <img src="{{ asset('') }}assets_users/images/product-images/master_mass.jpg"
                                        alt="" title="">
                                </a>
                                <div class="product-details">
                                    <a href="#" class="remove"><i class="anm anm-times-sql"
                                            aria-hidden="true"></i></a>
                                    <a href="#" class="edit-i remove"><i class="icon icon-pencil"
                                            aria-hidden="true"></i></a>
                                    <a class="product-title" href="cart-style1.html">VACTORLABS | MASTER MASS</a>
                                    <div class="variant-cart">2 LBS</div>
                                    <div class="wrapQtyBtn">
                                        <div class="qtyField">
                                            <a class="qtyBtn minus" href="javascript:void(0);"><i class="anm anm-minus-r"
                                                    aria-hidden="true"></i></a>
                                            <input type="text" name="quantity" value="1" class="qty">
                                            <a class="qtyBtn plus" href="javascript:void(0);"><i class="anm anm-plus-r"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="priceRow">
                                        <div class="product-price">
                                            <span class="money">Rp200.000</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="item clearfix">
                                <a class="product-image" href="#">
                                    <img src="{{ asset('') }}assets_users/images/product-images/pro_gainer.jpg"
                                        alt="" title="">
                                </a>
                                <div class="product-details">
                                    <a href="#" class="remove"><i class="anm anm-times-sql"
                                            aria-hidden="true"></i></a>
                                    <a href="#" class="edit-i remove"><i class="icon icon-pencil"
                                            aria-hidden="true"></i></a>
                                    <a class="product-title" href="cart-style1.html">GOLD PRO GAINER</a>
                                    <div class="variant-cart">2 LBS</div>
                                    <div class="wrapQtyBtn">
                                        <div class="qtyField">
                                            <a class="qtyBtn minus" href="javascript:void(0);"><i class="anm anm-minus-r"
                                                    aria-hidden="true"></i></a>
                                            <input type="text" name="quantity" value="1" class="qty">
                                            <a class="qtyBtn plus" href="javascript:void(0);"><i class="anm anm-plus-r"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="priceRow">
                                        <div class="product-price">
                                            <span class="money">Rp220.000</span>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="minicart-bottom">
                        <div class="subtotal list">
                            <span>Shipping:</span>
                            <span class="product-price">50.000</span>
                        </div>
                        <div class="subtotal list">
                            <span>Discount: 10%</span>
                            <span class="product-price">$05.00</span>
                        </div>
                        <div class="subtotal">
                            <span>Total:</span>
                            <span class="product-price"><s>Rp420.000</s>
                                = Rp378.000 </span>
                        </div>
                        <button type="button" class="btn proceed-to-checkout">Proceed to Checkout</button>
                        <button type="button" class="btn btn-secondary cart-btn">View Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End MiniCart Drawer-->

    <!--Quickview Popup-->
    <div class="loadingBox">
        <div class="anm-spin"><i class="anm anm-spinner4"></i></div>
    </div>
    <div class="modalOverly"></div>
    <div id="quickView-modal" class="mfp-with-anim mfp-hide">
        <button title="Close (Esc)" type="button" class="mfp-close">×</button>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                <div id="slider">
                    <!-- model thumbnail -->
                    <div id="myCarousel" class="carousel slide">
                        <!-- image slide carousel items -->
                        <div class="carousel-inner">
                            <!-- slide 1 -->
                            <div class="item carousel-item active" data-slide-number="0">
                                <img data-src="{{ asset('') }}assets_users/images/product-images/product2.jpg"
                                    src="{{ asset('') }}assets_users/images/product-images/product2.jpg"
                                    alt="" title="">
                            </div>
                            <!-- End slide 1 -->
                            <!-- slide 2 -->
                            <div class="item carousel-item" data-slide-number="1">
                                <img data-src="{{ asset('') }}assets_users/images/product-images/product2-1.jpg"
                                    src="{{ asset('') }}assets_users/images/product-images/product2-1.jpg"
                                    alt="" title="">
                            </div>
                            <!-- End slide 3 -->
                            <!-- slide 2 -->
                            <div class="item carousel-item" data-slide-number="2">
                                <img data-src="{{ asset('') }}assets_users/images/product-images/product2-2.jpg"
                                    src="{{ asset('') }}assets_users/images/product-images/product2-2.jpg"
                                    alt="" title="">
                            </div>
                            <!-- End slide 3 -->
                            <!-- slide 4 -->
                            <div class="item carousel-item" data-slide-number="3">
                                <img data-src="{{ asset('') }}assets_users/images/product-images/product2-3.jpg"
                                    src="{{ asset('') }}assets_users/images/product-images/product2-3.jpg"
                                    alt="" title="">
                            </div>
                            <!-- End slide 4 -->
                            <!-- slide 5 -->
                            <div class="item carousel-item" data-slide-number="4">
                                <img data-src="{{ asset('') }}assets_users/images/product-images/product2-4.jpg"
                                    src="{{ asset('') }}assets_users/images/product-images/product2-4.jpg"
                                    alt="" title="">
                            </div>
                            <!-- End slide 4 -->
                        </div>
                        <!-- End image slide carousel items -->
                        <!-- model thumbnail image -->
                        <div class="model-thumbnail-img">
                            <!-- model thumbnail slide -->
                            <ul class="carousel-indicators list-inline">
                                <!-- slide 1 -->
                                <li class="list-inline-item active">
                                    <a id="carousel-selector-0" class="selected" data-slide-to="0"
                                        data-target="#myCarousel">
                                        <img data-src="{{ asset('') }}assets_users/images/product-images/product2.jpg"
                                            src="{{ asset('') }}assets_users/images/product-images/product2.jpg"
                                            alt="" title="">
                                    </a>
                                </li>
                                <!-- End slide 1 -->
                                <!-- slide 2 -->
                                <li class="list-inline-item">
                                    <a id="carousel-selector-1" data-slide-to="1" data-target="#myCarousel">
                                        <img data-src="{{ asset('') }}assets_users/images/product-images/product2-1.jpg"
                                            src="{{ asset('') }}assets_users/images/product-images/product2-1.jpg"
                                            alt="" title="">
                                    </a>
                                </li>
                                <!-- End slide 2 -->
                                <!-- slide 3 -->
                                <li class="list-inline-item">
                                    <a id="carousel-selector-2" class="selected" data-slide-to="2"
                                        data-target="#myCarousel">
                                        <img data-src="{{ asset('') }}assets_users/images/product-images/product2-2.jpg"
                                            src="{{ asset('') }}assets_users/images/product-images/product2-2.jpg"
                                            alt="" title="">
                                    </a>
                                </li>
                                <!-- End slide 3 -->
                                <!-- slide 4 -->
                                <li class="list-inline-item">
                                    <a id="carousel-selector-3" data-slide-to="3" data-target="#myCarousel">
                                        <img data-src="{{ asset('') }}assets_users/images/product-images/product2-3.jpg"
                                            src="{{ asset('') }}assets_users/images/product-images/product2-3.jpg"
                                            alt="" title="">
                                    </a>
                                </li>
                                <!-- End slide 4 -->
                                <!-- slide 5 -->
                                <li class="list-inline-item">
                                    <a id="carousel-selector-4" data-slide-to="4" data-target="#myCarousel">
                                        <img data-src="{{ asset('') }}assets_users/images/product-images/product2-4.jpg"
                                            src="{{ asset('') }}assets_users/images/product-images/product2-4.jpg"
                                            alt="" title="">
                                    </a>
                                </li>
                                <!-- End slide 5 -->
                            </ul>
                            <!-- End model thumbnail slide -->
                            <!-- arrow button -->
                            <a class="carousel-control left" href="#myCarousel" data-slide="prev"><i
                                    class="fa fa-chevron-left"></i></a>
                            <a class="carousel-control right" href="#myCarousel" data-slide="next"><i
                                    class="fa fa-chevron-right"></i></a>
                            <!-- End arrow button -->
                        </div>
                        <!-- End model thumbnail image -->
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                <div class="product-brand"><a href="#">Charcoal</a></div>
                <h2 class="product-title">Product Quick View Popup</h2>
                <div class="product-review">
                    <div class="rating">
                        <i class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i
                            class="font-13 fa fa-star"></i><i class="font-13 fa fa-star"></i><i
                            class="font-13 fa fa-star"></i>
                    </div>
                    <div class="reviews"><a href="#">5 Reviews</a></div>
                </div>
                <div class="product-info">
                    <div class="product-stock"> <span class="instock">In Stock</span> <span
                            class="outstock hide">Unavailable</span> </div>
                    <div class="product-sku">SKU: <span class="variant-sku">19115-rdxs</span></div>
                </div>
                <div class="pricebox">
                    <span class="price old-price">$900.00</span>
                    <span class="price">$800.00</span>
                </div>
                <div class="sort-description">Avone Multipurpose Bootstrap 4 Html Template that will give you and your
                    customers a smooth shopping experience which can be used for various kinds of stores such as
                    fashion.. </div>
                <form method="post" action="#" id="product_form--option" class="product-form">
                    <div class="product-options">
                        <div class="swatch clearfix swatch-0 option1">
                            <div class="product-form__item">
                                <label class="label">Color:<span class="required">*</span> <span
                                        class="slVariant">Red</span></label>
                                <div class="swatch-element color">
                                    <input class="swatchInput" id="swatch-black0" type="radio" name="option-0"
                                        value="Black">
                                    <label class="swatchLbl small black" for="swatch-black0" title="Black"></label>
                                </div>
                                <div class="swatch-element color">
                                    <input class="swatchInput" id="swatch-blue1" type="radio" name="option-0"
                                        value="blue">
                                    <label class="swatchLbl small blue" for="swatch-blue1" title="Blue"></label>
                                </div>
                                <div class="swatch-element color">
                                    <input class="swatchInput" id="swatch-red1" type="radio" name="option-0"
                                        value="Blue">
                                    <label class="swatchLbl small red" for="swatch-red1" title="Red"></label>
                                </div>
                                <div class="swatch-element color">
                                    <input class="swatchInput" id="swatch-pink1" type="radio" name="option-0"
                                        value="Pink">
                                    <label class="swatchLbl color small pink" for="swatch-pink1" title="Pink"></label>
                                </div>
                                <div class="swatch-element color">
                                    <input class="swatchInput" id="swatch-orange1" type="radio" name="option-0"
                                        value="Orange">
                                    <label class="swatchLbl color small orange" for="swatch-orange1"
                                        title="Orange"></label>
                                </div>
                                <div class="swatch-element color">
                                    <input class="swatchInput" id="swatch-yellow1" type="radio" name="option-0"
                                        value="Yellow">
                                    <label class="swatchLbl color small yellow" for="swatch-yellow1"
                                        title="Yellow"></label>
                                </div>
                            </div>
                        </div>
                        <div class="swatch clearfix swatch-1 option2">
                            <div class="product-form__item">
                                <label class="label">Size:<span class="required">*</span> <span
                                        class="slVariant">XS</span></label>
                                <div class="swatch-element xs">
                                    <input class="swatchInput" id="swatch-1-xs1" type="radio" name="option-1"
                                        value="XS">
                                    <label class="swatchLbl medium" for="swatch-1-xs1" title="XS">XS</label>
                                </div>
                                <div class="swatch-element s">
                                    <input class="swatchInput" id="swatch-1-s1" type="radio" name="option-1"
                                        value="S">
                                    <label class="swatchLbl medium" for="swatch-1-s1" title="S">S</label>
                                </div>
                                <div class="swatch-element m">
                                    <input class="swatchInput" id="swatch-1-m1" type="radio" name="option-1"
                                        value="M">
                                    <label class="swatchLbl medium" for="swatch-1-m1" title="M">M</label>
                                </div>
                                <div class="swatch-element l">
                                    <input class="swatchInput" id="swatch-1-l1" type="radio" name="option-1"
                                        value="L">
                                    <label class="swatchLbl medium" for="swatch-1-l1" title="L">L</label>
                                </div>
                            </div>
                        </div>
                        <div class="product-action clearfix">
                            <div class="quantity">
                                <div class="wrapQtyBtn">
                                    <div class="qtyField">
                                        <a class="qtyBtn minus" href="javascript:void(0);"><i
                                                class="fa anm anm-minus-r" aria-hidden="true"></i></a>
                                        <input type="text" name="quantity" value="1"
                                            class="product-form__input qty">
                                        <a class="qtyBtn plus" href="javascript:void(0);"><i class="fa anm anm-plus-r"
                                                aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="add-to-cart">
                                <button type="button" class="btn button-cart">
                                    <span>Add to cart</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="wishlist-btn">
                    <a class="wishlist add-to-wishlist" href="#" title="Add to Wishlist"><i
                            class="icon anm anm-heart-l" aria-hidden="true"></i> <span>Add to Wishlist</span></a>
                </div>
                <div class="share-icon">
                    <span>Share:</span>
                    <ul class="list--inline social-icons">
                        <li><a href="#" target="_blank"><i class="icon icon-facebook"></i></a></li>
                        <li><a href="#" target="_blank"><i class="icon icon-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="icon icon-pinterest"></i></a></li>
                        <li><a href="#" target="_blank"><i class="icon icon-instagram"></i></a></li>
                        <li><a href="#" target="_blank"><i class="icon icon-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
