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
                            <li class="lvl1 parent megamenu mdropdown"><a href="/page">Home <i
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
                            <p><a href="/login" class="btn">Login</a></p>

                            <p class="text-center">New User? <a href="/register" class="register">Create an
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
