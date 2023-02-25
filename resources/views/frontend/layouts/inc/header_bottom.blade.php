<div class="header-bottom header-bottom-one header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12 text-lg-start text-md-center text-sm-center">
                <!-- logo -->
                <div class="logo mt-15 mb-15">
                    <a href="index.html">
                        <img width="111" height="111" src="{{asset('assets/frontend')}}/images/logo.webp" class="img-fluid" alt="">
                    </a>
                </div>
                <!-- end of logo -->
            </div>
            <div class="col-md-9 col-sm-12 col-xs-12">
                <div
                    class="menubar-top d-flex justify-content-between align-items-center flex-sm-wrap flex-md-wrap flex-lg-nowrap mt-sm-15">
                    <!-- header phone number -->
                    <div class="header-contact d-flex">
                        <div class="phone-icon">
                            <img width="40" height="35" src="{{asset('assets/frontend')}}/images/icon-phone.webp" class="img-fluid"
                                alt="">
                        </div>
                        <div class="phone-number">
                            Phone: <span class="number">1-888-123-456-89</span>
                        </div>
                    </div>
                    <!-- end of header phone number -->
                    <!-- search bar -->
                    <div class="header-advance-search">
                        <form action="#">
                            <input type="text" placeholder="Search your product">
                            <button><span class="icon_search"></span></button>
                        </form>
                    </div>
                    <!-- end of search bar -->
                    <!-- shopping cart -->
                    <div class="shopping-cart" id="shopping-cart">
                        <a href="cart.html">
                            <div class="cart-icon d-inline-block">
                                <span class="icon_bag_alt"></span>
                            </div>
                            <div class="cart-info d-inline-block">
                                <p>Shopping Cart
                                    <span>
                                        0 items - $0.00
                                    </span>
                                </p>
                            </div>
                        </a>
                        <!-- end of shopping cart -->

                        <!-- cart floating box -->
                        <div class="cart-floating-box" id="cart-floating-box">
                            <div class="cart-items">
                                <div class="cart-float-single-item d-flex">
                                    <span class="remove-item"><a href="#"><i class="fa fa-times"></i></a></span>
                                    <div class="cart-float-single-item-image">
                                        <a href="single-product.html"><img width="350" height="350"
                                                src="{{asset('assets/frontend')}}/images/products/product01.webp" class="img-fluid"
                                                alt=""></a>
                                    </div>
                                    <div class="cart-float-single-item-desc">
                                        <p class="product-title"> <a href="single-product.html">Duis pulvinar
                                                obortis eleifend </a></p>
                                        <p class="price"><span class="count">1x</span> $20.50</p>
                                    </div>
                                </div>
                                <div class="cart-float-single-item d-flex">
                                    <span class="remove-item"><a href="#"><i class="fa fa-times"></i></a></span>
                                    <div class="cart-float-single-item-image">
                                        <a href="single-product.html"><img width="350" height="350"
                                                src="{{asset('assets/frontend')}}/images/products/product02.webp" class="img-fluid"
                                                alt=""></a>
                                    </div>
                                    <div class="cart-float-single-item-desc">
                                        <p class="product-title"> <a href="single-product.html">Fusce ultricies
                                                dolor vitae</a></p>
                                        <p class="price"><span class="count">1x</span> $20.50</p>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-calculation">
                                <div class="calculation-details">
                                    <p class="total">Subtotal <span>$22</span></p>
                                </div>
                                <div class="floating-cart-btn text-center">
                                    <a href="checkout.html">Checkout</a>
                                    <a href="cart.html">View Cart</a>
                                </div>
                            </div>
                        </div>
                        <!-- end of cart floating box -->
                    </div>
                </div>

                <!-- navigation section -->
                <div class="main-menu">
                    <nav>
                        <ul>
                            <li class="active"><a href="index.html">HOME</a>
                            </li>
                            <li class="menu-item-has-children"><a href="shop-left-sidebar.html">Shop</a>
                                <ul class="sub-menu">
                                    <li><a href="shop-3-column.html">shop 3 column</a></li>
                                    <li><a href="shop-4-column.html">shop 4 column</a></li>
                                    <li><a href="shop-left-sidebar.html">shop left sidebar</a></li>
                                    <li><a href="shop-right-sidebar.html">shop right sidebar</a></li>
                                    <li><a href="single-product.html">Single Product</a></li>
                                    <li><a href="single-product-variable.html">Single Product variable</a></li>
                                    <li><a href="single-product-affiliate.html">Single Product affiliate</a>
                                    </li>
                                    <li><a href="single-product-group.html">Single Product group</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">PAGES</a>
                                <ul class="mega-menu three-column">
                                    <li><a href="#">Column One</a>
                                        <ul>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="#">Column Two</a>
                                        <ul>
                                            <li><a href="my-account.html">My Account</a></li>
                                            <li><a href="login-register.html">Login Register</a></li>
                                            <li><a href="faq.html">FAQ</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Column Three</a>
                                        <ul>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children"><a href="#">BLOG</a>
                                <ul class="sub-menu">
                                    <li><a href="blog-3-column.html">Blog 3 column</a></li>
                                    <li><a href="blog-grid-left-sidebar.html">Blog Grid Left Sidebar</a></li>
                                    <li><a href="blog-grid-right-sidebar.html">Blog Grid Right Sidebar</a></li>
                                    <li><a href="blog-list-left-sidebar.html">Blog List Left Sidebar</a></li>
                                    <li><a href="blog-list-right-sidebar.html">Blog List Right Sidebar</a></li>
                                    <li><a href="blog-post-left-sidebar.html">Blog Post Left Sidebar</a></li>
                                    <li><a href="blog-post-right-sidebar.html">Blog Post Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">CONTACT</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- end of navigation section -->
            </div>
            <div class="col-12">
                <!-- Mobile Menu -->
                <div class="mobile-menu d-block d-lg-none"></div>
            </div>
        </div>
    </div>
</div>
