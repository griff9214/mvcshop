<?php
include ROOT . "/Views/layouts/header.php";
?>
<body>

<div id="templatemo_body_wrapper">
    <div id="templatemo_wrapper">

        <div id="templatemo_header">
            <div id="site_title"><h1><a href="#">Online Shoes Store</a></h1></div>
            <div id="header_right">
                <p>
                    <a href="#">My Account</a> | <a href="#">My Wishlist</a> | <a href="#">My Cart</a> | <a href="#">Checkout</a>
                    | <a href="#">Log In</a></p>
                <p>
                    Shopping Cart: <strong>3 items</strong> ( <a href="shoppingcart.html">Show Cart</a> )
                </p>
            </div>
            <div class="cleaner"></div>
        </div> <!-- END of templatemo_header -->

        <div id="templatemo_menubar">
            <div id="top_nav" class="ddsmoothmenu">
                <ul>
                    <li><a href="index.html" class="selected">Home</a></li>
                    <li><a href="products.html">Products</a>
                        <ul>
                            <li><a href="#submenu1">Sub menu 1</a></li>
                            <li><a href="#submenu2">Sub menu 2</a></li>
                            <li><a href="#submenu3">Sub menu 3</a></li>
                            <li><a href="#submenu4">Sub menu 4</a></li>
                            <li><a href="#submenu5">Sub menu 5</a></li>
                        </ul>
                    </li>
                    <li><a href="about.html">About</a>
                        <ul>
                            <li><a href="#submenu1">Sub menu 1</a></li>
                            <li><a href="#submenu2">Sub menu 2</a></li>
                            <li><a href="#submenu3">Sub menu 3</a></li>
                        </ul>
                    </li>
                    <li><a href="faqs.html">FAQs</a></li>
                    <li><a href="checkout.html">Checkout</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
                <br style="clear: left"/>
            </div> <!-- end of ddsmoothmenu -->
            <div id="templatemo_search">
                <form action="#" method="get">
                    <input type="text" value=" " name="keyword" id="keyword" title="keyword" onfocus="clearText(this)"
                           onblur="clearText(this)" class="txt_field"/>
                    <input type="submit" name="Search" value=" " alt="Search" id="searchbutton" title="Search"
                           class="sub_btn"/>
                </form>
            </div>
        </div> <!-- END of templatemo_menubar -->

        <div id="templatemo_main">
            <?
            include ROOT."/Views/layouts/sidebar.php";
            ?>
            <div id="content" class="float_r">
                <div id="slider-wrapper">
                    <div id="slider" class="nivoSlider">
                        <img src="<?= TEMPLATE_PATH; ?>images/slider/02.jpg" alt=""/>
                        <a href="#"><img src="<?= TEMPLATE_PATH; ?>images/slider/01.jpg" alt=""
                                         title="This is an example of a caption"/></a>
                        <img src="<?= TEMPLATE_PATH; ?>images/slider/03.jpg" alt=""/>
                        <img src="<?= TEMPLATE_PATH; ?>images/slider/04.jpg" alt="" title="#htmlcaption"/>
                    </div>
                    <div id="htmlcaption" class="nivo-html-caption">
                        <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
                    </div>
                </div>
                <script type="text/javascript" src="<?= TEMPLATE_PATH; ?>js/jquery-1.4.3.min.js"></script>
                <script type="text/javascript" src="<?= TEMPLATE_PATH; ?>js/jquery.nivo.slider.pack.js"></script>
                <script type="text/javascript">
                    $(window).load(function () {
                        $('#slider').nivoSlider();
                    });
                </script>
                <h1>New Products</h1>
                <div class="product_box">
                    <h3>Ut eu feugiat</h3>
                    <a href="productdetail.html"><img src="<?= TEMPLATE_PATH; ?>images/product/01.jpg"
                                                      alt="Shoes 1"/></a>
                    <p>Nulla rutrum neque vitae erat condimentum eget malesuada.</p>
                    <p class="product_price">$ 100</p>
                    <a href="shoppingcart.html" class="addtocart"></a>
                    <a href="productdetail.html" class="detail"></a>
                </div>
                <div class="product_box">
                    <h3>Curabitur et turpis</h3>
                    <a href="productdetail.html"><img src="<?= TEMPLATE_PATH; ?>images/product/02.jpg"
                                                      alt="Shoes 2"/></a>
                    <p>Sed congue, erat id congue vehicula. Validate <a href="http://validator.w3.org/check?uri=referer"
                                                                        rel="nofollow">XHTML</a> &amp; <a
                                href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>.</p>
                    <p class="product_price">$ 80</p>
                    <a href="shoppingcart.html" class="addtocart"></a>
                    <a href="productdetail.html" class="detail"></a>
                </div>
                <div class="product_box no_margin_right">
                    <h3>Mauris consectetur</h3>
                    <a href="productdetail.html"><img src="<?= TEMPLATE_PATH; ?>images/product/03.jpg"
                                                      alt="Shoes 3"/></a>
                    <p>Morbi non risus vitae est vestibulum tincidunt ac eget metus.</p>
                    <p class="product_price">$ 60</p>
                    <a href="shoppingcart.html" class="addtocart"></a>
                    <a href="productdetail.html" class="detail"></a>
                </div>

                <div class="cleaner"></div>

                <div class="product_box">
                    <h3>Proin volutpat</h3>
                    <a href="productdetail.html"><img src="<?= TEMPLATE_PATH; ?>images/product/04.jpg"
                                                      alt="Shoes 4"/></a>
                    <p>Sed semper euismod dolor sit amet interdum. Phasellus in mi eros.</p>
                    <p class="product_price">$ 220</p>
                    <a href="shoppingcart.html" class="addtocart"></a>
                    <a href="productdetail.html" class="detail"></a>
                </div>
                <div class="product_box">
                    <h3>Aenean tempus</h3>
                    <a href="productdetail.html"><img src="<?= TEMPLATE_PATH; ?>images/product/05.jpg"
                                                      alt="Shoes 5"/></a>
                    <p>Maecenas porttitor erat quis leo pellentesque molestie.</p>
                    <p class="product_price">$ 180</p>
                    <a href="shoppingcart.html" class="addtocart"></a>
                    <a href="productdetail.html" class="detail"></a>
                </div>
                <div class="product_box no_margin_right">
                    <h3>Nulla luctus urna</h3>
                    <a href="productdetail.html"><img src="<?= TEMPLATE_PATH; ?>images/product/06.jpg"
                                                      alt="Shoes 6"/></a>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p class="product_price">$ 160</p>
                    <a href="shoppingcart.html" class="addtocart"></a>
                    <a href="productdetail.html" class="detail"></a>
                </div>
            </div>
            <div class="cleaner"></div>
        </div> <!-- END of templatemo_main -->
        <?php
        include ROOT . "/Views/layouts/footer.php";
        ?>
