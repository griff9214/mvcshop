<div id="sidebar" class="float_l">
    <div class="sidebar_box"><span class="bottom"></span>
        <h3>Categories</h3>
        <div class="content">
            <ul class="sidebar_list">
                <?
                //получение категорий в массив
                $categories = CategoriesModel::getAll();
                //определяем индекс 1го элемента массива с категориями
                end($categories);
                $lastCatIndex = key($categories);

                //определяем индекс последнего элемента массива с категориями
                reset($categories);
                $firstCatIndex = key($categories);
                foreach ($categories as $key => $category):
                    if ($key == $firstCatIndex) {
                        $class = "class='first'";
                    } elseif ($key == $lastCatIndex) {
                        $class = "class='last'";
                    } else {
                        $class = "";
                    }
                    if (isset($cat_info) && $cat_info['id'] == $category['id']) {
                        $is_active_class = 'class="active"';
                    } else {
                        $is_active_class = '';
                    }
                    ?>

                    <li <?= $class; ?>>
                        <a href="/category/<?= $category['id']; ?>" <?=$is_active_class;?>><?= $category['name'] ?></a>
                    </li>
                <? endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="sidebar_box"><span class="bottom"></span>
        <h3>Bestsellers </h3>
        <div class="content">
            <div class="bs_box">
                <a href="#"><img src="<?= TEMPLATE_PATH; ?>images/templatemo_image_01.jpg" alt="image"/></a>
                <h4><a href="#">Donec nunc nisl</a></h4>
                <p class="price">$10</p>
                <div class="cleaner"></div>
            </div>
            <div class="bs_box">
                <a href="#"><img src="<?= TEMPLATE_PATH; ?>images/templatemo_image_01.jpg" alt="image"/></a>
                <h4><a href="#">Lorem ipsum dolor sit</a></h4>
                <p class="price">$12</p>
                <div class="cleaner"></div>
            </div>
            <div class="bs_box">
                <a href="#"><img src="<?= TEMPLATE_PATH; ?>images/templatemo_image_01.jpg" alt="image"/></a>
                <h4><a href="#">Phasellus ut dui</a></h4>
                <p class="price">$20</p>
                <div class="cleaner"></div>
            </div>
            <div class="bs_box">
                <a href="#"><img src="<?= TEMPLATE_PATH; ?>images/templatemo_image_01.jpg" alt="image"/></a>
                <h4><a href="#">Vestibulum ante</a></h4>
                <p class="price">$8</p>
                <div class="cleaner"></div>
            </div>
        </div>
    </div>
</div>
