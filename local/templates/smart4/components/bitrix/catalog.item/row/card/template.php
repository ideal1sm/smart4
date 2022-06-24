<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $item
 * @var array $actualItem
 * @var array $minOffer
 * @var array $itemIds
 * @var array $price
 * @var array $measureRatio
 * @var bool $haveOffers
 * @var bool $showSubscribe
 * @var array $morePhoto
 * @var bool $showSlider
 * @var bool $itemHasDetailUrl
 * @var string $imgTitle
 * @var string $productTitle
 * @var string $buttonSizeClass
 * @var CatalogSectionComponent $component
 */
?>

<div class="swiper-slide">
    <div class="product">
        <div class="product_image"><img src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" alt=""></div>
        <?php if (!empty($item['PROPERTIES']['POPULAR']['VALUE'])): ?>
            <div class="product_extra product_hot"><a href="javascript:void(0)">Порулярно</a></div>
        <? endif; ?>
        <?php if (!empty($item['PROPERTIES']['NEW']['VALUE'])): ?>
            <div class="product_extra product_new"><a href="javascript:void(0)">Новинка!</a></div>
        <? endif; ?>
        <?php if (!empty($item['PROPERTIES']['PROMO']['VALUE'])): ?>
            <div class="product_extra product_sale"><a href="javascript:void(0)">Порулярно</a></div>
        <? endif; ?>
        <div class="product_content">
            <div class="product_title"><a href="<?= $item['DETAIL_PAGE_URL'] ?>"><?= $item['NAME'] ?></a></div>
            <div class="product_price"><?= $item['PRICES']['base']['PRINT_VALUE'] ?></div>
        </div>
    </div>
</div>
