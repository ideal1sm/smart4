<?php

/**
 * @var $APPLICATION
 */

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$APPLICATION->SetTitle("Корзина");

?>
            <? $APPLICATION->IncludeComponent(
                "bitrix:sale.basket.basket",
                "main",
                array(
                    "ACTION_VARIABLE" => "basketAction",
                    "ADDITIONAL_PICT_PROP_10" => "-",
                    "AUTO_CALCULATION" => "Y",
                    "BASKET_IMAGES_SCALING" => "adaptive",
                    "COLUMNS_LIST_EXT" => array(
                        0 => "PREVIEW_PICTURE",
                        1 => "DISCOUNT",
                        2 => "DELETE",
                        3 => "DELAY",
                        4 => "TYPE",
                        5 => "SUM",
                        6 => "PROPERTY_OLD_PRICE",
                        7 => "PROPERTY_BRANDS",
                    ),
                    "COLUMNS_LIST_MOBILE" => array(),
                    "COMPATIBLE_MODE" => "Y",
                    "CORRECT_RATIO" => "Y",
                    "DEFERRED_REFRESH" => "N",
                    "DISCOUNT_PERCENT_POSITION" => "bottom-right",
                    "DISPLAY_MODE" => "extended",
                    "EMPTY_BASKET_HINT_PATH" => "/catalog",
                    "GIFTS_BLOCK_TITLE" => "Выберите один из подарков",
                    "GIFTS_CONVERT_CURRENCY" => "N",
                    "GIFTS_HIDE_BLOCK_TITLE" => "N",
                    "GIFTS_HIDE_NOT_AVAILABLE" => "N",
                    "GIFTS_MESS_BTN_BUY" => "Выбрать",
                    "GIFTS_MESS_BTN_DETAIL" => "Подробнее",
                    "GIFTS_PAGE_ELEMENT_COUNT" => "4",
                    "GIFTS_PLACE" => "BOTTOM",
                    "GIFTS_PRODUCT_PROPS_VARIABLE" => "prop",
                    "GIFTS_PRODUCT_QUANTITY_VARIABLE" => "quantity",
                    "GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
                    "GIFTS_SHOW_OLD_PRICE" => "N",
                    "GIFTS_TEXT_LABEL_GIFT" => "Подарок",
                    "HIDE_COUPON" => "N",
                    "LABEL_PROP" => array(),
                    "PATH_TO_ORDER" => "/personal/order/make/",
                    "PRICE_DISPLAY_MODE" => "Y",
                    "PRICE_VAT_SHOW_VALUE" => "N",
                    "PRODUCT_BLOCKS_ORDER" => "props,sku,columns",
                    "QUANTITY_FLOAT" => "Y",
                    "SET_TITLE" => "Y",
                    "SHOW_DISCOUNT_PERCENT" => "Y",
                    "SHOW_FILTER" => "N",
                    "SHOW_RESTORE" => "Y",
                    "TEMPLATE_THEME" => "blue",
                    "TOTAL_BLOCK_DISPLAY" => array("bottom"),
                    "USE_DYNAMIC_SCROLL" => "Y",
                    "USE_ENHANCED_ECOMMERCE" => "N",
                    "USE_GIFTS" => "N",
                    "USE_PREPAYMENT" => "N",
                    "USE_PRICE_ANIMATION" => "Y"
                ),
                false
            ); ?>
    <script type="application/javascript">
        'use strict';
        $(function () {
            if ($('.basket-coupon-alert').is('.text-danger')) {
                console.log(this);
                $(this).addClass('nn');
            }
        });
    </script><? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>