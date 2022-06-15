<?php

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

/**
 * @var array $mobileColumns
 * @var array $arParams
 * @var string $templateFolder
 */

$usePriceInAdditionalColumn = in_array('PRICE', $arParams['COLUMNS_LIST'], true) && $arParams['PRICE_DISPLAY_MODE'] === 'Y';
$useSumColumn = in_array('SUM', $arParams['COLUMNS_LIST'], true);
$useActionColumn = in_array('DELETE', $arParams['COLUMNS_LIST'], true);

$restoreColSpan = 2 + $usePriceInAdditionalColumn + $useSumColumn + $useActionColumn;

$positionClassMap = array(
    'left' => 'basket-item-label-left',
    'center' => 'basket-item-label-center',
    'right' => 'basket-item-label-right',
    'bottom' => 'basket-item-label-bottom',
    'middle' => 'basket-item-label-middle',
    'top' => 'basket-item-label-top'
);

$discountPositionClass = '';
if ($arParams['SHOW_DISCOUNT_PERCENT'] === 'Y' && !empty($arParams['DISCOUNT_PERCENT_POSITION'])) {
    foreach (explode('-', $arParams['DISCOUNT_PERCENT_POSITION']) as $pos) {
        $discountPositionClass .= isset($positionClassMap[$pos]) ? ' ' . $positionClassMap[$pos] : '';
    }
}

$labelPositionClass = '';
if (!empty($arParams['LABEL_PROP_POSITION'])) {
    foreach (explode('-', $arParams['LABEL_PROP_POSITION']) as $pos) {
        $labelPositionClass .= isset($positionClassMap[$pos]) ? ' ' . $positionClassMap[$pos] : '';
    }
}
?>
<script id="basket-item-template" type="text/html">
    {{^SHOW_RESTORE}}
    <div class="cart-in__item catalog__item" id="basket-item-{{ID}}" data-entity="basket-item"
         data-id="{{ID}}">
        <a class="cart-in__item-close" data-entity="basket-item-delete" href="javascript:void(0)">
            <svg>
                <use xlink:href="#close"></use>
            </svg>
        </a>
        <div class="cart-in__item-img"><img src="{{{IMAGE_URL}}}" alt=""></div>
        <div class="cart-in__item-info">
            <a class="cart-in__item-title" href="{{DETAIL_PAGE_URL}}">{{NAME}}</a>
            {{#BRANDS}}
            <div class="cart-in__item-info-tx">Бренд: {{BRANDS}}</div>
            {{/BRANDS}}
            <div class="cart-in__item-info-tx">Размер: 16</div>
        </div>
        <div class="cart-in__item-price mob">
            <div class="cart-in__item-price-now">{{{PRICE_FORMATED}}}</div>
            {{#DISCOUNT_PRICE}}
            <div class="cart-in__item-price-old">{{{FULL_PRICE_FORMATED}}}</div>
            {{/DISCOUNT_PRICE}}
        </div>
        <div class="cart-in__item-amount">
            <div class="amount" data-entity="basket-item-quantity-block">
                <input type="text" data-entity="basket-item-quantity-field"
                       id="basket-item-quantity-{{ID}}" value="{{QUANTITY}}"
                       data-value="{{QUANTITY}}" max="{{AVAILABLE_QUANTITY}}">
                <span class="up" data-entity="basket-item-quantity-plus"></span>
                <span class="down" data-entity="basket-item-quantity-minus"></span>
            </div>
        </div>
        <div class="cart-in__item-price">
            <div class="cart-in__item-price-now" id="basket-item-sum-price-{{ID}}">{{{SUM_PRICE_FORMATED}}}</div>
            {{#DISCOUNT_PRICE}}
            <div class="cart-in__item-price-old">{{{SUM_FULL_PRICE_FORMATED}}}</div>
            {{/DISCOUNT_PRICE}}
        </div>
    </div>
    {{/SHOW_RESTORE}}
</script>