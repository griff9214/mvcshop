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
                    <a href="#">My Account</a> | <a href="#">My Wishlist</a> | <a href="#">My Cart</a> | <a href="#">Checkout</a> | <a href="#">Log In</a></p>
                <p>
                    Shopping Cart: <strong>3 items</strong> ( <a href="shoppingcart.html">Show Cart</a> )
                </p>
            </div>
            <div class="cleaner"></div>
        </div> <!-- END of templatemo_header -->

        <div id="templatemo_menubar">
            <div id="top_nav" class="ddsmoothmenu">
                <ul>
                    <li><a href="index.html">Home</a></li>
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
                <br style="clear: left" />
            </div> <!-- end of ddsmoothmenu -->
            <div id="templatemo_search">
                <form action="#" method="get">
                    <input type="text" value=" " name="keyword" id="keyword" title="keyword" onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                    <input type="submit" name="Search" value=" " alt="Search" id="searchbutton" title="Search" class="sub_btn"  />
                </form>
            </div>
        </div> <!-- END of templatemo_menubar -->

        <div id="templatemo_main">
            <?
            include ROOT."/Views/layouts/sidebar.php";
            ?>
            <div id="content" class="float_r">
                <h1>Product Detail</h1>
                <div class="content_half float_l">
                    <a  rel="lightbox[portfolio]" href="images/product/10_l.jpg"><img src="images/product/10.jpg" alt="image" /></a>
                </div>
                <div class="content_half float_r">
                    <table>
                        <tr>
                            <td width="160">Price:</td>
                            <td>$100</td>
                        </tr>
                        <tr>
                            <td>Availability:</td>
                            <td>In Stock</td>
                        </tr>
                        <tr>
                            <td>Model:</td>
                            <td>Product 14</td>
                        </tr>
                        <tr>
                            <td>Manufacturer:</td>
                            <td>Apple</td>
                        </tr>
                        <tr>
                            <td>Quantity</td>
                            <td><input type="text" value="1" style="width: 20px; text-align: right" /></td>
                        </tr>
                    </table>
                    <div class="cleaner h20"></div>

                    <a href="shoppingcart.html" class="addtocart"></a>

                </div>
                <div class="cleaner h30"></div>

                <h5>Product Description</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur semper quam sit amet turpis rhoncus id venenatis tellus sollicitudin. Fusce ullamcorper, dolor non mollis pulvinar, turpis tortor commodo nisl, et semper lectus augue blandit tellus. Quisque id bibendum libero. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>.</p>

                <div class="cleaner h50"></div>

                <h3>Related Products</h3>
                <div class="product_box">
                    <a href="productdetail.html"><img src="images/product/01.jpg" alt="" /></a>
                    <h3>Ut eu feugiat</h3>
                    <p class="product_price">$ 100</p>
                    <a href="shoppingcart.html" class="addtocart"></a>
                    <a href="productdetail.html" class="detail"></a>
                </div>
                <div class="product_box">
                    <a href="productdetail.html"><img src="images/product/02.jpg" alt="" /></a>
                    <h3>Curabitur et turpis</h3>
                    <p class="product_price">$ 200</p>
                    <a href="shoppingcart.html" class="addtocart"></a>
                    <a href="productdetail.html" class="detail"></a>
                </div>
                <div class="product_box no_margin_right">
                    <a href="productdetail.html"><img src="images/product/03.jpg" alt="" /></a>
                    <h3>Mauris consectetur</h3>
                    <p class="product_price">$ 120</p>
                    <a href="shoppingcart.html" class="addtocart"></a>
                    <a href="productdetail.html" class="detail"></a>
                </div>
            </div>
            <div class="cleaner"></div>
        </div> <!-- END of templatemo_main -->
        <?php
        include ROOT . "/Views/layouts/footer.php";
        ?>
