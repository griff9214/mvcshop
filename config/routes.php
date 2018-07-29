<?php
/**
 * Created by PhpStorm.
 * User: Григорий
 * Date: 28.07.2018
 * Time: 17:16
 */

return [
    '^$' => 'site/index',
    //'^category/([0-9]{1,})[/]*([0-9]*)$' => 'category/displayCategory/$1/$2',
    '^category/([0-9]{1,})/([0-9]{1,})$' => 'category/displayCategory/$1/$2',
    '^category/([0-9]{1,})$' => 'category/displayCategory/$1',
    '^catalog/([0-9]*)$' => 'catalog/displayCatalog/$1',
    '^catalog$' => 'catalog/displayCatalog',
    '^product/([0-9]{1,})$' => 'product/displayItem/$1',
];