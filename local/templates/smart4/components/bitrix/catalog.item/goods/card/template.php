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

<div class="product_image">
    <img src="<?= $item['PREVIEW_PICTURE']['SRC'] ?>" alt="">
</div>
<div class="product_extra product_new">
    <a href="javascript:void(0)">Новинка</a>
</div>
<div class="product_content">
    <div class="product_title">
        <a href="<?= $item['DETAIL_PAGE_URL'] ?>"><?= $item['NAME'] ?></a>
    </div>
    <div class="product_price"><?= $item['PRICES']['base']['PRINT_VALUE'] ?></div>
</div>