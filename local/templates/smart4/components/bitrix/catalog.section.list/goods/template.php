<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<!-- Home -->

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

<!-- Products -->

<div class="products">
    <div class="container">
        <div class="row">
            <div class="col">
                <?php foreach ($arResult['SECTIONS'] as $arSection):
                    if (!empty($arSection['ITEMS'])):
                    ?>
                    <div id="products1c" class="products__title">
                        <a href="<?= $arSection['SECTION_PAGE_URL'] ?>"><?= $arSection['NAME'] ?></a></div>
                    <div class="product_grid">
                        <?php foreach($arSection['ITEMS'] as $arItem): ?>
                            <!-- Product -->
                            <div class="product">
                                <div class="product_image">
                                    <img src="<?= $arItem['PREVIEW_PICTURE'] ?>" alt="">
                                </div>
                                <div class="product_extra product_new">
                                    <a href="categories.html">Новинка</a>
                                </div>
                                <div class="product_content">
                                    <div class="product_title">
                                        <a href="<?= $arSection['SECTION_PAGE_URL'] . $arItem['CODE'] ?>/"><?= $arItem['NAME'] ?></a>
                                    </div>
                                    <div class="product_price">Р6700</div>
                                </div>
                            </div>
                        <? endforeach; ?>
                    </div>
                <? endif;
                endforeach; ?>
            </div>
        </div>
    </div>
</div>
</div>
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
        'TOKEN' => 'mailing_form002',
        'FORM_NAME' => 'Рассылка',
        'PROPS' => array(
            'EMAIL', // type - string
        ),
    )
);
?>


    <!-- Newsletter -->
