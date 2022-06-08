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
    <div class="home_slider_container">

        <!-- Home Slider -->
        <div class="owl-carousel owl-theme home_slider">
            <!-- Slider Item -->
            <?php foreach ($arResult['ITEMS'] as $arItem): ?>
                <div class="owl-item home_slider_item">
                    <div class="home_slider_background"
                         style="background-image:url('<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>')"></div>
                    <div class="home_slider_content_container">
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <div class="home_slider_content" data-animation-in="fadeIn"
                                         data-animation-out="animate-out fadeOut">
                                        <div class="home_slider_title"><?= $arItem['PROPERTIES']['TITLE']['VALUE'] ?></div>
                                        <div class="home_slider_subtitle"><?= $arItem['PREVIEW_TEXT'] ?></div>
                                        <div class="button button_light home_button"><a href="<?= !empty($arItem['PROPERTIES']['BTN_LINK']['VALUE']) ? $arItem['PROPERTIES']['BTN_LINK']['VALUE'] : '/catalog' ?>"><?= $arItem['PROPERTIES']['BTN_TEXT']['VALUE'] ?></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <? endforeach; ?>
        </div>
        <!-- Home Slider Dots -->

        <div class="home_slider_dots_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_slider_dots">
                            <ul id="home_slider_custom_dots" class="home_slider_custom_dots">
                                <?php for ($i = 1; $i <= count($arResult['ITEMS']); $i++): ?>
                                    <li class="home_slider_custom_dot <?= $i == 1 ? 'active' : '' ?>">0<?= $i ?>.</li>
                                <?php endfor; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
