<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<? if (!empty($arResult)): ?>
    <ul class="list-unstyled mb-0">
        <?
        foreach ($arResult as $arItem):
            if ($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                continue;
            ?>
            <li class="mb-2"><a href="<?= $arItem["LINK"] ?>" class="text-muted"><?= $arItem["TEXT"] ?></a></li>
        <? endforeach ?>
    </ul>
<? endif ?>