<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

/**
 * @var array $arParams
 * @var array $arResult
 * @var $APPLICATION CMain
 */

if ($arParams["SET_TITLE"] == "Y") {
    $APPLICATION->SetTitle(Loc::getMessage("SOA_ORDER_COMPLETE"));
}
?>

<? if (!empty($arResult["ORDER"])): ?>
    <!-- Home -->

    <div class="home">
        <div class="home_container">
            <div class="home_background" style="background-image:url(<?= SITE_TEMPLATE_PATH ?>/assets/images/cart.jpg)"></div>
            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content">
                                <div class="breadcrumbs">
                                    <ul>
                                        <li><a href="index.html">Главное</a></li>
                                        <li>Корзина</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="newsletter_border"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="newsletter_content text-center">
                        <div class="newsletter_title">Спасиба за покупку!</div>
                        <div class="newsletter_text"><p>мы сообщим вам когда товар будет готов к получению</p></div>
                        <button class="newsletter_button trans_200"><a href="/"><span>Перейдите на главную страницу</span></a></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
<?php endif; ?>
