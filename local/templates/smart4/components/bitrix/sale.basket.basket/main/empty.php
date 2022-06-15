<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;
?>
<div class="enter th" style="background-image: url('<?= SITE_TEMPLATE_PATH ?>/assets/images/enter-bg3.jpg')">
    <div class="page-top">
        <div class="container">
            <div class="page-top__inner">
                <? $APPLICATION->IncludeComponent(
                    "bitrix:breadcrumb",
                    "top_navigate",
                    array(
                        "PATH" => "",
                        "SITE_ID" => "s1",
                        "START_FROM" => "0"
                    )
                ); ?>
                <h1><?= $APPLICATION->GetTitle() ?></h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="enter__inner">
            <div class="enter__form">
                <div class="enter__form-in">
                    <h2>В корзине пока ничего нет</h2>
                    <div class="enter__top-tx">Перейдите в каталог или воспользуйтесь<br> поиском, если ищете что-то конкретное</div><a class="button button-primary" href="/catalog">перейти в каталог</a>
                </div>
            </div>
        </div>
    </div>
</div>