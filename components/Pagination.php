<?php
/**
 * Created by PhpStorm.
 * User: Григорий
 * Date: 29.07.2018
 * Time: 13:28
 */


class Pagination
{
    private $amount;
    private $current;

    public function __construct($total, $current, $limitByPage)
    {
        $this->setAmount($total, $limitByPage);
        $this->setCurrent($current);
    }

    /**
     * @return string
     */
    public function getCode()
    {
        $code = "<ul class='pagination'>";
        /**
         * получаем массив ссылок и обрабатываем. для текущей страницы ссылку не выводим
         */
        foreach ($this->getUrls() as $link) {
            if (!$link['current']) {
                $code .= '<li><a href="' . $link["href"] . '">' . $link["anchor"] . '</a></li>';
            } else {
                $code .= '<li class="current">' . $link["anchor"] . '</li>';
            }
        }
        $code .= '</ul>';
        return $code;
    }

    /**
     * @return array
     */
    private function getUrls()
    {
        // получаем хвост текущей страницы
        $tail = rtrim($_SERVER['REQUEST_URI'], '/');
        /**
         * для каталога пагинация осуществляется посредством catalog/$page
         * для категорий они осуществляется category/$id/$page поэтому хвосты меняются по-разному
         */
        if(strpos ($tail, 'catalog') === false){
            $urlReplacePattern = '~([0-9]+/)[0-9]{1,}$~';
        } else {
            $urlReplacePattern = '~(/)[0-9]{1,}$~';
        }
        $urls = [];
        for ($i = 1; $i <= $this->amount; $i++) {

            $isCurrent = ($i == $this->current) ? true : false;
            /**
             * ищем в хвосте текущей страницы совпадение с шаблоном
             * предположим, что шаблон нам известен и действует для всех разделов сайта
             * исходя из шаблона формируются ссылки пагинации.
             * Для 1й страницы ссылка является ссылкой на страницу категории/каталога
             */
            if ($i == 1) {
                $href = rtrim(preg_replace($urlReplacePattern, '$1', $tail), '/') . '/';
            } else {
                $href = rtrim(preg_replace($urlReplacePattern, '$1', $tail), '/') . '/' . $i . '/';
            }

            $urls[$i] = [
                'current' => $isCurrent,
                'href' => $href,
                'anchor' => $i,
            ];
        };
        return $urls;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($total, $limitByPage)
    {
        $this->amount = ceil($total / $limitByPage);
    }

    /**
     * @param mixed $current
     */
    public function setCurrent($current)
    {
        $this->current = $current;
    }
}