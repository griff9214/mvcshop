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
                    <li><a href="index.html">Home</a></li>
                    <li><a href="products.html" class="selected">Products</a>
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
            include ROOT . "/Views/layouts/sidebar.php";
            ?>
            <div id="content" class="float_r">
                <h1><? echo $cat_info['name']; ?> page: <?=$page;?></h1>
                <?
                $i=0;
                foreach ($products as $product):
                    $i++;
                    if ($i % 3 == 0) {
                        $no_margin_class = "no_margin_right";
                        $cleaner = '<div class="cleaner"></div>';
                    } else {
                        $no_margin_class = "";
                        $cleaner = '';
                    }
                    ?>
                    <div class="product_box <?= $no_margin_class; ?>">
                        <h3><?= $product['name']; ?></h3>
                        <a href="productdetail.html"><img src="images/product/03.jpg" alt="Shoes 3"/></a>
                        <p><?= $product['description']; ?></p>
                        <p class="product_price">$ <?=$product['price'];?></p>
                        <a href="shoppingcart.html" class="addtocart"></a>
                        <a href="/product/<?=$product['id'];?>" class="detail"></a>
                    </div>
                    <?= $cleaner; ?>
                <? endforeach; ?>
                <?
                if($cleaner == ''){
                    echo '<div class="cleaner"></div>';
                }
                ?>
                <? echo $pagination->getCode();?>
            </div>
            <div class="cleaner"></div>

        </div> <!-- END of templatemo_main -->
        <?php
        include ROOT . "/Views/layouts/footer.php";
        ?>
