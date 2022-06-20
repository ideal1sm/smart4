<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<ul>
<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
		continue;
?>
	<?if($arItem["PARAMS"]['IS_PARENT']):?>
		<li class="hassubs">
            <a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
            <ul>
                <?php foreach($arItem["PARAMS"]['ITEMS'] as $arSection): ?>
                <li><a href="<?= $arSection['1'] ?>"><?= $arSection['0'] ?></a></li>
                <? endforeach; ?>
            </ul>
        </li>
	<?else:?>
		<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
	
<?endforeach?>

</ul>
<?endif?>