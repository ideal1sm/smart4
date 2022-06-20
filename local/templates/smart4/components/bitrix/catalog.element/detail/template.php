<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */

$this->setFrameMode(true);
?>
<!-- Home -->
<script>
    var path = '<?= $arResult['ORIGINAL_PARAMETERS']['SECTION_CODE']; ?>/';
</script>
<div class="home">
    <div class="home_container">
        <div class="home_background"
             style="background-image:url(<?= SITE_TEMPLATE_PATH ?>/assets/images/categories.jpg)"></div>
        <div class="home_content_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <div class="home_title">Smart4<span>.</span></div>
                            <div class="home_text"><p>Лучшая цена. Нашли дешевле - сделаем скидку</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Product Details -->

<div class="product_details">
    <div class="container">
        <div class="row details_row">
            <!-- Product Image -->
            <div class="col-lg-6">
                <div class="details_image">
                    <div class="details_image_large">
                        <img src="<?= $arResult['DETAIL_PICTURE']['SRC'] ?>" alt="">
                    </div>
                    <div class="details_image_thumbnails d-flex flex-row align-items-start justify-content-between">
                        <?php foreach ($arResult['PROPERTIES']['GALLERY']['PATH'] as $i => $arImgPath): ?>
                            <div class="details_image_thumbnail <?= $i === 0 ? 'active' : '' ?>"
                                 data-image="<?= $arImgPath ?>">
                                <img src="<?= $arImgPath ?>" alt="">
                            </div>
                        <? endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Product Content -->
            <div class="col-lg-6">
                <div class="details_content">
                    <div class="details_name"><?= $arResult['NAME'] ?></div>
                    <!--                    <div class="details_discount">-->
                    <? //= $arResult['PRICES']['base']['PRINT_VALUE'] ?><!--</div>-->
                    <div class="details_price"><?= $arResult['PRICES']['base']['PRINT_VALUE'] ?></div>

                    <!-- In Stock -->
                    <div class="in_stock_container">
                        <div class="availability">Доступность:</div>
                        <?php if ($arResult['PRICES']['base']['CAN_BUY'] === 'Y'): ?>
                            <span>В наличии</span>
                        <?php else: ?>
                            <span>Нет в наличии</span>
                        <? endif; ?>
                    </div>
                    <div class="details_text">
                        <p><?= $arResult['DETAIL_TEXT'] ?></p>
                    </div>

                    <!-- Product Quantity -->
                    <form action="<?= POST_FORM_ACTION_URI ?>" method="post" enctype="multipart/form-data"
                          class="add2cart">
                        <input type="hidden" name="action" value="ADD2BASKET">
                        <input type="hidden" name="ajax_basket" value="Y">
                        <input type="hidden" name="<? echo $arParams["PRODUCT_ID_VARIABLE"] ?>"
                               value="<?= $arResult['ID'] ?>" class="id-offer">
                    <div class="product_quantity_container">
<!--                        <div class="product_quantity clearfix">-->
<!--                            <span>Кол-во</span>-->
<!--                            <input type="text" name="QUANTITY" value="1" class="form-control" id="QUANTITY--><?//= $arResult['ID'] ?><!--">-->
<!--                            <div class="quantity_buttons">-->
<!--                                <div id="quantity_inc_button" class="quantity_inc quantity_control"><i-->
<!--                                            class="fa fa-chevron-up" aria-hidden="true"></i></div>-->
<!--                                <div id="quantity_dec_button" class="quantity_dec quantity_control"><i-->
<!--                                            class="fa fa-chevron-down" aria-hidden="true"></i></div>-->
<!--                            </div>-->
<!--                        </div>-->
                            <button type="submit" name="<?= $arParams["ACTION_VARIABLE"] . "ADD2BASKET" ?>">Добавить в
                                корзини
                            </button>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</div>

<!-- Products -->
<?php if (!empty($arResult['PROPERTIES']['ALSO_BUY']['VALUE'])): ?>
    <div class="products">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <div class="products_title">С этим товаром покупают</div>
                </div>
            </div>
            <?php
            $GLOBALS['arrFilter'] = array('ID' => $arResult['PROPERTIES']['ALSO_BUY']['VALUE']);
            $intSectionID = $APPLICATION->IncludeComponent(
                "bitrix:catalog.section",
                "goods",
                array(
                    "IBLOCK_TYPE" => 'catalog',
                    "IBLOCK_ID" => '4',
                    'LINE_ELEMENT_COUNT' => '4',
                    'FILTER_NAME' => 'arrFilter',
                    'SHOW_ALL_WO_SECTION' => 'Y',
                ),
            );
            unset($GLOBALS['arrFilter']);
            ?>
        </div>
    </div>
<? endif; ?>
<!-- Newsletter -->

<?
$APPLICATION->IncludeComponent(
    "custom:form",
    "mailing_form",
    array(
        'IBLOCK_ID' => '3',
        'MAIL_EVENT' => 'FORM_SENDED',
        'RECAPTCHA_ENABLED' => 'N',
        'RECAPTCHA_PUBLIC_KEY' => '6LcqwJwdAAAAAGFfWMfSsziyrRMTV0kUARrgOCts',
        'RECAPTCHA_PRIVATE_KEY' => '6LcqwJwdAAAAAATrf2Qqm8-KSw_vyhwCuPdTnqN8',
        'ACTIVE' => 'Y',
        'TOKEN' => 'mailing_form004',
        'FORM_NAME' => 'Рассылка',
        'PROPS' => array(
            'EMAIL', // type - string
        ),
    )
);
?>
